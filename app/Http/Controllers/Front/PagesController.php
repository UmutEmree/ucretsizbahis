<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function sss(){
        return view('front.pages.sss');
    }

    public function destek(){
        return view('front.pages.destek');
    }

     public function contactsend(Request $request)
    {
        $data = $request->all();

        // Ship order...

        Mail::send('email.support', $data, function($message) use ($data)
            {
                $message->from($data['email'], $data['adsoyad']);
                $message->subject("Destek Talebi");
                $message->to('destek@ucretsizbahis.com');
                $message->cc('mertcan@ucretsizbahis.com');
                $message->cc('ozan@ucretsizbahis.com');
                $message->cc('umut@ucretsizbahis.com');
            });
        return redirect('/destek')->with('success', true)->with('message','Mesajınız başarıyla gönderildi!');

    }

   
}
