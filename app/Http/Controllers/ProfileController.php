<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index(User $user){
    	// dd($user);
    	return view('profile', ['user' => $user]);
    }
    public function edit(User $user){
    	return view('profile.edit', ['user' => $user]);
    }

    public function update(User $user){
    	// dd(request());

    	$attributes = request()->validate([
    		'username' => [
          'string',
          'required',
          'alpha_dash',
          'max:40',
          Rule::unique('users')->ignore($user)
        ],
        'name' => [
          'string',
          'required',
          'max:50',
        ],
        
        'avatar' => [
          'mimes:jpeg,jpg,png',
          'max:2048'
        ],
        'email' => [
          'string',
          'required',
          'max:150',
          'email'
        ],
        'password' => [
          'string',
          'required',
          'min:8',
          'max:255',
          'confirmed'
        ],
        'birth_date' => ['date'],
        'gender' => ['boolean'],
        'city',
        'address'
    	]);

    	if(request('avatar')){
          $attributes['avatar'] = request('avatar')->store('avatars');
      	}


      $user->update($attributes);
      return redirect('/profile/'.$user->username);

    }
}
