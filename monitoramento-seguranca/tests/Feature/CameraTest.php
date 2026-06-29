<?php

namespace Tests\Feature;

use Tests\TestCase;

class CameraTest extends TestCase
{
    /** @test */
    public function lista_de_cameras_retorna_200()
    {
        $response = $this->getJson('/api/cameras');

        $response->assertStatus(200);
    }

    /** @test */
    public function json_possui_os_campos_obrigatorios()
    {
        $response = $this->getJson('/api/cameras');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     '*' => [
                         'id',
                         'nome',
                         'local',
                         'status',
                         'gravacao',
                         'ultimaVerificacao'
                     ]
                 ]);
    }

    /** @test */
    public function camera_inexistente_retorna_404()
    {
        $response = $this->getJson('/api/cameras/999');

        $response->assertStatus(404);
    }

    /** @test */
    public function rota_status_retorna_online()
    {
        $response = $this->getJson('/api/status');

        $response->assertStatus(200)
                 ->assertJson([
                     'status' => 'online'
                 ]);
    }
}