<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CameraResource extends JsonResource
{
    public static $wrap = null;

    public function toArray(Request $request): array
    {
        return [
            'id' => $this['id'],
            'nome' => $this['nome'],
            'local' => $this['local'],
            'status' => $this['status'],
            'gravacao' => $this['gravacao'],
            'ultimaVerificacao' => $this['ultimaVerificacao'],
        ];
    }
}