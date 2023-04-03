<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class ManagerStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return  [
            'name' => 'required',
            'phone' => 'required',
            'email' =>  'required|email',
            'lang' =>  'required',
            'status' =>  'required',
            'admin_id' => 'integer'
        ];
    }

    protected function passedValidation(): void
    {
        $pass = Hash::make($this->get('password'));
        $this->merge([
            'password' => $pass,
            'password_confirmation' => $pass,
            'user_type' => 2,
        ]);
    }
}
