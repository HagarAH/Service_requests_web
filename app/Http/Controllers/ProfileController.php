<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        $profile = Profile::firstOrCreate([
            'user_id' => $user->id
        ], [
            'user_id' => $user->id,
            'fname' => null,
            'lname' => null,
            'phone' => null,
            'daire_id' => null,
        ]);

        return view('profile', compact($user, $profile));
    }
}
