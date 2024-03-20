
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
                      <div class="container">
                          <div><i>{{$valuechain->name}}</i></div> <br>
                        <p>{!!$valuechain->introduction!!}</p>
                        
                      </div>
                      <div class="container">
                        <p>{!!$valuechain->description!!}</p>
                      </div> 
                      
                        </div>

                        {{-- <span class="vl"></span> --}}
                         <div class="col-md-4">
                          <div class="container" style="margin-left: 44px">

                            <div>
                              <img src="{{asset('backend/uploads/'.$valuechain->image)}}" alt="" height >
                            </div>
                              <br>
                              {{-- @if ($valuechain->variations!== null) --}}
                              @if (!$valuechain->variations->isEmpty())
                              <div style="margin-left: 44px">
                                  <label for="variation">Select Variation to check new prices</label>
                                  <select name="variation" id="variation" class="form-control">
                                    <option selected disabled>Select Variation</option>
                                    @foreach ($valuechain->variations as $variation)
                                    <option value="{{$variation->id}}"  data-price="{{$variation->price}}" data-stock_count="{{$variation->stock_count}}">{{$variation->name}}</option>
                                    @endforeach
                                    
                                  </select>
                              </div>
                          @endif
                             
                              <div style="margin-left: 44px"><br>
                                <p style="color: #a37153" id="price"><b>KES.{{$valuechain->price}}</b></p>
                                <br>
                                <p  style="color: #3b6000" id="stock">{{$valuechain->stock_count}} in Stock</p>
                                <p><a href="{{route('contact_us')}}" style="background-color: #a37153;color:aliceblue" class="btn btn-large btn-block">Make Order</a>
                                </p>
                          
                              </div>
         <br>

         <br>
        

                            @if ($valuechain->materials->isNotEmpty())
                            <hr>
                  <input type="button" value="{{ $valuechain->name }} dissemination materials" class="btn btn-block" style="background-color: #3b6000; color: whitesmoke">
              @endif
                          
                            <br> <br>

                            @if ($valuechain->category->name == "Coffee Seedlings")

                            @foreach ($valuechain->materials as $material)
                             <div class="row">
                           <div class="col-md-6">
                             <a href ="{{asset($material->pdf)}}" download = "{{$material->title}}">
                             <img src="{{asset('frontend/img/Untitled.png')}}" alt="" height="40"></a>
                           </div>
                           <div class="col-md-6">
                             <a href ="{{asset($material->pdf)}}" download = "{{$material->title}}"> {{strtolower($material->title)}} </a> 
                             
                           </div>
                          
                         </div>
                         <hr>
                     
                     @endforeach
                         @else
                            
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
                        @endif
                           
                          </div>
                
                        </div>
                        </div>
                  </div>
                  <!-- /container -->
</div> <!-- end grid---->
  </section>

  <section class="" style="margin-top:0">

    <div class="container">

      <div class="section-title">
        <h2>More {{$valuechain->category->name}} </h2>
      </div>
                  <div class="content">
                      <div class="grid">
                        @foreach ($relatedValueChains as $relatedValuechain)
                     <a href="{{route('valuechain.details',$relatedValuechain->id)}}">  
                        <figure class="effect-sarah" style="border-radius: 20px">
                          
                          <img alt="logo" src="{{asset('backend/uploads/'.$relatedValuechain->image)}}" style="object-fit: cover"/>
                       
                              <figcaption>
                                  <h5>{{$relatedValuechain->name}}<span></span></h5>
  
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
@push('scripts')
<script>
  $(document).ready(function(){
      $('#variation').on('change', function(){
          var selectedOption = $(this).find('option:selected');
          var price = selectedOption.data('price');
      
          var stockCount = selectedOption.data('stock_count');

          $('#price').html('<b>KES.' + price + '</b>');
          $('#stock').text(stockCount + ' in Stock');
      });
  });
</script>
@endpush





