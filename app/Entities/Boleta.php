<?php 

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;


class Boleta extends Model {

	protected $primaryKey = 'id';

	protected $table='boleta';
	public $timestamps = false;
	protected $guarded = array();

	/*protected $fillable = ['id', 'type', 'soup','second', 'drink', 'dessert','fruit'];

	public static $rules = array(
    'id'              => 'required',
    'type'                  => 'required',
    'soup'                 => 'required',
    'second'              => 'required',
    'drink'					=>'required',
	'dessert'				=>'required',
	'fruit'					=>'required',
);*/

	public function cliente()
    {
        return $this->belongsTo(Cliente::class,'idcliente','id');
    }
}