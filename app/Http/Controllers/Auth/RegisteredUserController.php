<?php

namespace App\Http\Controllers\Auth;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{

    private $helper;

    public function __construct()
    {
        $this->helper = new Helper();
    }

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.layouts.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'terms' => ['required',]
        ]);

        try {
            DB::beginTransaction();
            $handle = $this->helper->generateUniqueSlug($request->last_name, 'users', 'handle');
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'handle' => $handle,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Create an empty profile for the user
            $user->profile()->create();
            // Create an empty stockX for the user
            $user->stockX()->create();

            event(new Registered($user));

            Auth::login($user);

            DB::commit();
            return redirect(route('home.index', absolute: false));
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Registration Failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Registration failed. Please try again later.');
        }

    }
}
