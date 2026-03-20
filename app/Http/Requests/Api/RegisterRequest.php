<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
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
        'name'     => 'required|regex:/^[a-zA-Z\s\x{0600}-\x{06FF}]+$/u|max:255',
        'email'    => 'required|email|unique:users,email',
        'phone'    => ['sometimes',
        'required',
        'numeric',
        'digits:11',
        'unique:users,phone,' . auth()->id(),
        'regex:/^(010|011|012|015)[0-9]{8}$/'
        ],
        'password' => [
            'required',
            'confirmed',
            'min:8',     // الحد الأدنى 8 حروف
            'regex:/[a-z]/',      // حرف صغير على الأقل
            'regex:/[A-Z]/',      // حرف كبير على الأقل
            'regex:/[0-9]/',      // رقم على الأقل
            'regex:/[@$!%*#?&]/', // رمز على الأقل
        ],
    ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'برجاء إدخال الاسم بالكامل.',
            'name.regex'        => 'الاسم يجب أن يكون نصاً.',
            
            'email.required'    => 'البريد الإلكتروني مطلوب ولا يمكن تركه فارغاً.',
            'email.email'       => 'صيغة البريد الإلكتروني غير صحيحة (مثال: user@example.com).',
            'email.unique'      => 'هذا البريد الإلكتروني مسجل لدينا بالفعل، جرب تسجيل الدخول.',

            'phone.required' => 'برجاء إدخال رقم الهاتف.',
            'phone.digits'   => 'رقم الهاتف يجب أن يكون 11 رقماً.',
            'phone.unique'   => 'رقم الهاتف هذا مستخدم من قبل حساب آخر.',
            'phone.regex' => 'رقم الهاتف يجب أن يكون رقماً مصرياً صحيحاً يبدأ بـ (010, 011, 012, 015).',
            
            'password.required' => 'كلمة المرور مطلوبة.',
            'password.confirmed'=> 'كلمة المرور وتأكيدها غير متطابقين.',
            'password.regex'    => 'كلمة المرور ضعيفة! يجب أن تحتوي على 8 أحرف على الأقل، تشمل (حروف كبيرة، صغيرة، أرقام، ورموز).',
        ];
    } 

    protected function failedValidation(Validator $validator)
        {
            throw new HttpResponseException(response()->json([
                'status'  => false,
                'message' => 'Validation Errors',
                'errors'  => $validator->errors()
            ], 422));
        }
}
