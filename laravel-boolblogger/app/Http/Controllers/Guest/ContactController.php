<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;



class ContactController extends Controller
{

    public function contact(){
        return view('guest.contact');
    }

    public function contactMailSender(Request $request){

        Mail::to("maildiunadminbool@gmail.com")->send(new SendNewMail($request->guestName, $request->guestEmail, $request->guestMessage));

        return redirect()->route('guest.thanks')->with('message', "Grazie $request->guestName!!Il messaggio è stato inviato correttamente");
    }

    public function thanks(){
        // return redirect('guest.home')->with('message', 'Il messaggio è stato inviato correttamente');
        return view('guest.thanks');
    }
}