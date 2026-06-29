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
    ){}

    public function index()
    {
        return CameraResource::collection(
            $this->service->listar()
        );
    }

    public function show($id)
    {
        return new CameraResource(
            $this->service->buscar($id)
        );
    }

    public function store(StoreCameraRequest $request)
    {
        $camera = $this->service->cadastrar(
            $request->validated()
        );

        return new CameraResource($camera);
    }

    public function update(UpdateCameraRequest $request,$id)
    {
        $camera = $this->service->atualizar(
            $id,
            $request->validated()
        );

        return new CameraResource($camera);
    }

    public function destroy($id)
    {
        $this->service->excluir($id);

        return response()->json([
            'message'=>'Câmera removida com sucesso.'
        ]);
    }
}