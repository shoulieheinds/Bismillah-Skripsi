<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $redirectTo= '/admin/home';

    public function __construct()
    {
       $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('admin.home');
    }
    public function profile(){
        return view('admin.profile.index');
    }
     
     // request data
    public function data_request(){
        return view('admin.data_request.index');
    }
    

    
    public function data_research(){
        return view('admin.data_research.list_research');
    }
    public function data_archive(){
        return view('admin.data_master.data_archive.index');
    }
    public function data_area(){
        return view('admin.data_master.data_area.index');
    }
    public function data_sector(){
        return view('admin.data_master.data_sector.index');
    }
    public function data_segment(){
        return view('admin.data_master.data_segment.index');
    }
    public function data_member(){
        return view('admin.data_master.data_member.index');
    }

    public function admin_faq(){
        return view('admin.admin_faq');
    }
     public function admin_contactus(){
        return view('admin.admin_contactus');
    }
}
