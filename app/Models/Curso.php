<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    //protected $table = "users"; Lo podemos utilizar si no queremos usar la convención de

    //protected $fillable = ['name', 'description', 'category'];      //Al intentar crear registros (BD) por asignación masiva (request->all()), solo considerará estos campos para crearlo.

    protected $guarded = [];        //Esta sección es para ignorar ciertos campos al momento de crear un registro en BD. Al dejarlo nulo, permite la asignación masiva.
    
    public function getRouteKeyName(){      //Al pasar un curso a una ruta dada, lo descompone y en vez de colocar 'id' (por defecto) en la misma, coloca lo que contenga el campo 'slug'. Esto funciona para cualquier campo que especifiquemos del modelo dado.
        return 'slug';
    }
}
