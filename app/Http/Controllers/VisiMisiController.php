<?php

namespace App\Http\Controllers;

use App\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{

    public function index() {
        return view('admin-master.input-vismis');
    }
    public function lihatvismis() {
        $vismis = VisiMisi::all();
        return view('admin-master.lihat-vismis',['vismis'=>$vismis]);
    }


    public function store(Request $request)
    {
         $request->validate ([
            'visi'         => 'required:visi_misis',
            'misi'           => 'required',
            
        ]);

        $vismis = new VisiMisi();
        $vismis->visi = $request->visi;
        $vismis->misi = $request->misi;
        $vismis->save();

        return redirect(route('input.vismis'))->with('pesan','Data Berhasil ditambahkan');

    }
 
    public function edit($id)
    {
        $vismis = VisiMisi::find($id);
        return view('admin-master.edit-vismis',['vismis'=>$vismis]);
    }

    
    public function update(Request $request, $id)
    {
        $request->validate ([
            'visi'  => 'required:visi_misis',
            'misi'  => 'required',
            
        ]);

        $vismis = VisiMisi::find($id);
        $vismis->visi = $request->visi;
        $vismis->misi = $request->misi;
        $vismis->save();

        return redirect(route('lihat.vismis'))->with('pesan','Data Berhasil diupdate');
    }

   
    public function destroy($id)
    {
        $vismis = VisiMisi::find($id);
        $vismis->delete();

        return redirect(route('lihat.vismis'))->with('pesan','Data Berhasil dihapus!');
    }
}