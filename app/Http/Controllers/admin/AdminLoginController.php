<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index() {
        return view('admin.login');
    }
    public function authenticate(Request $request) {

        $validator = Validator::make($request->all(),
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );
        if($validator->passes()) {
            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password'=>$request->password], $request->get('remember'))) {
                $admin = Auth::guard('admin')->user();
                if($admin->role == 1) {
                    return redirect()->route('admin.dashboard');
                } else {
                    $this->logout();
                    return redirect()->back()->withErrors(['msg' => 'You are not admin ! '])->withInput($request->only('email'));;
                }
            } else {
                return redirect()->back()->withErrors(['msg' => 'Invalid credentials'])->withInput($request->only('email'));
            }
        }
        return redirect()->route('admin.login')->withErrors($validator)->withInput($request->only('email'));
    }
    public function logout() {
        Auth::guard('admin')->logout();
    }

}
