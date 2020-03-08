<?php 

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;


class DetalleBoleta extends Model {

	protected $primaryKey = 'id';

	protected $table='detalleboleta';
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

	public function ejemplar()
    {
        return $this->belongsTo(Ejemplar::class,'idjemplar','id');
    }
    public function boleta()
    {
        return $this->belongsTo(Boleta::class,'idboleta','id');
    }

}