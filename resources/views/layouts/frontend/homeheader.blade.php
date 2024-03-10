<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Green Trees Nursery</title>
  <meta content="agrifi" name="agrifi">
  <meta content="agrificsapp" name="agrificsapp">
  <meta content="agrificsapp kalro" name="agrificsapp kalro">
  <meta content="kalro" name="kalro">

  <!-- Favicons -->
  
 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

  

  {{-- <link href="{{asset('frontend/css/stylen.css')}}" rel="stylesheet"> --}}
  
</head>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <strong><i class="bi bi-envelope"></i> <a href="mailto:agrificsapp@kalro.org">agrificsapp@kalro.org</a></strong> <strong></strong><i class="bi bi-phone"></i> <a href="+254722206986">+254 722 206986</a> </strong>
      </div>
      <div class="d-none d-lg-flex contact-info align-items-center ">
        {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> --}}

        <div><a href="https://www.kaop.co.ke/" target="blank"><i class="fas fa-sun"></i> Climate Information</a></div>
      <div style="padding-left: 12px"><a href="https://amis.co.ke/" target="blank"><i class="bi bi-cart"></i> Market Information</a></div>
     
      </div>
    </div>
  </div>

 
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      {{-- <h1 class="logo me-auto"><a href="{{route('home')}}"><img alt="logo" src="{{asset('frontend/img/agriFilogo.png')}}" > </a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{route('home')}}" class="logo me-auto"><img src="{{asset('frontend/img/agrifi-csapp-logo.png')}}" alt="" class="" height="70"></a>
    
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>

          @php
              $categories=App\Models\Category::all()
          @endphp

          @foreach ($categories as $category)
          <li class="dropdown"><a href="{{route('valuechains',$category->id)}}"><span>{{$category->name}} </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
             @foreach ($category->valuechains as $variety)
                   <li><a class="nav-link" href="{{route('valuechain.details',$variety->id)}}" >{{$variety->name}}</a></li>
             @endforeach
  
            </ul>
         </li>
          @endforeach
         
       </li>
         <li><a class="nav-link" href="{{route('contact_us')}}">Contact Us</a></li>
        
      
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        
      </nav>
      <!-- .navbar -->

     
        

      {{-- <a href="{{route('contact_us')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Contact Us</a> --}}

    </div>
  </header><!-- End Header -->