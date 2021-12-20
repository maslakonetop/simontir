<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index', [
            'judul' => 'List Pengguna',
            'versi' => 'Simontir v1.0.0 Beta Rev 12',
            'datas' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.baru', [
            'judul' => 'Registrasi Pengguna Baru',
            'versi' => 'Simontir v1.0.0 Beta Rev 12'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'password' => [
                'required',
                'string',
                'min:6',             // must be at least 6 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'email' => 'required|email:dns|unique:users',
            'is_admin' => 'required'
        ]);
        // dd('Berhasil');
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        // $request->session()->flash('berhasil', 'Registrasi Akun Baru Berhasil!');
        return redirect('/user')->with('berhasil', 'Registrasi Akun Baru Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // dd($user);
        return view('user.detail', [
            'judul' => 'Detail User',
            'versi' => 'Simontir v1.0.0 Beta Rev 12',
            'data' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', [
            'judul' => 'Edit User',
            'versi' => 'Simontir v1.0.0 Beta Rev 12',
            'data' => $user
        ]);
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
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'password' => [
                'required',
                'string',
                'min:6',             // must be at least 6 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'email' => 'required|email:dns|unique:users',
            'is_admin' => 'required'
        ]);
        // dd('Berhasil');
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::find($user->id)
            ->update($validatedData);

        // $request->session()->flash('berhasil', 'Registrasi Akun Baru Berhasil!');
        return redirect('/user')->with('berhasil', 'Update Akun Baru Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
