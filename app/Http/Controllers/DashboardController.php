<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Favorit;
use App\Berita;
use App\Kesenian;
use App\VisiMisi;
use App\Contact;
use DB;



class DashboardController extends Controller
{
    public function index() {
        return view('admin-master.dashboard');
    }
    
    public function dashboard() {
        $data['about']  = About::all();
        $data['favorit'] = Favorit::all();
        $data['berita'] = Berita::all();
        $data['kesenian'] = Kesenian::all();
        $data['favorit'] = Favorit::all();

        return view('dashboard-master.dashboard',$data);
    }

    public function vismis() {
        $data['vismis'] = VisiMisi::all();
        $data['about']  = About::all();
        return view('dashboard-master.vismis',$data);
    }

    public function detail($id) {
        
        $data['berita'] = DB::select('select * from beritas where id = ?', [$id]);
        $data['about']  = About::all();
        return view('dashboard-master.detail',$data);
    }

     public function favdetail($id) {
        
        $data['favorit'] = DB::select('select * from favorits where id = ?', [$id]);
        $data['about']  = About::all();
        return view('dashboard-master.favdetail',$data);
    }

    public function contact(Request $request) {
        $request->validate ([
            'name'      => 'required:contacts',
            'email'     => 'required',
            'message'   => ' ',
        ]);

        $contact = new Contact();
        $contact->name      = $request->name;
        $contact->email     = $request->email;
        $contact->message   = $request->message;
        $contact->save();

        return redirect(route('index'))->with('pesan','Pesan Berhasil dikirim');
    }
    
    
}
