<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tipoPrestamoRequest extends FormRequest
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
            'nombre' => 'required|string|max:100|min:3',
            'descripcion' => 'required|string|max:255',
            'interes' => 'required|decimal:2|min:0|max:100'
        ];
    }
    public function messages(): array
    {
        return [
        
            'nombre.required' => 'El nombre del préstamo es obligatorio.',
            'nombre.string' => 'El nombre debe ser una cadena de texto.',
            'nombre.min' => 'El nombre debe tener al menos 3 caracteres.',
            'nombre.max' => 'El nombre no puede superar los 100 caracteres.',

            'descripcion.required' => 'La descripción es obligatoria.',
            'descripcion.string' => 'La descripción debe ser una cadena de texto.',
            'descripcion.max' => 'La descripción no puede superar los 255 caracteres.',

            'interes.required' => 'El interés es obligatorio.',
            'interes.decimal' => 'El interés debe ser un valor numérico.',
            'interes.min' => 'El interés no puede ser menor que 0.',
            'interes.max' => 'El interés no puede ser mayor que 100.'
        ];
    }
}
