<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'titre' => ['required', 'min:3'],
            'contenu' => ['required', 'min:5'],
            'universite' => ['required']
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'titre.required'          => 'Veuillez entrer un titre',
            'titre.min'               => 'Le titre doit être au minimum de :min caractères',
            'contenu.required'        => 'Veuillez entrer un contenu',
            'contenu.min'             => 'Le contenu doit être au minimum de :min caractères',
            'universite.required'     => 'Veuillez sélectionner un département'
        ];
    }
}
