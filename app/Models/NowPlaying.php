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
        'tanggal', 'jam', 'durasi', 'judul', 'fk_theater'
    ];

    public function Theater()
    {
        return $this->belongsTo('App\Models\Theater', 'fk_theater', 'id_theater');
    }
}
