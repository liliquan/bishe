<?php


namespace App\Http\Requests\Admin;
use Illuminate\Foundation\Http\FormRequest;


class UserRequest extends  FormRequest
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
            'username' => 'required|between:3,10',
            'email' => 'required|email',
            'qq' => 'required|between:6,12',
            'wechat' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => '客户姓名不能为空',
            'username.between' => '客户姓名长度应该在3~10位之间',
            'mobile.required' => '手机号不能为空',
            'mobile.numeric' => '手机号只能是数字',
            'mobile.regex' => '请输入正确的手机号',
            'email.required' => '邮箱不能为空',
            'email.email' => '请输入正确的邮箱',
            'qq.required' => 'qq不能为空',
            'qq.between' => 'qq长度应该在6~12位之间',
            'wechat.required' => '微信不能为空',
        ];
    }
}