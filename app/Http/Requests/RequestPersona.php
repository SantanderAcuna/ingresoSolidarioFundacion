<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPersona extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'hogar'=> 'bail|required',
            'cedula'=> 'required|min:5|max:15',
            'primer_nombre'=> 'required',
            'primer_apellido'=> 'required',
            'telefono'=> 'required|min:9|max:10',
            'barrio'=> 'required',
            'direccion'=> 'required',
            'banco'=> 'required',
            'tipo'=> 'required',
            'cuenta'=> 'required',

        ];
    }
    
}
