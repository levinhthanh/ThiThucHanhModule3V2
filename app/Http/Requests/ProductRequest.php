<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|min:2|max:30',
            'price' => ['numeric', 'regex:/[0-9]{5,10}/'],
            'description' => 'required|min:2|max:500',
        ];
    }

    public function messages()
    {
        $messages = [
            'name.required' => 'Bạn cần phải nhập tên!',
            'name.min' => 'Tên ít nhất phải có 2 ký tự!',
            'name.max' => 'Tên không được quá 30 ký tự!',
            'price.numeric' => 'Giá tiền phải bắt đầu bằng số 0!',
            'price.regex' => 'Giá tiền phải từ 5 đến 10 chữ số',
            'description.require' => 'Mô tả là bắt buộc!',
            'description.min' => 'Mô tả ít nhất 2 ký tự!',
            'description.max' => 'Mô tả nhiều nhất 500 ký tự!'
        ];

        return $messages;
    }
}
