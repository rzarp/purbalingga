<?php

namespace App\Http\Controllers;

use App\Favorit;
use Illuminate\Http\Request;
use File;
use DB;

class FavoritController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin-master.input-favorit');
    }
     public function lihatfavorit()
    {
        $favorit = Favorit::all();
        return view ('admin-master.lihat-favorit',['favorit'=>$favorit]);
    }

    
    public function store(Request $request)
    {
       
        $request->validate ([
            'nama_tempat'   => 'required',
            'operasional'   => 'required',
            'alamat'        => ' ',
            'deskripsi'     => ' ', 
            'gambar'        => 'max:1000|file|image',
        ]);

        if($request->hasFile('gambar')) {
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = 'gambar-'.time().".".$extFile;
            $path = $request->gambar->move('img/uploads', $namaFile);
            DB::table('favorits')
                ->insert([
                    'nama_tempat'   => $request->nama_tempat,
                    'operasional'   => $request->operasional,
                    'alamat'        => $request->alamat,
                    'deskripsi'     => $request->deskripsi,
                    'gambar'        => $path,
                ]);
                
                return redirect(route('input.favorit'))->with('pesan','Data Berhasil ditambahkan');
                
                }
                
    }

    public function edit($id) {
        $favorit = Favorit::find($id);
        return view('admin-master.edit-favorit',['favorit'=>$favorit]);
    }

    public function update(Request $request, $id) 
    {
         if($request->hasFile('gambar')) {
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = 'gambar-'.time().".".$extFile;
            $path = $request->gambar->move('img/uploads', $namaFile);
            DB::table('favorits')
            ->where('id', $id)
            ->update([
                'nama_tempat' => $request->nama_tempat,
                'operasional' => $request->operasional,
                'alamat' => $request->alamat,
                'deskripsi' => $request->deskripsi,
                'gambar' => $path,
            ]);
        
           return redirect(route('lihat.favorit'))->with('pesan','Data Berhasil diupdate');
            }
    }

    
  
    public function destroy($id)
    {
        $favorit = DB::table('favorits')->where('id',$id)->first();
        if($favorit->gambar != 'img/uploads/noimage.png') {
            File::delete($favorit->gambar);
        }

        DB::table('favorits')->where('id',$id)->delete();

        return redirect(route('lihat.favorit'))->with('pesan','Data Berhasil dihapus!');
    }
}
