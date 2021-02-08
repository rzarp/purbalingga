<?php

namespace App\Http\Controllers;

use App\Kesenian;
use Illuminate\Http\Request;
use DB;
use File;

class KesenianController extends Controller
{
   
   public function index()
    {
        return view ('admin-master.input-kesenian');
    }
     public function lihatkesenian()
    {
        $kesenian = Kesenian::all();
        return view ('admin-master.lihat-kesenian',['kesenian'=>$kesenian]);
    }

    
    public function store(Request $request)
    {
        $request->validate ([
            'title'             => 'required',
            'gambar'            => 'max:1000|file|image',
            'deskripsi'         => ' ',
        ]);

        if($request->hasFile('gambar')) {
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = 'gambar-'.time().".".$extFile;
            $path = $request->gambar->move('img/kesenian', $namaFile);
            DB::table('kesenians')
                ->insert([
                    'title'         => $request->title,
                    'gambar'        => $path,
                    'deskripsi'     => $request->deskripsi,
                ]);
                
                return redirect(route('input.kesenian'))->with('pesan','Data Berhasil ditambahkan');
                
                }
    }

    

    public function edit($id) {
        $kesenian = Kesenian::find($id);
        return view('admin-master.edit-kesenian',['kesenian'=>$kesenian]);
    }

    public function update(Request $request, $id) 
    {
         if($request->hasFile('gambar')) {
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = 'gambar-'.time().".".$extFile;
            $path = $request->gambar->move('img/kesenians', $namaFile);
            DB::table('kesenians')
            ->where('id', $id)
            ->update([
                'title' => $request->title,
                'gambar' => $path,
                'deskripsi' => $request->deskripsi,
            ]);
        
           return redirect(route('lihat.kesenian'))->with('pesan','Data Berhasil diupdate');
            }
    }

    
  
    public function destroy($id)
    {
        $kesenian = DB::table('kesenians')->where('id',$id)->first();
        if($kesenian->gambar != 'img/kesenians/noimage.png') {
            File::delete($kesenian->gambar);
        }

        DB::table('kesenians')->where('id',$id)->delete();

        return redirect(route('lihat.kesenian'))->with('pesan','Data Berhasil dihapus!');
    }
}

