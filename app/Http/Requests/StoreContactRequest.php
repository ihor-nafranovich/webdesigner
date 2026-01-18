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
        return true; // Разрешаем всем отправлять сообщения
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10|max:5000',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Пожалуйста, укажите ваше имя.',
            'name.min' => 'Имя должно содержать минимум :min символа.',
            'name.max' => 'Имя не может быть длиннее :max символов.',
            'email.required' => 'Пожалуйста, укажите ваш email.',
            'email.email' => 'Пожалуйста, укажите корректный email адрес.',
            'email.max' => 'Email не может быть длиннее :max символов.',
            'message.required' => 'Пожалуйста, введите ваше сообщение.',
            'message.min' => 'Сообщение должно содержать минимум :min символов.',
            'message.max' => 'Сообщение не может быть длиннее :max символов.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'name' => 'имя',
            'email' => 'email',
            'message' => 'сообщение',
        ];
    }
}
