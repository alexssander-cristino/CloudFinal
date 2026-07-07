<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCameraRequest;
use App\Http\Requests\UpdateCameraRequest;
use App\Http\Resources\CameraResource;
use App\Services\CameraService;

class CameraController extends Controller
{
    public function __construct(
        protected CameraService $service
    ) {}

    public function index()
    {
        return CameraResource::collection(
            $this->service->listar()
        );
    }

    public function show($id)
    {
        $camera = $this->service->buscar($id);

        if (!$camera) {
            return response()->json([
                'message' => 'Câmera não encontrada.'
            ], 404);
        }

        return new CameraResource($camera);
    }

    public function store(StoreCameraRequest $request)
    {
        $camera = $this->service->cadastrar(
            $request->validated()
        );

        return response()->json(
            new CameraResource($camera),
            201
        );
    }

    public function update(UpdateCameraRequest $request, $id)
    {
        $camera = $this->service->atualizar(
            $id,
            $request->validated()
        );

        if (!$camera) {
            return response()->json([
                'message' => 'Câmera não encontrada.'
            ], 404);
        }

        return new CameraResource($camera);
    }

    public function destroy($id)
    {
        $resultado = $this->service->excluir($id);

        if (!$resultado) {
            return response()->json([
                'message' => 'Câmera não encontrada.'
            ], 404);
        }

        return response()->json([
            'message' => 'Câmera removida com sucesso.'
        ]);
    }
}