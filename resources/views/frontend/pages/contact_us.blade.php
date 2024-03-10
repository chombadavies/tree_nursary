
@extends('layouts.frontend.homemaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center dada" style="margin-top: 12px">
      {{-- <h1> AgriFI CS APP Co-aplicants</h1> --}}
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="">Contact us</a></li>
         
        </ol>
      </div>

    </div>

@include('layouts.notifications')

  </section><!-- End Breadcrumbs Section -->
  <section id="resources" class="services">
    <div class="container">
        <div class="section-title">
          <h2>Contact us</h2>
        </div>
      <div class="row" >

              <div class="row justify-content-center align-items-center" style="background-color:#f1f7fd;border-radius:24px" >
                        
                
                <div class="col-md-6">
                  <div class="row"> 
                        <h3 style="color: #20b15e">How can we help you?</h3>

                        <div class="info-author clearfix">
                          <div class="featured-author float-left">
                              <i class="fas fa-phone"></i>
                          </div>
                          <div class="contact-author">
                              <h5 style="color:#20b15e">Make an Order</h5>
                              <ul style="list-style: none">
                                  <li>Contact Line</li>
                                  <li>+254 722886497</li>
                                  <li>mjmware@gmail.com</li>
                              </ul>
                          </div>
                      </div>
                  </div>


                  <div class="row"> 
                    

                    <div class="info-author clearfix">
                      <div class="featured-author float-left">
                          <i class="fas fa-phone"></i>
                      </div>
                      <div class="contact-author">
                          <h5 style="color: #20b15e">Technical Clarification & After Sale Support</h5>
                          <ul style="list-style: none">
                              <li>Contact Line</li>
                              <li>+254 722886497</li>
                              <li>mjmware@gmail.com</li>
                          </ul>
                      </div>
                  </div>
              </div>
                       </div>
              

             
                       <div class="col-md-6">
                        <div class="row">
                      
                    <form action="{{route('feedback')}}" method="post">@csrf
     
        <div>
          <label for="">Name</label>
          <input type="text" name="name" class="form-control" placeholder="Name" required>
          <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
       <br>
       <div>
        <label for="">Phone Number</label>
        <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
        <span class="text-danger">{{ $errors->first('phone') }}</span>
      </div>
      <br>
        <div>
          <label for="">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Email" required>
          <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>
      <br>
      <div>
        {{-- <label for="">Message</label> --}}
       <textarea name="message" id="" cols="53"  rows="5" placeholder="Message" required></textarea> 
       <span class="text-danger">{{ $errors->first('message') }}</span>
      </div>
    <br>
      <div class="row">

        <button class="btn btn-block" style="background-color:#a37153;color:aliceblue">Send a Message</button>
         
        
      </div>
                    </form>
                       </div>
              </div>
              <br><br>
           

              </div>
              <br>
              <div></div>
        
            </div>
       
    </div>

    </div>
  </section><!-- End Services Section -->
</main><!-- End #main -->
@endsection