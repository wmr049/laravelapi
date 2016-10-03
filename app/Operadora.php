<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Operadora extends Model {

	protected $table = 'operadoras';

	protected $fillable = ['nome', 'codigo','categoria', 'preco'];

	public function contatos(){
        return $this->hasMany('App\Contato');
    }

}
