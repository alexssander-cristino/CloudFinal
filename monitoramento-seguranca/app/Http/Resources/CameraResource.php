<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CameraResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [

            'id'=>$this->id,

            'uuid'=>$this->uuid,

            'nome'=>$this->nome,

            'descricao'=>$this->descricao,

            'ip'=>$this->ip,

            'porta'=>$this->porta,

            'modelo'=>$this->modelo,

            'serial'=>$this->serial,

            'mac_address'=>$this->mac_address,

            'resolucao'=>$this->resolucao,

            'fps'=>$this->fps,

            'codec'=>$this->codec,

            'status'=>$this->status,

            'ultima_comunicacao'=>$this->ultima_comunicacao,

            'fabricante'=>$this->fabricante,

            'local'=>$this->location,

            'created_at'=>$this->created_at

        ];
    }
}