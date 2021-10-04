<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
    */
    public function login()
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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new_user')
                ->with('roles', Role::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'password' => 'required|min:5',
          'name' => 'required|min:6'
        ]);

        $cred = $request->all();
        $cred['password'] = bcrypt($request->password);

        User::create($cred);

        return redirect()->intended('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('update_user')
                ->with('user', $user)
                ->with('roles', Role::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
      $cred = $request->validate([
        'password' => 'required|min:5',
        'name' => 'required|min:6'
      ]);

      $user->update($request->all());

      return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    }
}
