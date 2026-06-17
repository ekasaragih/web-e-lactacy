<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view("auth.login");
    }

    public function register()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone_num' => 'required|string|max:20',

            'password' => 'required|min:6|confirmed',

            'dob' => 'nullable|date',
            'dob_manual' => 'nullable|string|regex:/^\d{2}-\d{2}-\d{4}$/',

            'hpht' => 'nullable|date',

            'status' => 'nullable|in:belum_hamil,sudah_melahirkan',
            'tanggal_lahir_bayi' => 'nullable|date',

            'persetujuan_penelitian' => 'required|accepted',
            'persetujuan_data' => 'required|accepted',
        ]);

        // tanggal lahir ibu
        $dob = $request->filled('dob_manual')
            ? Carbon::createFromFormat('d-m-Y', $request->dob_manual)->format('Y-m-d')
            : $request->dob;

        // $username = explode('@', $request->email)[0];

        // simpan user
        $user = User::create([
            'full_name' => $request->full_name,
            // 'username' => $username,
            'email' => $request->email,
            'phone_num' => $request->phone_num,
            'dob' => $dob,
            'password' => Hash::make($request->password),
        ]);

        // jika ibu sedang hamil, simpan HPHT
        $hpht = $request->filled('hpht')
            ? $request->hpht
            : null;

        // hanya simpan tanggal lahir bayi bila memilih "Sudah Melahirkan"
        $tanggalLahirBayi = (
            $request->status === 'sudah_melahirkan'
            && $request->filled('tanggal_lahir_bayi')
        )
            ? $request->tanggal_lahir_bayi
            : null;

        Profile::create([
            'user_id' => $user->id,
            'hpht' => $hpht,
            'tanggal_lahir_bayi' => $tanggalLahirBayi,
            'persetujuan_penelitian' => $request->has('persetujuan_penelitian'),
            'persetujuan_data' => $request->has('persetujuan_data'),
        ]);

        return redirect()
            ->route('user.login')
            ->with(
                'success',
                'Pendaftaran berhasil! Silakan login.'
            );
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/beranda')->with('success', 'Login berhasil!');
        }

        return back()->withErrors(['email' => 'Email atau kata sandi salah.'])->onlyInput('email');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('welcome_guest');
    }
}
