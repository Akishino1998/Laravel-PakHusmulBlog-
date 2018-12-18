<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = "genres";
    protected $primaryKey = "id_genre";
    public function Genre(){
        return $this->hasOne('App\Drakor','id_genre');
    }
}
