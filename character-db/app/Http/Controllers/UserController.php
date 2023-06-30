<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    
    public function create(Request $request)
    {

        DB::table('users')->insert([
            'name'=>$request->input('name'),
            'surname'=>$request->input('surname'),
            'email'=>$request->input('e-mail'),
            'username'=>$request->input('username'),
            'password'=>$request->input('password')
        ]);

        return view('user');
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
}
