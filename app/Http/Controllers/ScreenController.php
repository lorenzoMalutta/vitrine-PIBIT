<?php

namespace App\Http\Controllers;

use App\Models\Midia;
use App\Models\Patente;

class ScreenController extends Controller
{
  public function main()
  {
    return view('main');
  }

  public function vitrineInicial()
  {
    $patente = Patente::all();
    $midia = Midia::all();
    return view('vitrineInicial.vitrineInicial', ['patente' => $patente, 'midia' => $midia]);
  }

  public function vitrineTecnologicaProduto()
  {
    return view('patente.vitrineTecnologia.vitrineTecnologicaProduto');
  }
}
