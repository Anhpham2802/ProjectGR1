<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Service\User\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private $userService;
    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }
    public function login()
    {
        return view('front.account.login');
    }
    public function checkLogin(Request $request)
    {
        // $remember = $request->has('remember') ? true : false;
        // if (auth()->attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
        //     return redirect()->route('front.home');
        // } else {
        //     return redirect()->back()->with('error', 'Email hoặc mật khẩu không đúng');
        // }
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => 2, // tai khoan nguoi dung
        ];

        $remember = $request->remember;
        if (Auth::attempt($credentials, $remember)) {
            return redirect('/');
        } else {
            return back()->with('error', 'Email hoặc mật khẩu không đúng');
        }
    }
    public function logout()
    {
        Auth::logout();
        return back();
    }
    public function register()
    {
        return view('front.account.register');
    }
    public function postRegister(Request $request)
    {
        if ($request['password'] != $request['confirm-password']) {
            return back()->with('error', 'Mật khẩu không khớp');
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'level' => 2,
            'password' => $request->password,
        ];
        $this->userService->create($data);
        return redirect('./account/login')->with('success', 'Đăng ký thành công');
    }
}
