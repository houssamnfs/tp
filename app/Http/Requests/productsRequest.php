<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productsRequest extends FormRequest
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
            "libelle"=> 'required|string',
            'marque' => 'required',
            'prix' => 'required|numeric',
            'stock' => 'required|integer|min:1|max:4',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
