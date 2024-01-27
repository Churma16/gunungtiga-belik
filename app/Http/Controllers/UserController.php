<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            'users' => $users
        ]);
    }
}
