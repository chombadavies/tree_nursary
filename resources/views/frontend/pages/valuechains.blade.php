@extends('layouts.frontend.homemaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center" style="margin-top: 12px">
      
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
        
          <li><a href="#">{{$category->name}}</a></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section class="" style="margin-top:0">

    <div class="container">

      <div class="section-title">
        <h2>{{$category->name}} </h2>
      </div>
                  <div class="content">
                      <div class="grid">
                        @foreach ($category->valuechains as $valuechain)
                     <a href="{{route('valuechain.details',$valuechain->id)}}">  
                        <figure class="effect-sarah" style="border-radius: 20px">
                          
                          <img alt="logo" src="{{asset('backend/uploads/'.$valuechain->image)}}" style="object-fit: cover"/>
                       
                              <figcaption>
                                  <h5>{{$valuechain->name}}<span></span></h5>
                                  {{-- @php
                                      $limit=str_limit($valuechain->introduction,$limit=110,$end='...');
                                  @endphp

                                  <p>{!!$limit!!}</p> --}}
                                   
                              </figcaption>
                          </figure>
                           </a>
                        @endforeach
                     
                        </div>
                  </div>
                  <!-- /container -->
</div> <!-- end grid---->
  </section>

</main><!-- End #main -->
@endsection