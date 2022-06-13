<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Password;

class UserController extends Controller
{
    public function dashboard()
    {
        $users = User::all();
        return view('users.dashboard', ['users' => $users]);
    }

    public function renderCreate()
    {
        return view('users.create');
    }

    public function createUser(Request $request)
    {
        //TODO: Implement a proper policy
        Gate::authorize('is-admin');

        $user = new User;

        $user->fill($request->all());

        $user->password = "password";
        
        $user->save();

        if($request->input('admin'))
            $user->makeAdmin();

        $status = Password::sendResetLink(
            ['email' => $user->email]
        );

        if($status == Password::RESET_LINK_SENT){
            session()->flash('danger', 'Could not create user. Please contact IT support.');
            return back();
        }

        session()->flash('success', 'User created successfully');
        return back();
    }

    public function deleteUser(int $user_id)
    {
        //TODO: Implement a proper policy
        Gate::authorize('is-admin');
        
        User::find($user_id)->delete();
        session()->flash('success', 'User deleted successfully');
        return redirect()->route('users.dashboard');
    }

    public function makeUserAdmin(int $user_id)
    {
        //TODO: Implement a proper policy
        Gate::authorize('is-admin');

        User::find($user_id)->makeAdmin();
        session()->flash('success', 'User made admin successfully');
        return redirect()->route('users.dashboard');
    }

    public function removeUserAdmin(int $user_id)
    {
        //TODO: Implement a proper policy
        Gate::authorize('is-admin');

        User::find($user_id)->removeAdmin();
        session()->flash('success', 'User rights removed successfully');
        return redirect()->route('users.dashboard');
    }
}
