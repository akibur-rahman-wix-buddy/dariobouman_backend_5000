<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $user = $request->user();
        $profile = $user->profile;
        $compact = [
            'user' => $user,
            'profile' => $profile,
        ];
        return view('frontend.layouts.profile.edit', $compact);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'bio' => 'nullable|string|max:500',
            'company_name' => 'nullable|string|max:255',
            'website' => 'nullable|url|max:255',
        ]);

        try {
            DB::beginTransaction();
            $this->user->update([
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'email' => $validatedData['email'],
            ]);

            $this->user->profile->update([
                'bio' => $validatedData['bio'],
                'company_name' => $validatedData['company_name'],
                'website' => $validatedData['website'],
            ]);

            DB::commit();

            return redirect()->back();

        } catch (Exception $e) {
            Log::error("Profile Update Error: " . $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            $this->user->delete();
            Auth::logout();
            return redirect()->route('login');
        } catch (Exception $e) {
            Log::error("User Delete Error: " . $e->getMessage());
            return redirect()->back();
        }

    }
}
