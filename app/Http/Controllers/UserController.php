<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::paginate(13);
        return view('User.index', compact('users'));
    }
    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('User.edit', compact('users'));
    }

    public function create()
    {
        $users = User::all();
        return view('User.create', compact('users'));
    }

    public function store(Request $request)
    {

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(100, 100)->save('upload/Users/' . $name_gen);
        $save_url = 'upload/Users/' . $name_gen;

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->is_admin,
            'phone' => $request->phone,
            'address_one' => $request->address_one,
            'address_two' => $request->address_two,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'image' => $save_url
        ]);
        $message = 'User Created successfuly';
        return redirect('/Users')->with('success', $message);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'is_admin' => $request->is_admin,
            'name' => $request->name,
        ]);
        $message = 'User Updated successfuly';
        return redirect('/Users')->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        $message = 'User Deleted successfuly';
        return redirect('/Users')->with('success', $message);
    }
}
