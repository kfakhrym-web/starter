<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
        // 'sometimes' تعني: لو الحقل موجود في الطلب، طبق عليه الشروط اللي بعدها
        'name'  => 'sometimes|required|string|max:255',
        
        // رقم التليفون
        'phone' => 'sometimes|required|numeric|digits:11|unique:users,phone,' . auth()->id(),
        
        // الصورة
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ];
    }

    public function messages()
    {
        return [
            'name.required'  => 'لا يمكن ترك حقل الاسم فارغاً عند التحديث.',
            'phone.required' => 'برجاء إدخال رقم الهاتف.',
            'phone.digits'   => 'رقم الهاتف يجب أن يكون 11 رقماً.',
            'phone.unique'   => 'رقم الهاتف هذا مستخدم من قبل حساب آخر.',
            'image.image'    => 'الملف المرفق يجب أن يكون صورة.',
        ];
    }
}
