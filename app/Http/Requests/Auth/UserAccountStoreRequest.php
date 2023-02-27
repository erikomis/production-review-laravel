<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class UserAccountStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email'=> 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed'
        ];
    }

    public  function  messages()
    {
        return  [
            'name.required' =>  'O nome e obrigatorio',
            'email.required' =>  'O email e obrigatorio',
            'email.email' => 'Email inválido',
            'email.unique' =>  'O email ja esta em uso',
            'password.required' =>  'A senha e obrigatoria',
            'password.min' =>  'A senha deve ter no minimo 8 digitos',
            'password.confirmed' =>  'A senha e diferente do campo confirmar senha',
        ];
    }
}
