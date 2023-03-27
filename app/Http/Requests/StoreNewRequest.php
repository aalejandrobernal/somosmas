<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        $rules= [
           'titulo'=>'required|unique:noticias,titulo',
           'estado'=>'required|in:1,0',
        ];
        if($this->estado ==1){
            $rules = array_merge($rules,[
                'contenido'=>'required',
                'imagenes'=>'required|image',
            
            ]);
        }
        return $rules;
    }
}
