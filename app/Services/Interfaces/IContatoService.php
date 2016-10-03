<?php
namespace App\Services\Interfaces;

interface IContatoService
{
    public function allContatos();
    public function saveContato($request);  
    
}
