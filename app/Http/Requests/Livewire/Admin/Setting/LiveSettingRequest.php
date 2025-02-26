<?php

namespace App\Http\Requests\Livewire\Admin\Setting;

use Illuminate\Foundation\Http\FormRequest;

class LiveSettingRequest extends FormRequest
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
            "settings.name"=> "required|string|max:20",
            "settings.email"=> "required|email|string|max:30",
            "settings.address"=> "required|string",
            "settings.phone"=> "required|string|max:50",
            "settings.facebook"=> "nullable|url",
            "settings.instagram"=> "nullable|url",
            "settings.linkedin"=> "nullable|url",
            "settings.twitter"=> "nullable|url",

        ];
    }
}
