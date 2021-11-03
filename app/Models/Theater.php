<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_theater';
    protected $keyType = 'integer';

    protected $table = 'theater';
    protected $fillable = [
        'nomor', 'tipe', 'kapasitas'
    ];

    public function NowPlayings()
    {
        return $this->hasMany('App\Models\NowPlaying', 'id_now_playing', 'id_theater');
    }
}
