<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    use HasFactory;

    protected $primaryKey = 'nomor_theater';
    protected $keyType = 'integer';

    protected $table = 'theater';
    protected $fillable = [
        'nomor_theater',
        'tipe',
        'kapasitas'
    ];

    public function nowPlayings()
    {
        return $this->hasMany('App\Models\NowPlaying', 'nomor_theater', 'nomor_theater');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nomor_theater', 'like', '%' . $search . '%');
        });
    }
}
