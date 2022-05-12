<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()     //Verificación de rol autorizado.
    {
        return true;                //Autorizado.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'category' => 'required'
        ];
    }

    // Modificación del atributo del formulario.

    public function attributes(){          
        return [
            'name' => 'nombre del curso',
        ];
    }

    //Modificación del mensaje completo al validar el campo. Caso aplicado para 'required' de 'description'.
    public function messages(){
        return [
            'description.required' => 'Debe ingresar una descripción del Curso', 
        ];
    }
}
