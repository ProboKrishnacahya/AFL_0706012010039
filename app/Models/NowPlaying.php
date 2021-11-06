<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NowPlaying extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_now_playing';
    protected $keyType = 'integer';

    protected $table = 'now_playing';
    protected $fillable = [
        'movie_code',
        'judul',
        'nomor_theater',
        'jam',
        'durasi',
        'genre',
        'deskripsi',
        'cast'
        // 'poster'
    ];

    public function theater()
    {
        return $this->belongsTo('App\Models\Theater', 'nomor_theater', 'nomor_theater');
    }

    // public function scopeFilter($query, array $filters)
    // {
    //     if (isset($filters['search']) ? $filters['search'] : false) {
    //         return $query->where('title', 'like', '%' . request('search') . '%');
    //     }
    // }
}
