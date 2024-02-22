<?php

namespace App\Http\Requests\Admin\Image;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'image' => 'required|file',
            'title' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'title.required'=> 'Это поле необходимо для заполнения',
            'title.string'=> 'Данные должные соответствовать строчному типу',
            'image.file'=> 'Необходимо выбрать файл',
            'image.required'=> 'Это поле необходимо для заполнения',
        ];
    }
}
