<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UsersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $userRepository;

    public function __construct(UsersRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function loginPage()
    {
        return view('auth.login');
    }

    public function registerPage()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            if (Auth::user()->role_id == null) {
                return redirect('/');
            } else {
                return redirect('/admin');
            }
        } else {
            return redirect('/auth/login');
        }
    }

    public function register(Request $request) {
        // $this->validate($request,[
        //     'password'=>'required|min:6',
        //     'repassword'=>'required|min:6|same:password'
        // ],[
        //     'repassword.same'=>'Bạn chưa nhập lại mật khẩu'
        // ]);
        $attributes = [
            'full_name'   => $request->full_name,
            'email'      => $request->email,
            'password'   => bcrypt($request->password),
            'phone_number' => $request->phone_number

        ];
        $this->userRepository->create($attributes);
        return redirect('/auth/login');
    }

    public function logOut()
    {
        Auth::logout();

        return redirect('/');
    }
}
