<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicsStoreRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Il form del titolo deve essere compilato',
            'title.max' => 'Il titolo può avere massimo 255 caratteri',
            'description.required' => 'Il form della descrizione deve essere compilato',
            'price.required' => 'Il form del prezzo deve essere compilato',
            'price.numeric' => 'Il prezzo deve essere un numero',
            'price.min' => 'Il prezzo deve essere di almeno 0'
        ];
    }
}
