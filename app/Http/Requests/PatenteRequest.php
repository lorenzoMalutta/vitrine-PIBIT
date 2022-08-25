<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatenteRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'nomeTecnologia' => 'required | max:80 | min:10',
      'setorEconomico' => 'required',
      'area'           => 'required',
      'categoria'      => 'required',
      'tipoPatente'    => 'required',
      'sinopsePatente' => 'required', 'string | max:250',
      'pct'            => 'nullable', 'integer',
      'tipoTecnologia' => 'required',
      'inpi'           => 'required', 'integer', 'unique',
      'resumo'         => 'required', 'string | min:250',
      'solucaoProblema' => 'required', 'string | min:250',
      'vantagem'       => 'required', 'string | min:250',
      'aplicacao'      => 'required', 'string | min:250',
      'trl'            => 'required', 'integer',
      'telefone'       => 'required', 'integer',
      'email'          => 'required', 'email',
      'link'           => 'nullable', 'active_url',
      'criacao'        => 'required', 'data',
      'criadores'      => 'required', 'string | min: 10',
      'image'         =>  'required | mimes:png, jpg,svg | max:2048',
      'video'          => 'required | mimes:mp4, mov, ogg | max: 20000',
      'pdf'            => 'required | max:4096',
    ];
  }

  public function messages()
  {
    return [
      'nomeTecnologia' => 'O campo nome da tecnologia é obrigatório',
      'setorEconomico' => 'O campo setor econômico é obrigatório',
      'area'           => 'O campo área é obrigatório',
      'categoria'      => 'O campo categoria é obrigatório',
      'sinopsePatente' => 'O campo sinópse é obrigatório',
      'tipoPatente'    => 'O campo tipo de patente é obrigatório',
      'pct'            => 'O campo PCT aceita apenas números',
      'tipoTecnologia' => 'O campo tipo de tecnologia é obrigatório',
      'inpi'           => 'O campo INPI é obrigatório',
      'resumo'         => 'O campo resumo é obrigatório',
      'solucaoProblema' => 'O campo solução do problema é obrigatório',
      'vantagem'       => 'O campo principais vantagens é obrigatório',
      'aplicacao'      => 'O campo aplicações é obrigatório',
      'trl'            => 'O campo TRL é obrigatório',
      'telefone'       => 'O campo telefone é obrigatório',
      'email'          => 'O campo email é obrigatório',
      'link'           => 'O campo link precisa ser uma url válida',
      'criacao'        => 'O campo data de criação é obrigatório',
      'criadores'      => 'O campo nome dos criadores é obrigatório',
      'image'         => 'O campo imagem é obrigatório',
      'video'          => 'O campo vídeo é obrigatório',
      'pdf'            => 'O campo pdf é obrigatório',
    ];
  }
}
