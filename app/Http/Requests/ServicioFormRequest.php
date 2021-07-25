<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicioFormRequest extends FormRequest
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
            'vigencia'              =>  'required',
            'estado_servicio_id'    =>  'required',
            'users_id'              =>  'required',
            'vehiculo_id'           =>  'required',
            'tipo_servicio_id'      =>  'required',
            'taller_id'             =>  'required',
            'observacion'           =>  'required | string|max:50',
        ];
    }
}
