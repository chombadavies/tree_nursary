<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Unified Technology Transfer Platform</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="{{asset('frontend/img/agriFilogo.png')}}" rel="icon">
    {{-- <link href="{{asset('frotend/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> --}}
  
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


    {{-- utmap --}}

     {{-- <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('utmap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('utmap/css/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('utmap/css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('utmap/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('utmap/css/nivo-slider.css')}}" rel="stylesheet">
  <link href="{{asset('utmap/css/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('utmap/css/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('utmap/css/faq.css')}}" rel="stylesheet">
  <!-- <link href="/Resource/https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->


  <!-- Template Main CSS File -->
  <link href="{{asset('utmap/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('utmap/css/partners.css')}}" rel="stylesheet"> --}}
  
   
  </head>
  
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
      <div class="container d-flex justify-content-between">
        <div class="contact-info d-flex align-items-center">
          <strong><i class="bi bi-envelope"></i> <a href="mailto:agrificsapp@kalro.org">agrificsapp@kalro.org</a></strong> <i class="bi bi-phone"></i> <a href="">+254 722 206986</a> </strong>
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
            {{-- <li><a class="nav-link scrollto active" href="{{route('home')}}">Home</a></li> --}}
            {{-- <li><a class="" href="{{route('about')}}">About</a></li> --}}
            <li class="dropdown"><a href=""><span>About</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
               
               
                {{-- <li><a class="nav-link" href="{{route('project_profile')}}" >Project Profile</a></li>
                <li><a class="nav-link" href="{{route('project_governance')}}" >Project Governance </a></li>
                <li><a class="nav-link" href="{{route('coapplicants')}}" >Co-Applicants </a></li> --}}
              </ul>
           </li>
          
           {{-- <li class="dropdown"><a href="#"><span>Research</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            @php
                $categories=App\Models\Category::all(); 
            @endphp
  
          @foreach($categories as $category)
          <li class="dropdown"><a href=""><span>{{ ucfirst($category->title) }}</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              @foreach ($category->models as $model)
              <li><a href="{{route('reseach_details',$model->id)}}">{{$model->alias}}</a></li>
              @endforeach
              </ul>
            </li>
            @endforeach
            </ul>
          </li> --}}
           
  
            <li class="dropdown"><a href="#"><span>Technology Transfer</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
  
                {{-- <li><a class="nav-link" href="{{route('partners')}}">Partner Profiles</a></li>
                <li><a class="nav-link" href="{{route('technology_models')}}">Technology and Commercialization</a></li>
                <li><a class="nav-link" href="{{route('achievements')}}">Achievements</a></li>
                <li><a class="nav-link" href="{{route('impact.areas')}}">Impact Stories </a></li> --}}
                 </ul>
           </li>
            
           {{-- <li><a class="nav-link" href="{{route('resources')}}">Resources</a></li>
            <li class="dropdown"><a href="{{route('valuechains')}}"><span>Value Chains</span> <i class="bi bi-chevron-down"></i></a> --}}
               <ul>
  
               {{-- @php
                   $valuechains=App\Models\ValueChain::all()
      
               @endphp
                    @foreach ($valuechains as $valuechain)
                         <li><a href="{{route('valuechain.details',$valuechain->id)}}">{{$valuechain->title}}</a></li>
                    @endforeach --}}
                   
                  
                  </ul>
            </li>
            {{-- <li><a class="nav-link" href="{{route('media')}}">Media</a></li>
            <li><a class="nav-link" href="{{route('dashboard')}}">Dashboard</a></li> --}}
            {{-- <li class="dropdown"><a href="{{route('dashboard')}}"><span>Dashboard</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a class="nav-link" href="">Results Dashboard</a></li>
                  <li><a class="nav-link" href="">Financial Dashboards</a></li>
                  <li><a class="nav-link" href="">Gender,Diversity Inclusion Dashboard</a></li>
                  
                 </ul>
           </li> --}}
  
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
        {{-- <a href="{{route('contact_us')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Contact Us</a> --}}
  
      </div>
    </header><!-- End Header -->