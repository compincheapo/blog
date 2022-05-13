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
}
