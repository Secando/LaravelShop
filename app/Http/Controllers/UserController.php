<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLoginForm()
    {


        return view('login');
    }

    public function showProfile()
    {


        return view('profile');
    }

    public function showRegisterForm()
    {

        return view('register');
    }

//    public function login()
//    {
//        $user = $request->getParsedBody();
//
//        $user = $this->userService->login($user);
////
//        return $response->withStatus(302)->withHeader('Location', '/catalog');
//    }
//
//    public function logout()
//    {
//
//        $this->auth->logout();
//        return $response->withStatus(302)->withHeader('Location', '/catalog');
//    }
//
//    public function register()
//    {
//        $data = $request->getParsedBody();
////        if(!$this->reCaptcha->check($data)->success){
////            throw new \Exception();
////        }
//        unset($data['g-recaptcha']);
//
//        $this->userRegisterValidation->validate($data);
//
//        $user = $this->userService->register($data);
//        $this->emailService->sendVerificationLink($user);
//
//        return $response->withStatus(302)->withHeader('Location', '/verification');
//    }
//
//    public function changePassword(){
//        $data = $request->getParsedBody();
//
//        $this->userChangePasswordValidation->validate($data);
//        $this->userService->changePassword($data);
//        return $response->withStatus(302)->withHeader('Location', '/profile');
//    }
}
