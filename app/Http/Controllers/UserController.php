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

    public function edit(User $user)
    {
        return view('user.edit')->with('user', $user);
    }

    public function update(User $user, Request $request)
    {

        // $user->update($request->all());
        // return redirect(route('user.index', $user->id));

        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
        ]);

        $user->update($request->all());

        return redirect(route('user.index', $user->id));
    }
}
