<?php
namespace App\Services\Services;

use App\Services\Interfaces\IContatoService;
use App\Contato;
use App\Operadora;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

use Carbon\Carbon;



class ContatoService implements IContatoService
{
    protected $contato = null;    
    
    public function __construct(Contato $contato)
    {
        $this->contato = $contato;        
    }

    public function allContatos(){
		return Contato::with('Operadora')->get();
	}

    public function saveContato($request){
        return Contato::create($request->all());
    }    

}