<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReserveRequest extends FormRequest
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
            'reservation_slot_id' => 'required',
            'num-guests' => 'required | integer'
        ];
    }

    public function attributes()
    {
        return [
            'reservation_slot_id' => '予約ID',
            'num-guests' => '宿泊人数',
        ];
    }

    public function messages()
    {
        return [
            'reservation_slot_id.required' => ':attribute の入力をお願いします',
            'num-guests.required' => ':attribute  の入力をお願いします',
            'num-guests.integer' => ':attribute  は数値入力をお願いします',
        ];
    }
}
