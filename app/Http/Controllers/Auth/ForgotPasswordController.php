<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    public function showForgotForm(Request $request)
    {
        $isAdmin = $request->is('admin/*');
        return view('auth.forgot-password', compact('isAdmin'));
    }

    public function submitForgotRequest(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($request->is('admin/*') && $user->role !== 'admin') {
            return back()->withErrors(['email' => 'Anda tidak memiliki izin untuk mereset password admin.']);
        }

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }
}
