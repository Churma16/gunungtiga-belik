<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::orderBy('name')->get();
        foreach ($users as $user) {
            $user->registration_date = $user->created_at->format('H:i, d F Y ');
        }

        return view('admin.users.index', [
            'title' => 'Kelola Admin',
            'users' => $users,
        ]);
    }

    public function profile()
    {
        return view('admin.profile.index', [
            'title' => 'Profil Saya',
            'user' => auth()->user(),
        ]);
    }

    public function updateUsername()
    {
        request()->validate([
            'name' => 'required|unique:users,name,' . auth()->id(),
        ]);

        auth()->user()->update([
            'name' => request('name'),
        ]);

        return redirect()->back()->with('success', 'name berhasil diperbarui');
    }
}
