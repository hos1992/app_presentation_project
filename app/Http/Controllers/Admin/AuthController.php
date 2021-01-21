<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        if (auth()->guard('admin')->check()) {
            return redirect('/admin');
        }
        return view('admin.auth.login');
    }

    public function loginPost(Request  $request)
    {

        $this->validate($request, ['email' => 'required|email', 'password' => 'required']);

        if(auth()->guard('admin')->attempt($request->only(['email', 'password']))){
            return redirect('/admin');
        }

        return redirect()->back()->with('error', 'البريد او كلمة المرور خطأ من فضلك اعد المحاوله');

    }
}
