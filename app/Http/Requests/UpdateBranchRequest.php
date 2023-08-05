<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBranchRequest extends FormRequest
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
            'zone_id' => 'required',
            'area_id' => 'required',
            'name' => 'required',
            'opening_date' => 'required',
            'address' => 'required',
            'description' => 'required',
            'status' => 'required',
            'is_system' => 'required',
        ];
    }
}
