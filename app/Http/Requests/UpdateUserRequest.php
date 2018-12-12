<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class UpdateUserRequest extends FormRequest
{
    public static $rules;
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
        // return User::$rules;

        $rules = User::$rules;

        $rules['phone'] = $rules['phone']. ',phone,' .$this->user;
        $rules['email'] = $rules['email']. ',email,' .$this->user;
        

        return $rules;

    }
}
