<?php

namespace App\Http\Controllers\API;

use APP\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\API\APIBaseController as APIBaseController;
use Illuminate\Support\Facades\Auth;
use DB;

class LoginController extends APIBaseController {
    public function login() {
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            return $this->sendResponse($user, 'User login successfully.');
        }
        else {
            return $this->sendError('Login Fail!');
        }
    }
}