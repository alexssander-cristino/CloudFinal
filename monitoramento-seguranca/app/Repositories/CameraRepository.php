<?php

namespace App\Repositories;

use Illuminate\Support\Facades\File;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CameraRepository
{
    private string $arquivo;

    public function __construct()
    {
        $this->arquivo = storage_path('app/data/cameras.json');
    }

    private function ler()
    {
        if (!File::exists($this->arquivo)) {
            File::put($this->arquivo, json_encode([]));
        }

        return json_decode(File::get($this->arquivo), true);
    }

    private function salvar(array $dados)
    {
        File::put(
            $this->arquivo,
            json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );
    }

    public function all()
    {
        return collect($this->ler());
    }

    public function find($id)
    {
        $camera = collect($this->ler())
            ->firstWhere('id', (int)$id);

        if (!$camera) {
            throw new NotFoundHttpException('Câmera não encontrada.');
        }

        return $camera;
    }

    public function create(array $dados)
    {
        $cameras = $this->ler();

        $dados['id'] = count($cameras) + 1;

        $cameras[] = $dados;

        $this->salvar($cameras);

        return $dados;
    }

    public function update($id, array $dados)
    {
        $cameras = $this->ler();

        foreach ($cameras as &$camera) {

            if ($camera['id'] == $id) {

                $camera = array_merge($camera, $dados);

                $this->salvar($cameras);

                return $camera;
            }
        }

        throw new NotFoundHttpException('Câmera não encontrada.');
    }

    public function delete($id)
    {
        $cameras = collect($this->ler())
            ->reject(fn ($camera) => $camera['id'] == $id)
            ->values()
            ->all();

        $this->salvar($cameras);

        return true;
    }
}