<?php
namespace App\Services\Services;

use App\Services\Interfaces\IUserService;
use App\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

use Carbon\Carbon;



class UserService implements IUserService
{
    protected $user = null;    
    
    public function __construct(User $user)
    {
        $this->user = $user;        
    }

    public function allUsers(){
		return User::get();
	}

    public function saveUser($request){                

        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();

        return $user;

    }

    public function getUser($id){
        
        $user = User::find($id);

        if(is_null($user))
            return false;

        return $user;
    }

    public function deleteUser($id){

        $user = User::find($id);

        if(is_null($user))
        {
            return false;
        }
            

        return $user->delete();

    }

    public function updateUser($request, $id){                

        $user = User::find($id);
        
        
        if(is_null($user))
        {   
            return false;
        }          
        
        if(isset($request->password))
            $user->request = Hash::make($request->password);        
        
        $user->fill($request->all());
        
        return $user->save();
    }

}