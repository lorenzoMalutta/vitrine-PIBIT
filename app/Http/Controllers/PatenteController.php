<?php

namespace App\Http\Controllers;

use App\Models\Patente;
use App\Models\AreaEconomica;
use App\Models\Midia;
use Illuminate\Http\Request;
use App\Http\Requests\PatenteRequest;
use App\Models\AreaCientifica;
use App\Models\AreaConhecimento;
use Ramsey\Uuid\Uuid;

class PatenteController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $patente = Patente::all();
    $midia = Midia::all();
    return view('patente.index', ['patente' => $patente, 'midia' => $midia]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $economico = AreaEconomica::all();
    $cientifica = AreaCientifica::all();
    $conhecimento = AreaConhecimento::all();

    return view('patente.formulario.create', ['economico' => $economico, 'cientifica' => $cientifica, 'conhecimento' => $conhecimento]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * 
   * @param  \Illuminate\Http\RequestMidia  $request
   * @return \Illuminate\Http\Response
   */
  public function store(PatenteRequest $request)
  {
    $patente = new Patente;
    $midia = new Midia;
    $patente = Patente::create([
      'email' => $request->email,
      'nomeTecnologia' => $request->nomeTecnologia,
      'setorEconomico' => $request->setorEconomico,
      'area' => $request->area,
      'categoria' => $request->categoria,
      'sinopsePatente' => $request->sinopsePatente,
      'tipoPatente' => $request->tipoPatente,
      'pct' => $request->pct,
      'inpi' => $request->inpi,
      'resumo' => $request->resumo,
      'solucaoProblema' => $request->solucaoProblema,
      'vantagem' => $request->vantagem,
      'aplicacao' => $request->aplicacao,
      'trl' => $request->trl,
      'telefone' => $request->telefone,
      'link' => $request->link,
      'criacao' => $request->criacao,
      'criadores' => $request->criadores,
    ]);

    $midia->idPatente = $patente->id;
    $midia->save();
    if ($request->hasFile('image')) {
      $destinationPath = "images/patente";
      $extension = $request->image->getClientOriginalExtension();
      $name = Uuid::uuid1();
      $path['image'] = $request->file('image')->storeAs($destinationPath, $name . ".{$extension}");
      $midia->image = $path['image'];
      $midia->save();
    }
    if ($request->hasFile('video')) {
      $destinationPath = "videos/patente";
      $extension = $request->video->getClientOriginalExtension();
      $name = Uuid::uuid1();
      $path['video'] = $request->file('video')->storeAs($destinationPath, $name . ".{$extension}");
      $midia->video = $path['video'];
      $midia->save();
    }
    if ($request->hasFile('pdf')) {
      $destinationPath = "pdf/patente";
      $extension = $request->pdf->getClientOriginalExtension();
      $name = Uuid::uuid1();
      $path['pdf'] = $request->file('pdf')->storeAs($destinationPath, $name . ".{$extension}");
      $midia->pdf = $path['pdf'];
      $midia->save();
    }

    return redirect('/dashboard-patentes')->with('msg', 'Patente criada com sucesso!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id 
   * @param  int  $idPatente
   * @return \Illuminate\Http\Response
   */
  public function show($id, $idPatente)
  {
    $patente = Patente::FindOrFail($id);
    $midia = Midia::FindOrFail($idPatente);

    return view('patente.show', ['patente' => $patente, 'midia' => $midia]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id, $idPatente)
  {
    $patente = Patente::findOrFail($id);
    $midia = Midia::findOrFail($idPatente);

    return view('patente.formulario.edit', ['patente' => $patente, 'midia' => $midia]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {
    Patente::findOrFail($request->id)->update($request->all());
    $image = Midia::find($request->idPatente);
    $midia = new Midia();

    if ($image->image) {
      $destinationPath = "images/patente";
      $extension = $request->image->getClientOriginalExtension();
      $name = Uuid::uuid1();
      $path['image'] = $request->file('image')->storeAs($destinationPath, $name . ".{$extension}");
      $image->image = $path['image'];
      $image->update();
    }
    if ($image->video) {
      $destinationPath = "videos/patente";
      $extension = $request->video->getClientOriginalExtension();
      $name = Uuid::uuid1();
      $path['video'] = $request->file('video')->storeAs($destinationPath, $name . ".{$extension}");
      $image->video = $path['video'];
      $image->update();
    }
    if ($image->pdf) {
      $destinationPath = "pdf/patente";
      $extension = $request->pdf->getClientOriginalExtension();
      $name = Uuid::uuid1();
      $path['pdf'] = $request->file('pdf')->storeAs($destinationPath, $name . ".{$extension}");
      $image->pdf = $path['pdf'];
      $image->update();
    }

    return redirect('/dashboard-patentes-editar')->with('msg', 'Patente editada com sucesso!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @param int $idPatente
   * @return \Illuminate\Http\Response
   */
  public function destroy($id, $idPatente)
  {
    $patente = Patente::findOrFail($id);
    $midia = Midia::findOrFail($idPatente);
    $midia->delete();
    $patente->delete();

    return redirect('/dashboard-patentes-deletar')->with('msg', 'Patente deletada com sucesso!');
  }

  public function dashBoardPatenteDeletar()
  {
    $patente = Patente::all();
    $midia = Midia::all();

    return view('patente.deletePatente', ['patente' => $patente, 'midia' => $midia]);
  }

  public function dashboardPatentesEditar()
  {
    $patente = Patente::all();
    $midia = Midia::all();

    return view('patente.editarPatente', ['patente' => $patente, 'midia' => $midia]);
  }
}
