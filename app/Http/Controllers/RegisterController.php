<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public $userObject;

    public function __construct(User $user)
    {
        $this->userObject = $user;
    }
    
    public function create()
    {
        return view('createreaderform');
    }

    public function store(RegisterRequest $request)
    {
         $attributes = $request->validated();
         $attributes['address'] = 
             str_replace(',', ' ', $attributes['address']);
         $attributes['password'] = 
             bcrypt($attributes['password']);
         
             $this->userObject->addNewOne($attributes);
     
             return redirect('/');
    }
}
