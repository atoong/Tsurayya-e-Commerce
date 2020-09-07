<?php

namespace App\Http\Controllers\API\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class SignOutController extends Controller
{
    public function __invoke() 
    {
       auth()->logout();
    }
}

