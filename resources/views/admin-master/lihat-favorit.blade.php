@extends('admin-master.base')
@section('content')
    <div class="section-header">
        <h1>Lihat Favorit</h1>        
    </div>

     @if (session()->has('pesan'))
    <div class="alert alert-success alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>×</span>
        </button>
        {{ session()->get('pesan') }}
    </div>
    </div>
    @endif

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Favorit</h4>
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">Nama Tempat</th>
                            <th scope="col">Operasional</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($favorit as $f)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{$f->nama_tempat}}</td>
                          <td>{{$f->operasional}}</td>
                          <td>{{$f->alamat}}</td>
                          <td>{{$f->deskripsi}}</td>
                          <td><img width="150px" src="{{ asset($f->gambar) }}"/></td>
                          
                          <td>
                            <form action="{{ route('favorit.destroy',['id' => $f->id]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <a href="{{ route('favorit.edit',['id' => $f->id]) }}" class="btn btn-info btn-sm">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
    </div>

    
@endsection