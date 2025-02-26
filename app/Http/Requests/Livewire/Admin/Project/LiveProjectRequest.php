<?php

namespace App\Http\Requests\Livewire\Admin\Project;

use Illuminate\Foundation\Http\FormRequest;

class LiveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|string",
            "description" => "required|string",
            "link" => "nullable|url",
            "image" => "required|image",
            "category_id" => "required|exists:categories,id",
        ];
    }

    // public function attributes(){
    //     return [
    //         "categoryId" => "cartegory"
    //     ];
    // }
}
