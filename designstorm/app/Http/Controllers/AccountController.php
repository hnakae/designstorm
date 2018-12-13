<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
  //must be logged in to get to account
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
    return view('account/dashboard');
  }
}
