<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->id() === $this->route('profile')->user_id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'avatar' => 'nullable|image|max:512',
            'name' => 'required|string|max:190',
            'birth_day' => 'nullable|integer|min:1|max:32',
            'birth_month' => 'nullable|integer|min:1|max:12',
            'birth_year' => 'nullable|integer|min:1900|max:2100',
            'profession' => 'nullable|string',
            'bio' => 'nullable|string',
            'country' => 'nullable|string',
            'address' => 'nullable|string',
            'phone' => 'nullable|integer|digits:10',
            'website' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
            'facebook' => 'nullable|url',
            'youtube' => 'nullable|url',
        ];
    }
}
