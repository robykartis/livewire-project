<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['login']]);
    // }
    public function login()
    {
        $title = 'Login';
        return view('auth.login', compact('title'));
    }
    public function process_login(LoginRequest $request)
    {
        $request->validated();
        // Cek apakah email terdaftar dalam database
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            toastr()->error('Email you entered is not registered!', 'ERROR', ['timeOut' => 5000]);
            return redirect()->back()
                ->withInput();
        }
        // Jika email terdaftar, lakukan validasi password
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            toastr()->error('Password you entered is incorrect!', 'ERROR', ['timeOut' => 5000]);
            return redirect()->back();
        }
        $input = $request->all();
        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if ($user = Auth::user()) {
                toastr()->success('Login successfully!', 'SUCCESS', ['timeOut' => 5000]);
                return redirect()->route('dashboard');
            }
        } else {
            return redirect()->route('auth.login')
                ->with('error', 'Email atau password tidak terdaftar');
        }
    }
    public function register()
    {
        $title = 'Register';
        return view('auth.register', compact('title'));
    }
    public function process_register(RegisterRequest $request)
    {
        $request->validated();
        $user = User::where('email', $request->email)->first();
        if ($user) {
            toastr()->error('Email yang Anda masukkan sudah terdaftar silahkan gunakan email lain.', 'ERROR', ['timeOut' => 5000]);
            return redirect()->back()->withInput();
        }
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user['type'] = 0;
            $user->save();
            toastr()->success('Data has been saved successfully!', 'Congrats', ['timeOut' => 5000]);
            return redirect()->route('login');
        } catch (\Throwable $e) {
            if ($e->errorInfo[1] == 1062) {
                toastr()->error('Email and password cannot be empty', 'ERROR', ['timeOut' => 5000]);
                return back()->withInput();
            } else {
                toastr()->error('An error occurred while saving user data.', 'ERROR', ['timeOut' => 5000]);
                return back()->withInput();
            }
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        toastr()->success('Logout successfully!', 'SUCCESS', ['timeOut' => 5000]);
        return Redirect('/');
    }
}
