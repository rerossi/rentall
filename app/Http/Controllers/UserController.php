<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index')->with('user', User::where('id', Auth()->user()->id)->get());
    }

    public function edit()
    {
        return view('user.edit')->with('user', Auth()->user());
    }

    public function update(Request $request)
    {
        $user = Auth()->user();   
        $user->update($request->all());

        return redirect(route('user.edit'));
    }
}
