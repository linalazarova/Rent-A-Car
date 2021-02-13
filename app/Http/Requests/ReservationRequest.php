<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|min:2|max:255',
            'last_name' => 'required|min:2|max:255',
            'telephone' => 'required',
            'brand_id' => 'required',
            'car_model_id' => 'required',
            'date_from' => 'required',
            'date_to' => 'required',
            'price'=>'required'
        ];
    }
    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'Please provide valid name which is between 2 and 255 characters.',
            'last_name.required' => 'Please provide valid name which is between 2 and 255 characters.',
            'telephone.required'=>'A phone number is required.',
            'brand_id.required'=>'Please provide valid car brand.',
            'car_model_id.required'=>'Please provide valid car model.',
            'date_from.required'=>'Please provide valid date of reservation.',
            'date_to.required'=>'Please provide valid date of return.',
            'price.required'=>'Please provide valid price.',
        ];
    }
}
