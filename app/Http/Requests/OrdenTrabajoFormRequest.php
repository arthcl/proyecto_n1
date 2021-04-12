<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdenTrabajoFormRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->isAdmin() || $this->user()->isSupervisor();
    }


    public function rules()
    {
        return [
            'servicio_id'   =>  'required',
            'vigencia'  =>  'required',
            'fecha_inicio' =>  'required',
            'fecha_termino' =>  'required',

            'fecha_ingreso' =>  'required',
            'km_actual' =>  'required',
            'km_proximo'    =>  'required',
            'fecha_proxima_mantencion'  =>  'required',
            'color_original'    =>  'nullable',
            'color_aplicar' =>  'required_with:color_original|nullable',
            'numero_cotizacion' =>  'nullable',
            'orden_compra'  =>  'nullable',
            'descripcion_ot'    =>  'required',
        ];
    }
}
