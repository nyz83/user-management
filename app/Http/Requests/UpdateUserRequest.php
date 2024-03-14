<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        $currentUser = $this->route('user')->id;

        return [
            'name' =>'required|string',
            'username' => ['required', Rule::unique(User::class)->ignore($currentUser)],
            'email' => ['required', 'email', Rule::unique(User::class)->ignore($currentUser)],
            'password' => 'nullable|string',
            'phone' =>'required|string',
            'address' => 'nullable|string',
            'gender' => ['required', Rule::in(['male', 'female'])],
            'is_active' =>'required|boolean'
        ];
    }
}
