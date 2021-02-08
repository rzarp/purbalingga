@extends('admin-master.base')
@section('content')
    <div class="section-header">
        <h1>Lihat Visi & Misi</h1>        
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
                            <th scope="col">Visi</th>
                            <th scope="col">Misi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($vismis as $vm)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $vm->visi}}</td>
                          <td>{{ $vm->misi}}</td>
                          <td>
                            <form action="{{ route('vismis.destroy',['id' => $vm->id]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <a href="{{ route('vismis.edit',['id' => $vm->id]) }}" class="btn btn-info btn-sm">Edit</a>
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