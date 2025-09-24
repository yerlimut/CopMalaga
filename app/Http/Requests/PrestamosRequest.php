<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrestamosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * 
     * 
     * 
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
            'idTipoPrestamo' => 'required|integer|exists:tipo_prestamos,id',
            'idCliente' => 'required|integer|exists:clientes,id',
            'fechaSolicitud' => 'required|date|before_or_equal:today',
            'fechaAprobado' => 'nullable|date|after_or_equal:fechaSolicitud',
            'fechaDesembolso' => 'nullable|date|after_or_equal:fechaAprobado',
            'idEstadoPrestamo' => 'required|integer|exists:estado_prestamos,id',
            'documentoFiador' => 'nullable|string|max:20',
            'valorDesembolso' => 'required|decimal|min:0',
            'numeroCuotas' => 'required|integer|min:1',
            'valorCuota' => 'required|decimal|min:0',
            'fechaLiquidacionPrestamo' => 'nullable|date|after_or_equal:fechaDesembolso',
        ];
    }
     public function messages(): array
    {
        return [
            // --- idTipoPrestamo ---
            'idTipoPrestamo.required' => 'El tipo de préstamo es obligatorio.',
            'idTipoPrestamo.integer' => 'El tipo de préstamo debe ser un número entero.',
            'idTipoPrestamo.exists' => 'El tipo de préstamo seleccionado no existe.',

            // --- idCliente ---
            'idCliente.required' => 'El cliente es obligatorio.',
            'idCliente.integer' => 'El cliente debe ser un número entero.',
            'idCliente.exists' => 'El cliente seleccionado no existe.',

            // --- fechas ---
            'fechaSolicitud.required' => 'La fecha de solicitud es obligatoria.',
            'fechaSolicitud.date' => 'La fecha de solicitud no es válida.',
            'fechaSolicitud.before_or_equal' => 'La fecha de solicitud no puede ser futura.',


            'fechaAprobado.date' => 'La fecha de aprobación no es válida.',
            'fechaAprobado.after_or_equal' => 'La fecha de aprobación no puede ser anterior a la fecha de solicitud.',

            'fechaDesembolso.date' => 'La fecha de desembolso no es válida.',
            'fechaDesembolso.after_or_equal' => 'La fecha de desembolso no puede ser anterior a la fecha de aprobación.',

            'fechaLiquidacionPrestamo.date' => 'La fecha de liquidación no es válida.',
            'fechaLiquidacionPrestamo.after_or_equal' => 'La fecha de liquidación no puede ser anterior a la fecha de desembolso.',

            // --- estado prestamo ---
            'idEstadoPrestamo.required' => 'El estado del préstamo es obligatorio.',
            'idEstadoPrestamo.integer' => 'El estado del préstamo debe ser un número entero.',
            'idEstadoPrestamo.exists' => 'El estado del préstamo seleccionado no existe.',

            // --- documentoFiador ---
            'documentoFiador.string' => 'El documento del fiador debe ser texto.',
            'documentoFiador.max' => 'El documento del fiador no puede superar los 20 caracteres.',

            // --- valorDesembolso ---
            'valorDesembolso.required' => 'El valor del desembolso es obligatorio.',
            'valorDesembolso.decimal' => 'El valor del desembolso debe ser numérico.',
            'valorDesembolso.min' => 'El valor del desembolso no puede ser negativo.',

            // --- numeroCuotas ---
            'numeroCuotas.required' => 'El número de cuotas es obligatorio.',
            'numeroCuotas.integer' => 'El número de cuotas debe ser un número entero.',
            'numeroCuotas.min' => 'Debe haber al menos una cuota.',

            // --- valorCuota ---
            'valorCuota.required' => 'El valor de la cuota es obligatorio.',
            'valorCuota.decimal' => 'El valor de la cuota debe ser numérico.',
            'valorCuota.min' => 'El valor de la cuota no puede ser negativo. '
        ];
    }
}
