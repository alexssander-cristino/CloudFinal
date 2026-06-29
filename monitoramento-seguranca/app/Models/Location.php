<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'nome',
        'bloco',
        'andar',
        'descricao'
    ];

    protected static function booted(): void
    {
        static::creating(function ($location) {
            if (empty($location->uuid)) {
                $location->uuid = (string) Str::uuid();
            }
        });
    }

    public function cameras()
    {
        return $this->hasMany(Camera::class);
    }

    public function sensores()
    {
        return $this->hasMany(Sensor::class);
    }
}