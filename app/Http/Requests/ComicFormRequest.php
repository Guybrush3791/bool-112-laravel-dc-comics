<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicFormRequest extends FormRequest
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
            'title' => 'required|string|min:3|max:255',
            'description' => 'nullable|string|max:255',
            'price' => 'required|decimal:0,2'
        ];
    }

    public function messages() {

        return [
            'title.required' => "Il titolo e' necessario",
            'title.string' => "Il titolo deve essere una stringa",
            'title.min' => "Il titolo deve essere di almeno 3 caratteri",
            'title.max' => "Il titolo deve essere di meno di 255 caratteri",
            'description.string' => "La descrizione deve essere una stringa",
            'description.max' => "La descrizione deve essere di meno di 255 caratteri",
            'price.required' => "Il prezzo e' necessario",
            'price.decimal' => "Il prezzo puo' avere al massimo 2 cifre dopo la virgola"
        ];
    }
}
