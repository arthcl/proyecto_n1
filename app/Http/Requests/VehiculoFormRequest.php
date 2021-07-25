<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize()
    {
        return $this->user()->isAdmin() || $this->user()->isSupervisor();

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'vigencia'  =>  'required',
            'users_id'  => 'required',
            'patente'  => 'required | unique:vehiculo',
            'marca_vehiculo_id'   => 'required',
            'modelo_vehiculo_id' => 'required',
            'ano_vehiculo'  => 'required',
            'tipo_vehiculo_id'   => 'required',
            'tipo_motor_id' => 'required',
            'revision_tecnica'   =>  'required',
            'extintor'    =>  'required',
            'permiso_circulacion'    => 'required',
            'horometro'         =>  'required',
            'nomenclatura_neumatico'    =>  'required',

        ];
    }
}
