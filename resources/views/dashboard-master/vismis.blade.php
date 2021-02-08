@extends('dashboard-master.base')
@section('content')
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Visi & Misi</h1>
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
                        <a href="{{route('index')}}">Home</a><i class="fa fa-angle-double-right"></i><span>Visi & Misi</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
        @foreach($vismis as $v)
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h3>Visi</h3>
                        <p>{{$v->visi}}</p>
                    </div> <!-- end of text-container -->


                     <div class="text-container">
                        <h3>Misi</h3>
                        <ol class="li-space-lg">
                            <li>{{$v->misi}}</li>
                        </ol>
                    </div> <!-- end of text-container -->
                    
                    <a class="btn-outline-reg back" href="{{route('index')}}">BACK</a>
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        @endforeach
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->
@endsection

   

    
    