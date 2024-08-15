<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {

           $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make ( $request->password),
                'phone_number' =>$request->phone_number,
            ]);

            return response()->json(['message'=> 'user registered successfully', 'user' => $user], 201);
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
        public function destroy(string $id)
        {
            //
        }
}
