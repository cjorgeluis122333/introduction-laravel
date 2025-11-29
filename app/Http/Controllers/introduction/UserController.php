<?php

namespace App\Http\Controllers\introduction;

use App\Http\Controllers\Controller;
use App\Models\user\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();  //Is like findAll
        return $users;
    }

    public function findUserById($id){
        $user = User::find($id);
        return response()->json([
            'user'=>$user,
            'user_phone' => $user-> phone
        ]);
    }

    /**
     * Not work ask AI
     * */
    public function searchUserNotUseOrm()
    {
        $users = DB::select(DB::raw("SELECT * FROM `users` where age = 30"));

        return $users;

    }

    public function getUserWereAge()
    {
        // if (age == 30 && name like "D%") || (name Like "Jorge")
        $user = User::where(column: "age", operator: "=", value: 30)
            ->where("name", "LIKE", "D%")
            ->orWhere("name", "Like", "Jorge")
            ->orderBy("age", 'asc')
            ->get();
        return $user;
    }


    public function create():RedirectResponse
    {
        //CREATE A USER VIA 1
        $user = new User;
        $user->name = 'Jorge';
        $user->email = 'Jorge@gmail.com';
        $user->password = Hash::make('123456');
        $user->age = 18;
        $user->address = "Reparto morales";
        $user->zip_code = 290003;
        $user->save();

        //CREATE A USER V2
        User::create([
            'name' => 'Pepe',
            'email' => 'Pepe@gmail.com',
            'password' => Hash::make('123456'),
            'age' => 15,
            'address' => 'Reparto morales',
            'zip_code' => 290423
        ]);

        //
        User::create([
            'name' => 'Cardivi',
            'email' => 'Cardivi@gmail.com',
            'password' => Hash::make('1234w56'),
            'age' => 4,
            'address' => 'Reparto camayo',
            'zip_code' => 290423
        ]);

        return redirect()->route("user.index");

    }

}
