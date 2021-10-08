<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'nomemploye' => 'required|max:20|min:5',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, true)) {

            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        return back()->withErrors(['message' => 'Je vous reconnais pas!']);
    }

  public function logout(Request $request)
  {
      Auth::logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      return redirect('/');
  }
}
