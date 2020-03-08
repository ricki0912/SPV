<?php 

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;


class Color extends Model {

	protected $primaryKey = 'codigo';

	protected $table='color';
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
}