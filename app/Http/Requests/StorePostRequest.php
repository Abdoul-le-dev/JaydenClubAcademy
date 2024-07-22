<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            
                'titre' => 'required|string|max:255',
                'description' => 'required|string',
                'file' => 'required|file|mimes:jpg,png|max:2048', // Ajustez les types de fichier et la taille maximale selon vos besoins
                'format' => 'nullable|string|in:Image,Video', // Ajoutez d'autres formats si nécessaire
                'video_link' => 'nullable|string',
        
        ];
    }

    public function messages()
    {
        return [
            'titre.required' => 'Le titre est obligatoire.',
            'titre.string' => 'Le titre doit être une chaîne de caractères.',
            'titre.max' => 'Le titre ne doit pas dépasser 255 caractères.',
            'description.required' => 'La description est obligatoire.',
            'description.string' => 'La description doit être une chaîne de caractères.',
            'file.required' => 'Le fichier image est obligatoire si le format est Image.',
            'file.file' => 'Vous devez télécharger un fichier valide.',
            'file.mimes' => 'Le fichier doit être de type jpg ou png.',
            'file.max' => 'Le fichier ne doit pas dépasser 2 Mo.',
            'video_link.required' => 'Le lien de la vidéo est obligatoire si le format est Video.',
            'video_link.string' => 'Le lien de la vidéo doit être une chaîne de caractères.',
            'format.required' => 'Le format de l\'article est obligatoire.',
            'format.string' => 'Le format de l\'article doit être une chaîne de caractères.',
            'format.in' => 'Le format de l\'article doit être soit Image, soit Video.',
        
        ];
    }

    public function withValidator($validator)
    {
        $validator->sometimes('file', 'required', function ($input) {
            return $input->format === 'Image';
        });

        $validator->sometimes('video_link', 'required', function ($input) {
            return $input->format === 'Video';
        });
    }
}
