<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('frontend.dashboard.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email', 'unique:users,email,'.Auth::user()->id],
            'image' => ['image', 'max:2048']
        ]);

        $user = Auth::user();

        if ($request->hasFile('image')){
            if (File::exists(public_path($user->image))){
                File::delete(public_path($user->image));
            }
            $image = $request->image;
            $imageName = rand().'_userId-'.$user->id.'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads/users'), $imageName);

            $path = "/uploads/users/".$imageName;

            $user->image = $path;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        toastr()->success('Profile Updated Successfully!');
        return redirect()->back();
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        if ($request->user()->update([
            'password' => bcrypt($request->password)
        ])) {
            auth()->logout();
            toastr()->success('Profile Password Updated Successfully!');
            return redirect(route('admin.login'));
        } else {
            // Обновление пароля не удалось
            toastr()->error('Не удалось обновить пароль');
            return redirect()->back()->with('error', 'Не удалось обновить пароль');
        }
    }
}
