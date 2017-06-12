<?php

namespace App\Http\Controllers;
use Auth;

use Flash;
use Illuminate\Support\Facades\DB;
use Session;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;


class UtilisateursController extends Controller
{
    public function index(){

    if(Auth::guest())
    {
        Auth::logout();
        return redirect()->guest('/');
    }
    if (Auth::check())
    {

        $id_user = Auth::user()->getId();
        $utilisateur = User::findOrFail($id_user);
        
    


    }
     $links = DB::table('links')->where('id_user', '=', $id_user)->orderBy('updated_at', 'desc')->get();  




    return view('profile.profile', compact('links', 'utilisateur'));
}

 
public function update(Request $request, $id)
    {

            $utilisateur = User::findOrFail($id);

        if(!empty($request->input('old_pass'))){
            $old_pass = $request->input('old_pass');
            $old_base = $utilisateur->password;
            if(!Hash::check($old_pass, $old_base)){
                return back()
                    ->with('error','The specified password does not match the database password');
            }else{
                $input['password'] = bcrypt($request->input('password'));

                $utilisateur->fill($input)->save();
                return('ok password');
            }


        }



                    $input = $request->all();

                    $utilisateur->fill($input)->save();
                      return('ok');
                   // \Session::flash('flash_message', 'utilisateur successfully modified!');

                    //return redirect()->route('utilisateurs.index');
             


    }



    public function sendEmailReminder(Request $request)
    {
        $id_user = Auth::user()->getId();
        $user = User::findOrFail($id_user);
        $user['message']= $request->messageMail;
        $user['subject']= 'Sujet: '.$request->subjectMail;


        Mail::send('emails.contact', ['user' => $user], function ($m) use ($user) {
            $m->from($user->email, $user->name);

            $m->to('abdelkhalek.oumaya@gmail.com', 'Raccourccir app')->subject('Contact');

        });
    }
}
