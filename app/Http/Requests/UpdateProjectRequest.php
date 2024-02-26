<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'name' => ['required','min:3'],
            'projectUrl' => ['nullable','url'],
            'gitHubUrl' => ['required','url'],
            'skills' => ['required', 'array'],
            'image' => ['image']
        ];
    }

    public function messages(): array
    {
        return [
            'skills.array' => 'Please select a skill',
            'projectUrl.url' => 'Please input a valid url',
            'gitHubUrl.url' => 'Please input a valid url',
            'gitHubUrl.required' => 'GitHub Url is required',
            'name.min' => 'Name must consist a minimum of 3 characters',
            'image.image' => 'Uploaded file must be an image type',
        ];
    }
}
