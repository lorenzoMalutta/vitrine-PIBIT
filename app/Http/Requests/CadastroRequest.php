<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroRequest extends FormRequest
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
      'email' => 'required', 'email', 'unique',
      'password' => 'required | max: 80 | min: 11', 'unique',
      'name' => 'required', 'string', 'min: 10',
      'cpf' => 'required', 'integer', 'unique', 'max: 11', 'min: 11',
    ];
  }

  public function messages()
  {
    return [
      'email' => 'Login inválido',
      'password' => 'Senha inválida',
      'cpf' => 'Cpf inválido',
      'name' => 'Nome inválido',
    ];
  }
}
