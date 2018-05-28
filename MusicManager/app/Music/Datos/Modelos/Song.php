<?php

namespace MusicApp\Datos\Modelos;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','artista','avatar'];

}
