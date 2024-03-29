<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display the login page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function loginPage()
    {
        return view('auth.login');
    }

    /**
     * Handle the login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // dd($request->all());
        $credentials = $request->only('email', 'password');

        // Check if the user with the provided email exists
        $user = User::where('email', $credentials['email'])->first();

        // Check if the user exists and if their email is verified
        if ($user && $user->email_verified_at) {
            // Attempt authentication
            if (auth()->attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('dashboard');
            } else {
                // Authentication failed
                return back()->withErrors([
                    'email' => 'Kredensial yang diberikan tidak cocok dengan catatan kami.',
                ]);
            }
        } else {
            // User doesn't exist or email is not verified
            return back()->withErrors([
                'email' => 'Email yang dimasukkan belum diverifikasi atau tidak ada.',
            ]);
        }
    }

    /**
     * Display the registration page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function registerPage()
    {
        return view('auth.register');
    }

    /**
     * Handle the registration request.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function register()
    {
        $validatedData = request()->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Hubungi admin untuk verifikasi email.');
    }

    /**
     * Verify the user's email.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function verifyEmail($id)
    {
        $user = User::findOrFail($id);
        $user->email_verified_at = now();
        $user->save();

        return redirect('/login');
    }

    /**
     * Activate the user's account.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function activate($id)
    {
        $user = User::findOrFail($id);
        $user->email_verified_at = now();
        $user->save();

        return redirect('dashboard/users');
    }

    /**
     * Change the user's password.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePassword()
    {
        request()->validate([
            'password' => 'required|confirmed',
        ]);

        auth()->user()->update([
            'password' => bcrypt(request('password')),
        ]);

        session()->flash('success', 'Password berhasil diperbarui');

        return redirect()->back();
    }

    /**
     * Logout the authenticated user.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function logout()
    {
        auth()->logout();

        return view('auth.login');
    }
}
