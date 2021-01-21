<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(auth()->guard('admin')->check()){
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'data.phone' => 'required|numeric',
            'data.email' => 'required|email',
            'data.ios_link' => 'required|url',
            'data.android_link' => 'required|url',
            'data.facebook_link' => 'required|url',
            'data.twitter_link' => 'required|url',
            'data.instagram_link' => 'required|url',
        ];
    }
}
