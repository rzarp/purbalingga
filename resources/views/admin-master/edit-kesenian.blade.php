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

    <form action="{{ route('kesenian.update',['id' => $kesenian->id]) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @method('PUT')
        @csrf                                
    <div class="row">
<div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Berita</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>title</label>
                      <input type="text" name="title" class="form-control" placeholder="Title" required value="{{ $kesenian->title}}">
                        @error('title')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                   
                    <div class="form-group">
                        <label>Gambar</label>
                       
                          <div class="custom-file">
                            <input type="file" name="gambar" class="custom-file-input" id="site-favicon"  value="{{ $kesenian->gambar }}">
                            <label class="custom-file-label">Choose File</label>
                          </div>
                          <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                        @error('gambar')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label>Deskripsi</label>
                       <textarea class="form-control" name="deskripsi" required>{{ $kesenian->deskripsi }}</textarea>
                        @error('deskripsi')
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