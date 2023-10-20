<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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


        $rules = [
            'name'=>'required|min:3|max:100|unique:categories,id,'.$this->id,
            'description' => 'required|min:10 |max:600'
        ];

        if ($this->isMethod('patch') || $this->isMethod('put')) {
        //    $rules[ 'name'] = 'required|min:3|max:50|unique:categories,name,'.$this->id ;
            $rules['image'] = 'sometimes|image|mimes:jpeg,png,jpg,gif';
        } else {

            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif';
        }
        return $rules;
    }
}
