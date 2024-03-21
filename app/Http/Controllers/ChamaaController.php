<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class ChamaaController extends Controller
{
    public function addUsername(Request $request)
    {
    //     $request->validate([
    //         'username' => 'required|unique:users,username',
    //     ]);

    //     $request->session()->put('username', $request->username);

    //     return response()->json(['message' => 'Username added successfully']);
    // }

    // public function selectPhrase(Request $request)
    // {
    //     $request->validate([
    //         'phrase' => 'required',
    //     ]);

    //     $request->session()->put('phrase', $request->phrase);

    //     return response()->json(['message' => 'Phrase selected successfully']);
    // }

    // public function addPassword(Request $request)
    // {
    //     $request->validate([
    //         'password' => 'required|confirmed',
    //     ]);

    //     $username = $request->session()->get('username');
    //     $phrase = $request->session()->get('phrase');

    //     $user = new User();
    //     $user->username = $username;
    //     $user->phrase = $phrase;
    //     $user->password = bcrypt($request->password);
    //     $user->save();

    //     $request->session()->forget(['username', 'phrase']);

    //     return response()->json(['message' => 'User registered successfully']);
    // }    
    }
}
