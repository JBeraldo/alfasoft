<?php

namespace App\Modules\Contacts\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if(!is_null($this['id'])){
            return [
                "name" => "required|string|min:5",
                "email" => "required|email",
                "contact" => "required|string|min:9|max:9",
            ];
        }
        else{
            return [
                "name" => "required|string|min:5",
                "email" => "required|unique:contacts|email",
                "contact" => "required|string|unique:contacts|min:9|max:9",
            ];
        }
    }
    public function messages()
    {
        return [
            'name.required' => 'Nome é obrigatório',
            'email.required' => 'E-mail é obrigatório',
            'contact.required' => 'Contato é obrigatório',
            'email.email' => 'E-mail inválido',
            'name.min' => 'Nome precisa ter no mínimo 5 digitos',
            'contact.min' => 'Contato deve ter 9 dígitos',
            'contact.max' => 'Contato deve ter 9 dígitos',
            'email.unique' => 'E-mail informado já está cadastrado',
            'contact.unique' => 'Contato informado já está cadastrado'
        ];
    }
}
