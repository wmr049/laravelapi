<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Services\Interfaces\IUserService;

use Illuminate\Http\Request;

class UserController extends Controller {

	protected $iUserService;

	public function __construct(IUserService $iUserService)
    {
        $this->iUserService = $iUserService;
    }


	public function allUsers(){
		return response()->json($this->iUserService->allUsers(),200);
	}

	public function saveUser(Request $request){
		return response()->json($this->iUserService->saveUser($request), 200);
	}

	public function getUser($id){

		$user = $this->iUserService->getUser($id);
		if(!$user)		
			return response()->json(['response' => 'Usuario nao encontrado !' ], 400);
			
		return response()->json($user,200);
	}

	public function deleteUser($id)
	{
		$user = $this->iUserService->deleteUser($id);

		if(!$user)		
			return response()->json(['response' => 'Usuario nao encontrado !' ], 400);
			
		return response()->json(['response' => 'Usuario removido com sucesso !' ],200);
	}
	
	public function updateUser($id,Request $request)
	{		
		$user = $this->iUserService->updateUser($request, $id);
		if(!$user)		
			return response()->json(['response' => 'Usuario nao encontrado !' ], 400);
		
		dd($user);
		return response()->json($user,200);
	}
}
