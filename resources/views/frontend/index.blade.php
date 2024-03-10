@extends('layouts.frontend.homemaster')
@section('content')
      <!-- ======= Hero Section ======= -->
      <br>
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      {{-- <h1 style="text-transform: none">AgriFI Climate Smart Agricutural Productivity Project</h1> --}}
      <h2>Welcome to Green Trees' Nursery </h2>
      <a href="" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main why">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us why">
      <div class="container">

     

            <div class="icon-boxes d-flex justify-content-center">

              <div class="row justify-content-center">
                <div class="col-xl-3 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <a href="{{route('valuechains',1)}}">
                    <i class="bx bx-store-alt"></i>
                   <h4>Coffee Seedlings</h4></a>
                    
                  </div>
                </div>
               

                <div class="col-xl-3 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <a href="{{route('valuechains',2)}}">
                    <i class="bx bx-leaf"></i>
                    <h4>Trees Seedlings</h4></a>
                    
                  </div>
                </div>

                <div class="col-xl-3 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <a href="{{route('valuechains',3)}}">
                    <i class="bx bx-info-circle"></i>
                 <h4>Fruit Trees Seedlings</h4></a>
                    
                  </div>
                </div>

                <div class="col-xl-3 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <a href="{{route('contact_us')}}">
                    <i class="bx bx-phone-call"></i>
                    <h4>Contact Us</h4></a>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          
        </div>

    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
          
          </div>

          <div class="col-xl-6 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Popular Coffee Varieties</h3>

            @foreach ($coffee->valuechains as $variety)
            <a href="{{route('valuechain.details',$variety->id)}}">
            <h4>{{$variety->name}} </h4>
          </a>
            <p> {!!$variety->introduction!!} </p>     
            @endforeach

      <br>
      <div><a href="{{route('valuechains',$coffee->id)}}"><input type="button" value="Read More" class="btn btn-block "  style="background-color: #334739;color:aliceblue"></a></div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

 

    <!-- ======= Services Section ======= -->
    <div id="resources" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Seedling Categories</h2>
        </div>

        <div class="row">
         
        @foreach ($categories as $category)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">

          <div class="card" style="width: 100%;border:none">
            <a href="{{route('valuechains',$category->id)}}">
            <img class="card-img-top" src="{{asset('backend/uploads/'.$category->image)}}" alt="Card image cap" style="border-radius: 20px"></a>
            <br>
            <div class="card-body">
              <h5 class="card-title" style="color: black">{!!$category->name!!}</h5>
              {{-- <p class="card-text" style="text-align: justify">{{strip_tags(Str::limit($resource->introduction,$limit=250,$end='...'))}}</p> --}}
              <br>
              <a href="{{route('valuechains',$category->id)}}" class="btn btn-outline-success">Read More</a>
            </div>
          </div>
          
        </div>
        @endforeach
       
        </div>

      </div>
    </div><!-- End Services Section -->
<br>

  </main><!-- End #main -->
@endsection

<style>
 .meme{
  box-shadow: 
   1px 1px 10px 0px rgba(158,158,158),
   -5px 0px  rgb(158, 158, 158);
      border-radius: 12px; 
     }
     .card-title{
      color: aliceblue;
     }
</style>