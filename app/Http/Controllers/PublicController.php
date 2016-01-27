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
    
        return view('pages.index');
    
    }
    
    
    public function sobre(){
    
        return view('pages.sobre');
    
    }
    
    public function portfolio(){
    
        return view('pages.portfolio');
    
    }
    
    public function processo(){
    
        return view('pages.processo');
    
    }
    
    public function contatti(){
    
        return view('pages.contatti');
    
    }
    
    public function servizi(){
    
        return view('pages.servizi');
    
    }
    
    public function prog1(){return view('pages.progetto_1');}
    public function prog2(){return view('pages.progetto_2');}
    public function prog3(){return view('pages.progetto_3');}
    public function prog4(){return view('pages.progetto_4');}
    public function prog5(){return view('pages.progetto_5');}
    public function prog6(){return view('pages.progetto_6');}
    public function prog7(){return view('pages.progetto_7');}
    public function prog8(){return view('pages.progetto_8');}
    public function prog9(){return view('pages.progetto_9');}
    public function prog10(){return view('pages.progetto_10');}
    public function prog11(){return view('pages.progetto_11');}
    public function prog12(){return view('pages.progetto_12');}
    public function prog13(){return view('pages.progetto_13');}
    public function prog14(){return view('pages.progetto_14');}

    //add new page

}
