<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCameraRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'nome'=>'required|max:100',

            'descricao'=>'nullable',

            'ip'=>'required|ip',

            'porta'=>'required|integer',

            'fabricante_id'=>'required|exists:manufacturers,id',

            'modelo'=>'required',

            'serial'=>'required',

            'mac_address'=>'required',

            'resolucao'=>'required',

            'fps'=>'required|integer',

            'codec'=>'required',

            'status'=>'required',

            'location_id'=>'required|exists:locations,id'

        ];
    }
}