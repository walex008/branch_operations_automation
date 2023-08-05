<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreZoneRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'head_office_id'=> 'required',
            'name' => 'required|unique',
            'address'=> 'required',
            'opening_date'=> 'required',
            'status'=>'required',
            'description' => 'required',
            'is_system' => 'required',
            'created_by' => 'required'
        ];
    }
}
