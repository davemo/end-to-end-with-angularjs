<?php

class AuthController extends BaseController {

  public function status() {
    return Response::json(Auth::check());
  }

  public function secrets() {
    if(Auth::check()) {
      return 'You logged in wtf?';
    } else {
      return 'You aint logged in!';
    }
  }

  public function login()
  {
    if(Auth::attempt(array('email' => Input::json('email'), 'password' => Input::json('password'))))
    {
      return Response::json(Auth::user());
    } else {
      return Response::json(array('flash' => 'Invalid username or password'), 500);
    }
  }

  public function logout()
  {
    Auth::logout();
    return Response::json(array('flash' => 'Logged Out!'));
  }

}
