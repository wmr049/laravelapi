<?php
namespace App\Services\Services;

use App\Services\Interfaces\IOperadoraService;
use App\Operadora;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

use Carbon\Carbon;

class OperadoraService implements IOperadoraService
{
    protected $operadora = null;    
    
    public function __construct(Operadora $operadora)
    {
        $this->operadora = $operadora;        
    }

    public function allOperadoras(){
		return Operadora::get();
	}    

}