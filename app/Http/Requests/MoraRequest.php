<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoraRequest extends FormRequest
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
            'fechaInicial'   => 'required|date|before_or_equal:today',
            'fechaFinal'     => 'required|date|after_or_equal:fechaInicial',
            'valorMora'      => 'required|decimal|min:0',
            'observaciones'  => 'nullable|string|max:255',
            'estadoMora'     => 'required|in:paga,pendiente',
        ];
    }
    public function messages(): array
    {
        return [
            
            'fechaInicial.required' => 'La fecha inicial es obligatoria.',
            'fechaInicial.date'     => 'La fecha inicial debe ser una fecha válida.',
            'fechaInicial.before_or_equal' => 'La fecha inicial no puede ser mayor que hoy.',

            'fechaFinal.required' => 'La fecha final es obligatoria.',
            'fechaFinal.date'     => 'La fecha final debe ser una fecha válida.',
            'fechaFinal.after_or_equal' => 'La fecha final debe ser igual o posterior a la fecha inicial.',

            'valorMora.required' => 'El valor de la mora es obligatorio.',
            'valorMora.decimal'  => 'El valor de la mora debe ser un número.',
            'valorMora.min'      => 'El valor de la mora no puede ser negativo.',

            'observaciones.string' => 'Las observaciones deben ser texto.',
            'observaciones.max'    => 'Las observaciones no pueden superar los 255 caracteres.',

            'estadoMora.required' => 'El estado de la mora es obligatorio.',
            'estadoMora.in'       => 'El estado de la mora debe ser "paga" o "pendiente".',

        ];
    }
}
