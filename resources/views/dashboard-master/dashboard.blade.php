@extends('dashboard-master.base')
@section('content')

<!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>Purbalingga <span id="js-rotating">Sejahtera, Harmonis, Aman, Tertib, Indah</span></h1>
                            <p class="p-heading p-large">Website kota Purbalingga</p>
                            <a class="btn-solid-lg page-scroll" href="#about">Let's Go</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

  <!-- Intro -->
    <div id="about" class="basic-1">
        <div class="container">
        @foreach($about as $t)
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">About</div>
                        <h2>{{$t->title}}</h2>
                        <p>{{$t->description}}</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <iframe width="560" height="315" src="{{$t->url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        {{-- <img class="img-fluid" src="dashboard/images/intro-office.jpg" alt="alternative"> --}}
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        @endforeach
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->



    <!-- Testimonials -->
    <div id="arts"> 
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Seni Dan Budaya</h2>
                    <p class="p-heading">Kabupaten Purbalingga</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
           
                <div class="col-lg-12">
                    <!-- Card Slider -->
                    <div class="slider-container">
                    
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                <!-- Slide -->
                                @foreach($kesenian as $k)
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{$k->gambar}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">{{$k->deskripsi}}</div>
                                            <div class="testimonial-author">{{$k->title}}</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                                 @endforeach
        
                               
                            
                            </div> <!-- end of swiper-wrapper -->
                            
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    
                    </div> <!-- end of sliedr-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    
    </div> <!-- end of slider -->
    </div>
    <!-- end of testimonials -->

  
    

 



    <!-- Projects -->
	<div id="favorit" class="filter">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">Tempat Favorit</div>
                    <h2>Kabupaten Purbalingga</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->
                    <div class="button-group filters-button-group">
                        <a class="button is-checked" data-filter="*"><span>SHOW ALL</span></a>
                        <a class="button" data-filter=".design"><span>DESIGN</span></a>
                        <a class="button" data-filter=".development"><span>DEVELOPMENT</span></a>
                        <a class="button" data-filter=".marketing"><span>MARKETING</span></a>
                        <a class="button" data-filter=".seo"><span>SEO</span></a>
                    </div> <!-- end of button group -->
                   
                    <div class="grid">
                        @foreach($favorit as $f)
                        <div class="element-item development">
                            <a  href="{{ route('favdetail',['id' => $f->id]) }}"><div class="element-item-overlay"><span>{{$f->nama_tempat}}</span></div><img src="{{$f->gambar}}" class="img-fluid" alt="alternative"></a>
                        </div>
                        @endforeach 
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
		</div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->


      <!-- Services -->
    <div id="news" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">Berita</div>
                    <h2>Kabupaten Purbalingga</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            
            <div class="row">
            @foreach($berita as $b)
                <div class="col-md-3">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="{{$b->gambar}}" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">{{$b->title}}</h6>
                            <p class="text-truncate">{{$b->berita}}</p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="{{ route('detail',['id' => $b->id]) }}">DETAILS</a>
                        </div> <!-- end of button-container -->                    
                    </div>  
                    <!-- end of card -->
                </div> <!-- end of col -->
            @endforeach
            </div> <!-- end of row -->
            
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->


    <!-- Contact -->
    <div id="contact" class="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2>Terimakasih Telah Berkunjung</h2>
                        
                        <p>Purbalingga</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i> Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kidul, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53147</li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+62 858 2613 0952</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:office@aria.com">@ittelkom-pwt.ac.id</a></li>
                        </ul>
                        <h3>Follow ITTelkom On Social Media</h3>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-facebook fa-stack-1x"></i>
                            </a>
                        </span>
                        
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
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
                    <!-- Contact Form -->
                    <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                     @csrf  
                        <div class="form-group">
                            <input type="text" name="name" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" name="message" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                       
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->   
@endsection