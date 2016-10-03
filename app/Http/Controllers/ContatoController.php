<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Contato;
use App\Services\Interfaces\IContatoService;
use App\Http\Requests\ContatoRequest;

class ContatoController extends Controller {

	
	protected $iContatoService;

	public function __construct(IContatoService $iContatoService)
    {
        $this->iContatoService = $iContatoService;
    }


	public function allContatos(){
		return response()->json($this->iContatoService->allContatos(),200);
	}

	public function saveContato(ContatoRequest $request){		
		return response()->json($this->iContatoService->saveContato($request), 200);
	}
}
