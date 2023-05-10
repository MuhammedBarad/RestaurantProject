<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Hash;
class profileController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('profile.index',compact('user'));
    }

    public function update(Request $request,$id)
    {
        $user = User::findOrFail($id);
        $old_img = $request->old_img;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(100, 100)->save('upload/Users/' . $name_gen);
            $save_url = 'upload/Users/' . $name_gen;
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'address_one' => $request->address_one,
                'address_two' => $request->address_two,
                'city' => $request->city,
                'state' => $request->state,
                'zip' => $request->zip,
                'image' => $save_url
            ]);
        }else{
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'address_one' => $request->address_one,
                'address_two' => $request->address_two,
                'city' => $request->city,
                'state' => $request->state,
                'zip' => $request->zip,
            ]);
        }
        $message = 'Profile Updated successfuly';
        return redirect('/profile/'.$id)->with('success', $message);
    }
}
