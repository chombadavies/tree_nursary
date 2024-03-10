

@extends('layouts.frontend.homemaster')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center" style="margin-top: 12px">
     
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('valuechains',$valuechain->category->id)}}">{{$valuechain->category->name}}</a></li>
          <li><a href="">{{$valuechain->name}}</a></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section class="inner-page">
    <div class="container">

      <div class="section-title">
        <h2>{{$valuechain->name}}</h2>
      </div>
    <div class="grid">
    <div class="container">
                  <div class="content">
                      <div class="row">
                     
                     <div class="col-md-8">
                      <div style="display: flex;justify-content:center;border-radius: 12px;overflow:hidden">
                        <img src="{{asset('backend/uploads/'.$valuechain->details_image)}}" alt="" height="100%" width="100%"  style="border-radius: 12px;object-fit:fill">
                        {{-- <div><i>{{$valuechain->title}}</i></div> --}}
                      </div>
                      <br>

                    </div>
                    <div class="col-md-4">
                     
                      <div class="container">
                        <div>
                          <img src="{{asset('backend/uploads/'.$valuechain->image)}}" alt="" height >
                          <br>
                          <div>
                            <span class="badge bg-success block">Success</span>
                          </div>
                         
                        </div>
                        </div>
                    </div>

                  </div> 
                      <div class="row">
                        <div class="col-md-8">
                      <div class="container">
                          <div><i>{{$valuechain->name}}</i></div> <br>
                        <p>{!!$valuechain->introduction!!}</p>
                        
                      </div>
                      <div class="container">
                        <p>{!!$valuechain->description!!}</p>
                      </div> 
                      
                       
                    </div> 
                       
                         <div class="col-md-4">
                          <div class="container">
                            <input type="button" value="{{$valuechain->name }} dissemination materials" class="btn btn-block" style="background-color: #20b15e;color:whitesmoke">
                          
                            <br> <br>
                            




                      @foreach ($valuechain->materials as $material)
                      <a href ="{{asset($material->pdf)}}" download = "{{$material->title}}">
                           <div>
                        <img src="{{asset('frontend/img/Untitled.png')}}" alt="" height="80">
                      </div>
                      <div>
                        <a href ="{{asset($material->pdf)}}" download = "{{$material->title}}"> {{$material->title}} </a> 
                        
                      </div>
                    </a>
                      <hr>
                      <br>
                      @endforeach
                         
                           
                          </div>
                
                        </div>
                      </div>
                        </div>
                  </div>
                  <!-- /container -->
</div> <!-- end grid---->
  </section>



</main><!-- End #main -->
@endsection