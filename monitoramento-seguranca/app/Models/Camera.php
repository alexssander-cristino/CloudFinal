<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Camera extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'uuid',
        'nome',
        'descricao',
        'ip',
        'porta',
        'fabricante_id',
        'modelo',
        'serial',
        'mac_address',
        'resolucao',
        'fps',
        'codec',
        'status',
        'ultima_comunicacao',
        'location_id'
    ];

    protected $casts = [
        'ultima_comunicacao' => 'datetime'
    ];

    protected static function booted(): void
    {
        static::creating(function ($camera) {
            if (empty($camera->uuid)) {
                $camera->uuid = (string) Str::uuid();
            }
        });
    }

    public function fabricante()
    {
        return $this->belongsTo(Manufacturer::class, 'fabricante_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function eventos()
    {
        return $this->hasMany(Event::class);
    }

    public function logs()
    {
        return $this->hasMany(Log::class);
    }
}