<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserAccountController extends Controller
{
    public function  signUp() :View
    {
        return  view('auth.sign-up');
    }

    public function  store (UserAccountStoreRequest $request)
    {

        $request->valided();

        $emailExists = User::where('email', $request->email)-> first();
        if($emailExists) {
            return back()->withErrors([
                'email' => 'Email ja cadastrado'
            ]);
        }


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make( $request->password )
        ]);


        return  redirect()->route('sign-in');


    }
}
