<?php

namespace App\Http\Controllers;

use Domain\BaseAction;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm(Request $request)
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $token = (new BaseAction())->token($request);

        session(['api_token' => $token]);

        return redirect("/dashboard");
    }
}
