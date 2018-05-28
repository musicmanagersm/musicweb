<?php
/**
 * Created by PhpStorm.
 * User: LaPoint
 * Date: 28/05/2018
 * Time: 1:34 PM
 */

namespace MusicApp\Negocio\Logica;

use MusicApp\Datos\Repositorio\CancionRepositorio;


class CancionServicio
{
  protected $cancionRepositorio;
  public function __construct(CancionRepositorio $cancionRepositorio)
  {
      $this->cancionRepositorio = $cancionRepositorio;
  }

  public function obtenerListaCanciones()
  {
        return $this->cancionRepositorio->obtenerListaCanciones();
  }
}