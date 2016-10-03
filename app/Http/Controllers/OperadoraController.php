<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Services\Interfaces\IOperadoraService;

class OperadoraController extends Controller {

protected $iOperadoraService;

	public function __construct(IOperadoraService $iOperadoraService)
    {
        $this->iOperadoraService = $iOperadoraService;
    }

	public function allOperadoras(){
		return response()->json($this->iOperadoraService->allOperadoras(),200);
	}

}
