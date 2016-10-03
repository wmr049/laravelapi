<?php
namespace App\Services\Interfaces;

interface IUserService
{
    public function allUsers();
    public function saveUser($request);
    public function getUser($id);
    public function deleteUser($id);
    public function updateUser($request, $id);
    
}
