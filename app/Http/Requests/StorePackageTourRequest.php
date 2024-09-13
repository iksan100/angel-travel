<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePackageTourRequest extends FormRequest
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
            'name' => ['required','string','max:255'],
            'location' => ['required','string','max:255'],
            'thumbnail' => ['required','image','mimes:jpg,png,jpeg'],
            'category_id' => ['required','integer'],
            'price' => ['required','integer'],
            'days' => ['required','integer'],
            'about' => ['required','string','max:65535'],
            'package_photos.*' => ['required','image','mimes:jpg,png,jpeg'],
        ];
    }
}
