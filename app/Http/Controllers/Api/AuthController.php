<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Api\RegisterRequest;
use App\Http\Requests\Api\LoginRequest;


class AuthController extends Controller
{
    // 1. التسجيل (Register)
    public function register(RegisterRequest $request)
    {

        // إنشاء المستخدم
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password), // تشفير الباسورد
        ]);

        // إنشاء التوكن لهذا المستخدم
        $token = $user->createToken('main_token')->plainTextToken;

        return response()->json([
            'status'  => true,
            'message' => '!تم إنشاء الحساب بنجاح، أهلاً بك في متجرنا',
            'user' => new UserResource($user),
            'token' => $token
        ], 201);
    }

    // 2. تسجيل الدخول (Login)
    public function login(LoginRequest $request)
    {

        // البحث عن المستخدم بالايميل
        $user = User::where('email', $request->email)->first();

        // التأكد من وجود المستخدم وصحة الباسورد
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'بيانات الدخول غير صحيحة'
            ], 401);
        }

        // حذف التوكنز القديمة (اختياري لزيادة الأمان)
        $user->tokens()->delete();

        // إنشاء توكن جديد
        $token = $user->createToken('main_token')->plainTextToken;

        return response()->json([
            'status'  => true,
            'message' =>  'تم تسجيل الدخول بنجاح، مرحباً بك!',
            'user' => new UserResource($user),
            'token' => $token
        ], 200);
    }

    public function profile(Request $request)
    {
        // بتروح للتوكن اللي مبعوت، وتشوف صاحبه مين في الداتابيز وترجعهولك
        $user = $request->user();

        return response()->json([
            'status' => true,
            'message' => 'تم جلب بيانات الملف الشخصي بنجاح.',
            'data' => new UserResource($user)
        ], 200);
    }

}
