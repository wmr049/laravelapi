<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContatoRequest extends Request {

	
	public function authorize()
	{
		return true;
	}

	
	public function rules()
	{
		return [
			'nome' => 'required|max:100',
			'telefone' => 'required|max:20',
			//'data' => 'required'			
		];
	}

	public function messages()
	{
		return [
			'required' => 'O campo :attribute não pode estar vazio.',
			'nome.required' => 'O :attribute não pode estar em branco.',
		];
	}

}
