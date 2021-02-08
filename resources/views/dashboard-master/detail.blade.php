@extends('dashboard-master.base')
@section('content')
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Berita</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="{{route('index')}}">Home</a><i class="fa fa-angle-double-right"></i><span>Detail Berita</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
        
            <div class="row">
                <div class="col-lg-12">
                @foreach($berita as $b)
                    <div class="text-container">
                        <h3>{{$b->title}}</h3>
                        <p>{{$b->berita}}</p>
                    </div> <!-- end of text-container -->
                @endforeach
                    <a class="btn-outline-reg back" href="{{route('index')}}">BACK</a>
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->
@endsection

   

    
    