<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Tampilkan form edit profil.
     */
    public function edit()
{
    $user = Auth::user();
    return view('profile.edit', compact('user'));
}
          

    /**
     * Update data profil dan foto.
     */
    public function update(Request $request)
{
   $request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|email|max:255',
    'profile_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
]);

$user = auth()->user();
$filename = $user->profile_photo; // default pakai foto lama

if ($request->hasFile('profile_photo')) {
    $file = $request->file('profile_photo');
    $filename = time().'_'.$file->getClientOriginalName();
    $file->storeAs('profile_photos', $filename, 'public'); // ✅ benar
}

$user->update([
    'name' => $request->name,
    'email' => $request->email,
    'profile_photo' => $filename,
]);

    return back()->with('success', 'Profil berhasil diperbarui.');
}



    /**
     * Hapus akun user.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        if ($user->profile_photo) {
            Storage::disk('public')->delete($user->profile_photo);
        }

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
