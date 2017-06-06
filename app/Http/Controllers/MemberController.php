<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $redirectTo= '/home';

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('consument.home');
    }

    public function faqs(){
        return view ('consument.faqs');
    }

    public function contactus(){
        return view ('consument.contactus');
    }

    public function profile(){
        return view('consument.profile.index');
    }

   
}
