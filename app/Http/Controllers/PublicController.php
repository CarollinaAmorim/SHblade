<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;


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
    
    public function prog1(){return view('public.progetto_1.index');}
    public function prog2(){return view('public.progetto_2.index');}
    public function prog3(){return view('public.progetto_3.index');}
    public function prog4(){return view('public.progetto_4.index');}
    public function prog5(){return view('public.progetto_5.index');}
    public function prog6(){return view('public.progetto_6.index');}
    public function prog7(){return view('public.progetto_7.index');}
    public function prog8(){return view('public.progetto_8.index');}
    public function prog9(){return view('public.progetto_9.index');}
    public function prog10(){return view('public.progetto_10.index');}
    public function prog11(){return view('public.progetto_11.index');}
    public function prog12(){return view('public.progetto_12.index');}
    public function prog13(){return view('public.progetto_13.index');}
    public function prog14(){return view('public.progetto_14.index');}


//add new page

}
