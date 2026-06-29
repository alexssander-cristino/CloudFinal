<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Manufacturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'nome',
        'site',
        'suporte'
    ];

    protected static function booted(): void
    {
        static::creating(function ($manufacturer) {
            if (empty($manufacturer->uuid)) {
                $manufacturer->uuid = (string) Str::uuid();
            }
        });
    }

    public function cameras()
    {
        return $this->hasMany(Camera::class, 'fabricante_id');
    }
}