<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type' => 'required|integer',
            'stock' => 'required|integer',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'commission' => 'nullable|numeric',
            'date' => 'nullable|date_format:Y-m-d',
        ];
    }
}
