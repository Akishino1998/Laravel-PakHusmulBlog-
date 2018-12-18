<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drakor extends Model
{
    protected $table = "drakor";
    protected $primaryKey = "id_drakor";
    protected $fillable = ['id_genre','judul','sinopsis','sutradara','episode','waktu_tayang','jadwal_tayang'];
    public function Drakor(){
        return $this->belongsTo('App\Genre','id_genre');
    }
}
