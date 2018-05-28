<?php
/**
 * Created by PhpStorm.
 * User: LaPoint
 * Date: 28/05/2018
 * Time: 1:31 PM
 */

namespace MusicApp\Datos\Repositorio;


use MusicApp\Datos\Modelos\Song;

class CancionRepositorio
{
    public function obtenerListaCanciones()
    {
        return Song::all();
    }
}