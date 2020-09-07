<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\User;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $insert = User::create($data);
      

        return ResponseFormatter::success($insert);

    }
}

