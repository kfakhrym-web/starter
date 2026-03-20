<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Routing\Controller;
use App\Http\Requests\Api\UpdateProfileRequest;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
        // 3. تسجيل الخروج (Logout)
    public function logout(Request $request)
    {
        // حذف التوكن المستخدم حالياً
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'status' => true,
            'message' => 'تم تسجيل الخروج بنجاح، نراك قريباً!'
        ], 200);
    }


    public function updateProfile(UpdateProfileRequest $request)
{
    // جلب المستخدم الحالي من التوكن (Eager Loading implicit)
    $user = $request->user();

    // 1. تحديث البيانات النصية (الاسم والرقم) لو مبعوتين
    if ($request->has('name')) {
        $user->name = $request->name;
    }

    if ($request->has('phone')) {
        $user->phone = $request->phone;
    }

    // 2. التعامل مع رفع الصورة (Image Upload Logic)
    if ($request->hasFile('image')) {
        // حركة احترافية: حذف الصورة القديمة عشان متملاش السيرفر
        if ($user->image && Storage::disk('public')->exists($user->image)) {
            Storage::disk('public')->delete($user->image);
        }

        // رفع الصورة الجديدة وتخزين مسارها
        $path = $request->file('image')->store('uploads/users', 'public');
        $user->image = $path;
    }

    $user->save(); // حفظ التغييرات في قاعدة البيانات

    // 3. الرد بـ JSON موحد باستخدام الـ Resource
    return response()->json([
        'status'  => true,
        'message' => 'تم تحديث بيانات الملف الشخصي بنجاح.',
        'data'    => new UserResource($user)
    ], 200);
}
}
