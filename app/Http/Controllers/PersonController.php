<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\confirm;

class PersonController extends Controller
{
    public function createUser(Request $request)
    {
        $person = new Person();
        $person->username = $request->username;
        $token = 'dffdfdfdfdfdfdfdf0d0f0df0dfd\d[vo';
        $person->token = $token;

        if($person->save()){
            return response()->json([
                'status' => true,
                'message' => 'User registered successfully'
            ], 200);
        }


        return response()->json([
            'status' => true,
            'message' => 'User not Successfully created'

        ],401);


    }

    public function addPhrase(Request $request)
    {
        $person = new Person();
        $person->phrase = $request->phrase;
        
        if($person->save()){
            return response()->json([
                'status' => true,
                'message' => 'Phrase added successfully'
            ], 200);
        }


        return response()->json([
            'status' => true,
            'message' => 'Phrase not Successfully added'

        ],401);
    }

    public function addPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);
    
        $person = new Person();
        $person->password = Hash::make($request->password);
        
        
        if($person->save()){
            return response()->json([
                'status' => true,
                'message' => 'Password added successfully'
            ], 200);
        }


        return response()->json([
            'status' => true,
            'message' => 'Password not Successfully added'

        ],401);
    }




    // new mtethod


    // add paraphrase


    // $phrase

    // $user


    // $user->phrase = $request->phrase
    

    // $user->save()

    // return $user


}
