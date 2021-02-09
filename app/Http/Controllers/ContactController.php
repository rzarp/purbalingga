<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use DB;

class ContactController extends Controller
{
    public function lihatcontact() {
        $contact = Contact::all();
        return view('admin-master.lihat-contact',['contact'=>$contact]);
    }
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect(route('lihat.contact'))->with('pesan','Data Berhasil dihapus!');
    }

    public function detail($id) {
        $contact['contact'] = DB::select('select * from contacts where id = ?', [$id]);
        return view('admin-master.detail-contact',$contact);
    }
}
