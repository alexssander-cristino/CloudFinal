<?php

namespace App\Repositories;

use App\Models\Camera;

class CameraRepository
{

    public function all()
    {
        return Camera::with([
            'fabricante',
            'location'
        ])->paginate(10);
    }

    public function find($id)
    {
        return Camera::with([
            'fabricante',
            'location'
        ])->findOrFail($id);
    }

    public function create(array $dados)
    {
        return Camera::create($dados);
    }

    public function update($id,array $dados)
    {
        $camera = Camera::findOrFail($id);

        $camera->update($dados);

        return $camera;
    }

    public function delete($id)
    {
        return Camera::destroy($id);
    }

}