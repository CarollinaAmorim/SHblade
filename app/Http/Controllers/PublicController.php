<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;


class PublicController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    public function home(){
        return view('public.home.index');
    }
    public function contatti(){
        return view('public.contatti.index');
    }
    public function inviomail(Request $request){
        $this->validate($request, [
            'nome' => 'required',
            'cognome' => 'required',
            'email'=>'required|email',
            'numero' => 'numeric|min:8',
            'messaggio' => 'required'
        ]);


        $first_name = Input::get('nome');
        $last_name = Input::get ('cognome');
        $phone_number = Input::get('numero');
        $email = Input::get ('email');
        $message = Input::get ('messaggio');
        $userIpAddress = $_SERVER['REMOTE_ADDR'];

        Mail::send('emails.contatti',[
            'nome'=>$first_name,
            'cognome'=>$last_name,
            'tel'=>$phone_number,
            'mail'=>$email,
            'messaggio'=>$message,
            'ip'=>$userIpAddress
        ], function($message){
            $message->to('info@atemporale.it')->subject('Messaggio dal sito www.atemporale.it');
        });
    }
    public function portfolio(){
        return view('public.portfolio.index');
    }
    public function servizi(){
        return view('public.servizi.index');
    }
    public function processo(){
        return view('public.processo.index');
    }
    public function sobre(){
        return view('public.sobre.index');
    }
    
    public function prog1(){
        return view('public.prog1.index');
    }
    public function prog2(){return view('public.prog2.index');}
    public function prog3(){return view('public.prog3.index');}
    public function prog4(){return view('public.prog4.index');}
    public function prog5(){return view('public.prog5.index');}
    public function prog6(){return view('public.prog6.index');}
    public function prog7(){return view('public.prog7.index');}
    public function prog8(){return view('public.prog8.index');}
    public function prog9(){return view('public.prog9.index');}
    public function prog10(){return view('public.prog10.index');}
    public function prog11(){return view('public.prog11.index');}
    public function prog12(){return view('public.prog12.index');}
    public function prog13(){return view('public.prog13.index');}
    public function prog14(){return view('public.prog14.index');}


//add new page

}
