<?php

namespace App\Services;

use App\Repositories\CameraRepository;

class CameraService
{

    public function __construct(
        protected CameraRepository $repository
    ){}

    public function listar()
    {
        return $this->repository->all();
    }

    public function buscar($id)
    {
        return $this->repository->find($id);
    }

    public function cadastrar(array $dados)
    {
        return $this->repository->create($dados);
    }

    public function atualizar($id,array $dados)
    {
        return $this->repository->update($id,$dados);
    }

    public function excluir($id)
    {
        return $this->repository->delete($id);
    }

}