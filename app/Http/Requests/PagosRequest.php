<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagosRequest extends FormRequest
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
            'idPrestamo'       => 'required|integer',
            'fechaPago'        => 'required|date|before_or_equal:today',
            'idMedioPago'      => 'required|integer',
            'valorCuotaPagada' => 'required|decimal|min:0|regex:/^[0-9]+(\.[0-9]{1,2})?$/',
            'idMora'           => 'nullable|integer',
        ];
        
    }
    public function messages(): array
    {
        return [
            'idPrestamo.required' => 'El ID del préstamo es obligatorio.',
            'idPrestamo.integer'  => 'El ID del préstamo debe ser un número entero.',

            'fechaPago.required' => 'La fecha de pago es obligatoria.',
            'fechaPago.date'     => 'La fecha de pago debe tener un formato válido.',
            'fechaPago.before_or_equal' => 'La fecha de pago no puede ser futura.',

            'idMedioPago.required' => 'El medio de pago es obligatorio.',
            'idMedioPago.integer'  => 'El medio de pago debe ser un número entero.',

            'valorCuotaPagada.required' => 'El valor de la cuota pagada es obligatorio.',
            'valorCuotaPagada.numeric'  => 'El valor de la cuota debe ser numérico.',
            'valorCuotaPagada.min'      => 'El valor de la cuota no puede ser negativo.',

            'idMora.integer' => 'El ID de la mora debe ser un número entero.',
        ];
    }
}

