<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubscribePackage extends Model
{
    use HasFactory, SoftDeletes;

    // Nama tabel sebagai string
    protected $table = 'subscribe_packages';

    // Daftar kolom yang dapat diisi secara massal
    protected $fillable = [
        'name',
        'price',
        'icon',
        'duration',
    ];

    public function subscribeBenefits(): HasMany
    {
        return $this->hasMany(SubscribeBenefit::class);
    }
}

