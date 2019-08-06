<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassRoomRequest extends FormRequest
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
        return [
            // unique:classes Kiem tra duy nhat trong bang classes
            // exist:classes Kiem tra ton tai trong bang classes
            'name' => 'required|string|min:8',
            'teacher_name' => 'required|string|min:5|max:32',
            'major' => 'required|string',
            'max_student' => 'nullable|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Yeu cau nhap ten lop',
            'name.string' => 'Ten lop la 1 chuoi',
            'name.min' => 'Ten lop it nhat 8 ky tu',
            'teacher_name.required' => 'Yeu cau nhap ten giao vien',
        ];
    }
}
