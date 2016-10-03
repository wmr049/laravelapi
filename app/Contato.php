<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model {

	protected $table = 'contatos';

	protected $fillable = ['nome', 'telefone','data', 'cor','operadora_id'];
	
	public function operadora(){
        return $this->belongsTo('App\Operadora');
    }

}
