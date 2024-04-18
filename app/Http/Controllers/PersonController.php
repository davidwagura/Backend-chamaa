<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Person;

use App\Models\Phrase;
use App\Models\Username;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\confirm;

class PersonController extends Controller
{
    public function createUser(Request $request)
    {
        $request->validate([

            'password' => 'required|confirmed',

        ]);
    
        $user = User::create([


            'password' => Hash::make($request->password),

        ]);
            
        if($user->save()){

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

    public function username(Request $request)
    {
        $request->validate([

            'username' => 'required',

        ]);
    
        $username = Username::create([


            'username' => $request->username,

        ]);
            
        if($username->save()){

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

    

    public function addPhrase(Request $request)
    {
        $request->validate([

            'phrase' => 'required|confirmed',

        ]);
    
        $phrase = Phrase::create([


            'phrase' => $request->password,

        ]);
            
        if($phrase->save()){

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

            'password' => 'required|confirmed',

        ]);
    
        $user = User::create([


            'password' => Hash::make($request->password),

        ]);
            
        if($user->save()){

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

    public function login(Request $request)
    {
        $request->validate ([

            'paymail' => 'required|string',

            'password' => 'required'
        ]);

        if(Auth::attempt(['paymail' => $paymail, 'password' => $password]))
        {
            $user = Auth::user(); 

            return response()->json([

                'user' => $user,

                'authorization' => [

                    'token' => $user -> createToken('ApiToken')->plainTextToken,

                    'type' => 'bearer',

                ]
            ]);
        }
        
        return response()->json([

            'message' => 'Invalid credentials',

        ],401);
    }
}



