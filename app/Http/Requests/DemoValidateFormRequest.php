<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemoValidateFormRequest extends FormRequest
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
            'name'=>'required|min:5|max:20',
            'description'=>'required|min:5|max:20',
            'price'=>'numeric'
        ];
    }
    public function messages()
    {
        return [
            'name.require'=>'Vui lòng nhập tên',
            'name.min'=>'Vui lòng nhập ít nhất 5 kí tự',
            'name.max'=>'vui lòng nhập nhiều nhất 20 kí tự',
            'description.require'=>'Vui lòng nhập miêu tả',
            'description.min'=>'Vui lòng nhập ít nhất 5 kí tự',
            'description.max'=>'vui lòng nhập nhiều nhất 20 kí tự',
            'price.numeric'=>'Giá phải ở dạng số'
        ];
    }
    public function withValidator($validator){
        $validator->after(function ($validator){
            if ($this->get('name')== 'cuong'){
                $validator->errors()->add('name', 'không được dùng tên này');
            }
        });
    }
}
