<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TallerFormRequest extends FormRequest
{

    public function authorize()
    {
        return $this->user()->isAdmin();
    }

    public function rules()
    {
        return [
            'vigencia'          =>  'required',
            'rut'               =>  'required',
            'descripcion'       =>  'required',
            'razon_social'      =>  'required',
            'direccion'         =>  'required',
            'comuna_id'         =>  'required',
            'telefono_2'        =>  'required',
            'telefono_1'        =>  'required',
            'email'             =>  'required',
            'representante'     =>  'required',
            'fecha_contrato'    =>  'required',
            'calificacion'      =>  'required',
        ];
    }
}
