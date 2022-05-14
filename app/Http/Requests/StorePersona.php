<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersona extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|unique:people,dni',
            'nacimiento' => 'required',
            'genero' => 'required',
            'estadocivil' => 'required',
            'email' => 'required|unique:people,email',
            'telefono' => 'required|unique:people,telefono'
        ];
    }

    public function messages() {
        return [
            'nombre.required' => 'Campo requerido',
            'apellido.required' => 'Campo requerido',
            'dni.required' => 'Campo requerido',
            'dni.unique' => 'Ya existe el numero de DNI',
            'nacimiento.required' => 'Campo requerido',
            'genero.required' => 'Campo requerido',
            'estadocivil.required' => 'Campo requerido',
            'email.required' => 'Campo requerido',
            'email.unique' => 'Ya existe la cuenta email',
            'telofono.required' => 'Campo requerido',
            'telefono.required' => 'Ya existe el numero de telefono',
        ];
    }
}
