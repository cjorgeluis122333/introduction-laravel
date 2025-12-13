<?php

namespace App\Http\Controllers\middleware;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserAuthRequest;
use App\Models\middleware\UserAuth;
use Illuminate\Support\Facades\Hash;
use Auth;

class AuthControllerController extends Controller
{
    public function index()
    {
        return UserAuth::all();

    }

    public function createUser(UserAuthRequest $request)
    {

        $user = UserAuth::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash::make es preferible a bcrypt()
        ]);
        return response()->json($user);
        //
//        // CREATE TOKEN
//        $token = $user->createToken('API TOKEN')->plainTextToken;
//
//        return response()->json([
//            "status" => true,
//            "message" => "The user was created successfully",
//            "data" => $user,
//            "token" => $token, // Aquí va el token generado
//            "code" => 201,
//        ]);
    }

    public function loginUser(LoginRequest $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'status' => false,
                'message' => 'The user credentials were incorrect.',
            ], 401);
        }

        $user = UserAuth::where('email', $request->email)->first();
        return response()->json([
            "status" => true,
            "message" => "The user was created successfully",
            "data" => $user,
        ], 200);

    }



}
