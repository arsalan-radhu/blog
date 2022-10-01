<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\User;
// use App\Mail\Welcome;
// use App\Http\Controllers\Email;
use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    //
    public function create(){

        return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {

        $form->persist();


        //session('message','Here is a default message!');

        session()->flash('message','Thanks so much for signing up!');

        // Validate the form
        // $this->validate(request(),[
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|confirmed'
        // ]);
    
        // //Create and save the user
        // $user = User::create(request(['name','email','password']));

        // //Sign them in
        // auth()->login($user);

        // //\Mail::to($user)->send(new Welcome);
        // \Mail::to($user)->send(new Welcome($user));

        // //Redirect to the home page

        return redirect()-> home();
    }
}
