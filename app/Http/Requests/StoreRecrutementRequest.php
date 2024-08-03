<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecrutementRequest extends FormRequest
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
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date' => 'required|date',
            'genre' => 'required|string|max:50',
            'residence' => 'required|string|max:255',
            'nationnalite' => 'required|string|max:255',
            'message1' => 'required|string',
            'message2' => 'required|string',
            'message3' => 'required|string',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
        ];
    }

    public function messages(): array
    {
        return [
            'nom.required' => 'Le champ Nom est obligatoire.',
            'nom.string' => 'Le champ Nom doit être une chaîne de caractères.',
            'nom.max' => 'Le champ Nom ne peut pas dépasser 255 caractères.',
            'prenom.required' => 'Le champ Prénom est obligatoire.',
            'prenom.string' => 'Le champ Prénom doit être une chaîne de caractères.',
            'prenom.max' => 'Le champ Prénom ne peut pas dépasser 255 caractères.',
            'date.required' => 'Le champ Date de naissance est obligatoire.',
            'date.date' => 'Le champ Date de naissance doit être une date valide.',
            'genre.required' => 'Le champ Genre est obligatoire.',
            'genre.string' => 'Le champ Genre doit être une chaîne de caractères.',
            'genre.max' => 'Le champ Genre ne peut pas dépasser 50 caractères.',
            'residence.required' => 'Le champ Zone de résidence actuel est obligatoire.',
            'residence.string' => 'Le champ Zone de résidence actuel doit être une chaîne de caractères.',
            'residence.max' => 'Le champ Zone de résidence actuel ne peut pas dépasser 255 caractères.',
            'nationnalite.required' => 'Le champ Nationalité est obligatoire.',
            'nationnalite.string' => 'Le champ Nationalité doit être une chaîne de caractères.',
            'nationnalite.max' => 'Le champ Nationalité ne peut pas dépasser 255 caractères.',
            'message1.required' => 'Le champ "Êtes-vous scolarisé?" est obligatoire.',
            'message1.string' => 'Le champ "Êtes-vous scolarisé?" doit être une chaîne de caractères.',
            'message2.required' => 'Le champ "Disponibilité pour un entretien virtuel" est obligatoire.',
            'message2.string' => 'Le champ "Disponibilité pour un entretien virtuel" doit être une chaîne de caractères.',
            'message3.required' => 'Le champ "Pourquoi le football?" est obligatoire.',
            'message3.string' => 'Le champ "Pourquoi le football?" doit être une chaîne de caractères.',
            'email.required' => 'Le champ E-mail est obligatoire.',
            'email.email' => 'Le champ E-mail doit être une adresse e-mail valide.',
            'email.max' => 'Le champ E-mail ne peut pas dépasser 255 caractères.',
            'telephone.required' => 'Le champ Téléphone est obligatoire.',
            'telephone.string' => 'Le champ Téléphone doit être une chaîne de caractères.',
            'telephone.max' => 'Le champ Téléphone ne peut pas dépasser 20 caractères.',
        ];
    }
}
