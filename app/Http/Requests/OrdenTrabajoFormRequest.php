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
            'estado_orden_trabajo_id'   =>  'required',
            'fecha_inicio' =>  'required',
            'fecha_termino' =>  'required',
            'color_original'    =>  'nullable',
            'color_aplicar' =>  'required_with:color_original|nullable',
            'numero_cotizacion' =>  'nullable',
            'orden_compra'  =>  'nullable',
            'descripcion'    =>  'required',
        ];
    }
}
