<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApartmentsFormRequest extends FormRequest
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
            'apartmentName' => ['required', 'min:10', 'max:50'],
            'address' => ['required'],
            'price'=> ['required:integer'],
            'image' => ['required'],
            'status' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'apartmentName.required'=>'Vui lòng nhập tên chung cư.',
            'apartmentName.min'=>'Vui lòng nhập ít nhất 10 kí tự.',
            'apartmentName.max'=>'Vui lòng nhập nhiều nhất 50 kí tự.',
            'address.required'=>'Ðịa chỉ bắt buộc.',
            'price.required'=>'Giá bán phải là số.',
            'image.required'=>'Hình đại diện phải là link ảnh.',
            'status.required'=>'Trạng thái bán là số từ 1 đến 3.',
        ];
    }
}
