<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActividadFormRequest extends FormRequest
{

    public function authorize()
    {
        return $this->user()->isAdmin() || $this->user()->isSupervisor();
    }


    public function rules()
    {
        return [
            'vigencia'  =>  'required',
            'descripcion'    =>  'required',
            
        ];
    }
}
