<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function inputabout() {
        return view('admin-master.input-about');
    }
    public function lihatabout() {
        $about = About::all();
        return view('admin-master.lihat-about',['about'=>$about]);
    }


    public function store(Request $request)
    {
         $request->validate ([
            'title'         => 'required:abouts',
            'url'           => 'required',
            'description'   => ' ',
        ]);

        $about = new About();
        $about->title = $request->title;
        $about->url = $request->url;
        $about->description = $request->description;
        $about->save();

        return redirect(route('input.about'))->with('pesan','Data Berhasil ditambahkan');

    }
 
    public function edit($id)
    {
        $about = About::find($id);
        return view('admin-master.edit-about',['about'=>$about]);
    }

    
    public function update(Request $request, $id)
    {
        $request->validate ([
            'title'         => 'required:abouts',
            'url'           => 'required',
            'description'   => ' ',
        ]);

        $about = About::find($id);
        $about->title       = $request->title;
        $about->url         = $request->url;
        $about->description = $request->description;
        $about->save();

        return redirect(route('lihat.about'))->with('pesan','Data Berhasil diupdate');
    }

   
    public function destroy($id)
    {
        $about = About::find($id);
        $about->delete();

        return redirect(route('lihat.about'))->with('pesan','Data Berhasil dihapus!');
    }
}
