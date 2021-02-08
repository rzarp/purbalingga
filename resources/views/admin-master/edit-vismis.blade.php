@extends('admin-master.base')
@section('content')
    <div class="section-header">
        <h1>Edit Berita</h1>        
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

    <form action="{{ route('vismis.update',['id' => $vismis->id]) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @method('PUT')
        @csrf                                
    <div class="row">
<div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Visi & Misi</h4>
                  </div>
                  <div class="card-body">
                    

                    <div class="form-group">
                      <label>Visi</label>
                       <textarea class="form-control" name="visi" required>{{ $vismis->visi }}</textarea>
                        @error('visi')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label>Misi</label>
                       <textarea class="form-control" name="misi" required>{{ $vismis->misi }}</textarea>
                        @error('misi')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button class="btn btn-danger" type="reset" value="Reset">Reset</button>
                        <button class="btn btn-primary" type="submit">Input</button>
                    </div>
                  </div>
                </div>
              </div>     
    </div>

    </form> 
@endsection