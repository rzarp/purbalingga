<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use File;
use DB;

class BeritaController extends Controller
{
   
   public function index()
    {
        return view ('admin-master.input-berita');
    }
     public function lihatberita()
    {
        $berita = Berita::all();
        return view ('admin-master.lihat-berita',['berita'=>$berita]);
    }

    
    public function store(Request $request)
    {
        $request->validate ([
            'title'         => 'required',
            'gambar'        => 'max:1000|file|image',
            'berita'        => ' ',
        ]);

        if($request->hasFile('gambar')) {
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = 'gambar-'.time().".".$extFile;
            $path = $request->gambar->move('img/berita', $namaFile);
            DB::table('beritas')
                ->insert([
                    'title'     => $request->title,
                    'gambar'    => $path,
                    'berita'    => $request->berita,
                ]);
                
                return redirect(route('input.berita'))->with('pesan','Data Berhasil ditambahkan');
                
                }
    }

    

    public function edit($id) {
        $berita = Berita::find($id);
        return view('admin-master.edit-berita',['berita'=>$berita]);
    }

    public function update(Request $request, $id) 
    {
        if($request->hasFile('gambar')) {
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = 'gambar-'.time().".".$extFile;
            $path = $request->gambar->move('img/berita', $namaFile);
            DB::table('beritas')
            ->where('id', $id)
            ->update([
                'title' => $request->title,
                'gambar' => $path,
                'berita' => $request->berita,

                
            ]);

        return redirect(route('lihat.berita'))->with('pesan','Data Berhasil diupdate');
        }
    }

    
  
    public function destroy($id)
    {
        $berita = DB::table('beritas')->where('id',$id)->first();
        if($berita->gambar != 'img/beritas/noimage.png') {
            File::delete($berita->gambar);
        }

        DB::table('beritas')->where('id',$id)->delete();

        return redirect(route('lihat.berita'))->with('pesan','Data Berhasil dihapus!');
    }
}
