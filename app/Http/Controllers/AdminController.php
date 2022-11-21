<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        return view("pages.back.dashboard");
    }
    public function settings()
    {
        return view("pages.back.settings");
    }
    public function settings_save(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);

        $rules = [
            "name" => "required",
            "email" => "required|email",
        ];

        if($request->has('password') && $request->password !== null){
            $rules['password'] = "required";
            $user->password = Hash::make($request->password);
        }

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect()->route('settings');
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('settings');
    }
}
