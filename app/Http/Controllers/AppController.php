<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
  public function loginUser(Request $request)
  {
      $cred = $request->validate([
        'name', 'required',
        'password', 'required'
      ]);

      if (Auth::attempt($cred, true)) {
        $request->session()->regenerate();

        return redirect()->route('/');
      }

      return back()->withErrors([
        'errors' => 'credentials not valid'
      ]);
  }

  public function login()
  {
    return view('login');
  }

  public function logout(Request $request)
  {
      Auth::logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      return redirect('/');
  }
}
