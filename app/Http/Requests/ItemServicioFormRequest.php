<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemServicioFormRequest extends FormRequest
{

    public function authorize()
    {
        return false;
    }


    public function rules()
    {
        return [
            'vigencia' => 'required',
            'actividad_id'  => 'required',
            'orden_trabajo_id' => 'required',
            'item' => 'required',
            'unidad ' => 'required',
            'cantidad' => 'required',
            'valor' => 'required',
            'total' => 'required',
        ];
    }
}
