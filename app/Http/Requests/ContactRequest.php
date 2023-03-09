<?php

namespace App\Http\Requests;

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
        return [
            'email' => 'required|email',
            'title' => 'required',
            'body' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'メールアドレス',
            'title' => '件名',
            'body' => '本文',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => ':attribute の入力をお願いします',
            'email.email' => ':attribute の形式ではありません',
            'title.required' => ':attribute  の入力をお願いします',
            'body.required' => ':attribute  の入力をお願いします',
        ];
    }
}
