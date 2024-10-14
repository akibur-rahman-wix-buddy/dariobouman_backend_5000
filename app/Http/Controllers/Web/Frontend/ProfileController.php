<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {

    }
}
