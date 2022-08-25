<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Boolean;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.login');
    }

    public function auth(LoginRequest $request)
    {  
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return view('admin.dashboardPatente');
        }else{
            return redirect()->back()->with('danger', 'E-mail ou senha inválida');
        }
    }
}
