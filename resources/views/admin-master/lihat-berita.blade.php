@extends('admin-master.base')
@section('content')
    <div class="section-header">
        <h1>Lihat Berita</h1>        
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
                    <h4>Simple</h4>
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">Title</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Berita</th>
                            <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($berita as $b)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $b->title}}</td>
                          <td><img width="150px" src="{{ asset($b->gambar) }}"/></td>
                          <td>{{ $b->berita}}</td>
                          <td>
                            <form action="{{ route('berita.destroy',['id' => $b->id]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <a href="{{ route('berita.edit',['id' => $b->id]) }}" class="btn btn-info btn-sm">Edit</a>
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