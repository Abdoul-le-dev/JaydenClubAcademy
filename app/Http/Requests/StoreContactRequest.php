<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
            'email' => 'required|email|max:255',


        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Le champ Nom est obligatoire.',
            'name.string' => 'Le champ Nom doit être une chaîne de caractères.',
            'name.max' => 'Le champ Nom ne peut pas dépasser 255 caractères.',
            'phone.required' => 'Le champ Téléphone est obligatoire.',
            'phone.string' => 'Le champ Téléphone doit être une chaîne de caractères.',
            'phone.max' => 'Le champ Téléphone ne peut pas dépasser 15 caractères.',
            'message.required' => 'Le champ Message est obligatoire.',
            'message.string' => 'Le champ Message doit être une chaîne de caractères.',
            'email.required' => 'Le champ E-mail est obligatoire.',
            'email.email' => 'Le champ E-mail doit être une adresse e-mail valide.',
            'email.max' => 'Le champ E-mail ne peut pas dépasser 255 caractères.',
        ];
    }
}
