<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Sensor extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'uuid',
        'nome',
        'tipo',
        'status',
        'bateria',
        'valor_atual',
        'ultima_leitura',
        'location_id'
    ];

    protected $casts = [
        'ultima_leitura' => 'datetime'
    ];

    protected static function booted(): void
    {
        static::creating(function ($sensor) {
            if (empty($sensor->uuid)) {
                $sensor->uuid = (string) Str::uuid();
            }
        });
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function eventos()
    {
        return $this->hasMany(Event::class);
    }
}