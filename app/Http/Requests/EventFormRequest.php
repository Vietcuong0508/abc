<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventFormRequest extends FormRequest
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
            'eventName'=>['required', 'min:20'],
            'bandNames'=>['required'],
            'startDate'=>['required', 'after:today'],
            'endDate'=>['required', 'after:startDate'],
            'portfolio'=>['required'],
            'ticketPrice'=>['required', 'min:1'],
            'status'=>['required', 'min:0', 'max:3']
        ];
    }

    public function messages()
    {
        return [
            'eventName.required'=>'Vui lòng nhập tên',
            'eventName.min'=>'Vui lòng nhập ít nhất 20 kí tự',
            'bandNames.required'=>'Vui lòng nhập vào trường này',
            'startDate.required'=>'Vui lòng nhập vào trường này',
            'startDate.after'=>'Vui lòng nhập thời gian sau ngày hôm nay',
            'endDate.required'=>'Vui lòng nhập vào trường này',
            'endDate.min'=>'Vui lòng nhập thời gian sau ngày bắt đầu',
            'portfolio.required'=>'Vui lòng nhập vào trường này',
            'ticketPrice.required'=>'Vui lòng nhập vào trường này',
            'ticketPrice.min'=>'Vui lòng nhập ít nhất là 1',
            'status.required'=>'Vui lòng nhập vào trường này',
            'status.min'=>'Vui lòng nhập ít nhất là 0',
            'status.max'=>'Vui lòng nhập nhiều nhất là 3',
        ];
    }
}
