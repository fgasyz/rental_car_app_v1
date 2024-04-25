<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function register_index()
    {
        if(Auth::check()) {
            return redirect('/dashboard');
        }
        return view('register');
    }

    public function login_index()
    {
        if(Auth::check()) {
            return redirect('/dashboard');
        }
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    public function authentication(LoginUserRequest $request)
    {
        //
        $validate = $request->validated();
        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            session()->put('currentuser', auth()->user()->name);
            session()->flash('message', 'Selamat, anda berhasil masuk!.');
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['error' => 'periksa nomor sim dan kata sandi anda!']);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        //
        $validate = $request->validated();

        $user = new User();

        $user->no_sim = $validate['no_sim'];
        $user->name = $validate['name'];
        $user->password = $validate['password'];
        $user->address = $validate['address'];
        $user->no_telp = $validate['telp'];

        $user->save();

        session()->flash('status', 'berhasil mendaftar, silahkan login! ');
        return redirect('/login');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
