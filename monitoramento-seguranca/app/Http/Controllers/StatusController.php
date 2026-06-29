<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class StatusController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'application' => 'Sistema de Monitoramento de Segurança',
            'version' => '1.0.0',
            'status' => 'online'
        ]);
    }
}