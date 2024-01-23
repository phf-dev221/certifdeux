<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;


class UpdateBienRequest extends FormRequest
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
            'libelle' => 'string',
            'description' => 'string',
            'date' => 'date',
            'lieu' => 'regex:/string',
            'image[]' => 'image|max:10000|mimes:jpeg,png,jpg',
        ];
    }

    public function failedValidation(validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'status_code' => 422,
            'error' => true,
            'message' => 'erreur de validation',
            'errorList' => $validator->errors()
        ]));
    }
    public function messages()
    {
        return [
            'libelle.string' => 'Format du libellé incorrect',
            'description.string' => 'la description a un format incorrect',
            'date.date' => 'Format date incorrect',
            'lieu.string' => 'Format lieu incorrect',
            'image.image' => "le format de l'image est incorrect",
            'image.max' => 'la taille de l\'image est trop grande'

        ];
    }
}
