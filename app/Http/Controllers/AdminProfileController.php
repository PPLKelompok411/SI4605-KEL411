<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminProfileController extends Controller
{
    /**
     * Tampilkan halaman profil admin.
     */
    public function show(Request $request)
    {
        return view('showprofiladmin', [
            'admin' => Auth::guard('admins')->user(),
        ]);
    }

    /**
     * Tampilkan form edit profil admin.
     */
    public function edit(Request $request)
    {
        return view('editprofiladmin', [
            'admin' => Auth::guard('admins')->user(),
        ]);
    }

    /**
     * Proses update data profil admin.
     */
    public function update(Request $request)
    {
        $admin = Auth::guard('admins')->user();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
        ]);

        // $admin->update($validated);

        // return Redirect::route('admin.profile.show')->with('status', 'Profil berhasil diperbarui.');
        $admin->update([
        'name' => $request->name,
        'email' => $request->email,
    ]);

    return redirect()->route('admin.profile.show')->with('success', 'Profil berhasil diperbarui.');
    }
}
