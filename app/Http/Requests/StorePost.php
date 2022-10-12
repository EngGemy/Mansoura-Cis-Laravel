<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'bail|required|min:5|max:100',
            'content' => 'required|min:10',
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'هذا الحقل مطلوب',
            'title.min' => '  مطلوب تدخل اقل شىء 5 حروف',
            'content.required' => 'هذا الحقل مطلوب',
        ];
    }
}
