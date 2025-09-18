<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
            'nombres'         => 'required|string|min:3|max:100|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
            'apellidos'       => 'required|string|min:3|max:100|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
            'tipoDocumento'   => 'required|string|min:2|max:20',
            'numeroDocumento' => 'required|string|min:5|max:20|unique:clientes,numeroDocumento',
            'telefono'        => 'required|string|min:7|max:15|regex:/^[0-9]+$/',
            'email'           => 'required|email|max:150|unique:clientes,email',
            'direccion'       => 'required|string|min:5|max:150',
            'fechaRegistro'   => 'required|date',
            'fechaNacimiento' => 'required|date',
            'estado'          => 'required|in:activo,inactivo',
            
        ];

    }
    public function messages(): array
    {
        return [
            'nombres.required' => 'El campo nombres es obligatorio.',
            'nombres.string'=> 'el nombre debe ser una cadena de texto',
            'nombres.min'      => 'El nombre debe tener al menos 3 caracteres.',
            'nombres.max'      => 'El nombre no debe superar los 100 caracteres.',

            'apellidos.required' => 'El campo apellido es obligatorio.',
            'apellidos.string'=> 'el apellido debe ser una cadena de texto',
            'apellidos.min'      => 'El apellido debe tener al menos 3 caracteres.',
            'apellidos.max'      => 'El apellido no debe superar los 100 caracteres.',

            'tipoDocumento.required' => 'El tipo de documento es obligatorio.',
            'tipoDocumento.min'      => 'El tipo de documento debe tener al menos 2 caracteres.',
            'tipoDocumento.max'      => 'El tipo de documento no debe superar los 20 caracteres.',

            'numeroDocumento.required' => 'El número de documento es obligatorio.',
            'numeroDocumento.min'      => 'El número de documento debe tener al menos 5 caracteres.',
            'numeroDocumento.max'      => 'El número de documento no debe superar los 20 caracteres.',
            'numeroDocumento.unique'   => 'Este número de documento ya está registrado.',

            'telefono.required' => 'El teléfono es obligatorio.',
            'telefono.min'      => 'El teléfono debe tener al menos 7 dígitos.',
            'telefono.max'      => 'El teléfono no debe superar los 15 dígitos.',
            'telefono.regex'    => 'El teléfono solo debe contener números.',

            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email'    => 'Debe ser un correo electrónico válido.',
            'email.max'      => 'El correo no debe superar los 150 caracteres.',
            'email.unique'   => 'Este correo ya está registrado.',

            'direccion.required' => 'La dirección es obligatoria.',
            'direccion.min'      => 'La dirección debe tener al menos 5 caracteres.',
            'direccion.max'      => 'La dirección no debe superar los 150 caracteres.',

            'fechaRegistro.required'   => 'La fecha de registro es obligatoria.',
            'fechaRegistro.date'       => 'La fecha de registro no tiene un formato válido.',

            'fechaNacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'fechaNacimiento.date'     => 'La fecha de nacimiento no tiene un formato válido.',

            'estado.required' => 'El estado es obligatorio.',
            'estado.in'       => 'El estado debe ser activo o inactivo.',
        ];
    }
}
    