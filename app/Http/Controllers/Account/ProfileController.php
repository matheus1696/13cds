<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\ProfileUpdateRequest;
use App\Models\Professions\Profession;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function editProfile(): View
    {
        $professions = Profession::orderBy('title')->get();
        return view('profile.update-profile', compact('professions'));
    }

    /**
     * Update the user's profile information.
     */
    public function updateProfile(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = User::find(Auth::user()->id);

        $user->update($request->only('name', 'cpf', 'profession_id', 'contact'));

        return Redirect::route('profile.editProfile')->with('success', 'Alteração de dados realizada com sucesso!');
    }

    /**
     * Display the user's profile form.
     */
    public function editPassword(): View
    {
        return view('profile.update-password');
    }
}
