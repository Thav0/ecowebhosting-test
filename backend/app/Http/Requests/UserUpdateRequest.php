<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $userID = $this->user ?? $this->id;

        return [
            'name' => 'required|max:100',
            'email' => ['required', 'email', 'unique:users,email,' . $userID],
            'password' => 'required|max:50',
        ];
    }
}
