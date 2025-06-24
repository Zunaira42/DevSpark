<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }



    public function create()
    {
        return view('admin.users.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'is_admin' => 'required|boolean',
            'password' => 'required|string|min:8',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('users.index')->with('success', 'User added successfully.');
    }



    public function show($id)
    {
        // $product = Product::where('id', $id)->first();
        $user = User::findOrFail($id);

        return view('admin.users.show', compact('user'));
    }

    public function edit($id)
    {
        // $product = Product::where('id', $id)->first();
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $product = Product::where('id', $id)->first();
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $user->id,
            'is_admin' => 'required|boolean',
            'password' => 'required|string|min:8',
        ]);
        $validated['password'] = Hash::make($validated['password']);
        $user->update($validated);
        return redirect()->route('users.index')->with('success', 'user updated');
    }
}
