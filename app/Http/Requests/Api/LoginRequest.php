<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class LoginRequest extends FormRequest
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
            'email'    => ['required', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            // رسائل البريد الإلكتروني
            'email.required'    => 'عفواً، يجب إدخال البريد الإلكتروني لإتمام عملية الدخول.',
            'email.email'       => 'البريد الإلكتروني الذي أدخلته غير صالح، يرجى التأكد من الصيغة (example@mail.com).',
            
            // رسائل كلمة المرور
            'password.required' => 'كلمة المرور مطلوبة، لا يمكنك ترك الحقل فارغاً.',
            'password.string'   => 'يجب أن تكون كلمة المرور نصاً صحيحاً.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status'  => false,
            'message' => 'هناك خطأ في البيانات المرسلة، يرجى المراجعة',
            'errors'  => $validator->errors()
        ], 422));
    }
}
