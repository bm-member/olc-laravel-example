<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::with('posts')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|max:255|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // return $user;

        return response()->json(compact('user'), 201);
    }

    public function show(User $user)
    {
        $user->load('posts');
        return $user;
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'sometimes|required|max:255|min:6',
        ]);

        if($request->has('password')) {
            $request->merge(['password' => bcrypt($request->password)]);
        }
        return $user->update($request->all());
    }

    public function destroy(User $user)
    {
        return $user->delete();
    }
}
