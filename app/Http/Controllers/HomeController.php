<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\About;
use App\Favorit;
use App\Berita;
use App\Kesenian;
use App\VisiMisi;
use DB;


class HomeController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $data['about']  = About::all();
        $data['favorit'] = Favorit::all();
        $data['berita'] = Berita::all();
        $data['kesenian'] = Kesenian::all();
        $data['favorit'] = Favorit::all();
        return view('dashboard-master.dashboard',$data);
    }
     public function adminHome()
    {
        return view('admin-master.dashboard');
    }

    //   public function loginpage()
    // {
    //     if (Auth::check()) {
    //         return redirect('/admin/home');
    //     }else {
    //        return redirect('/'); 
    //     }
    // }
}
