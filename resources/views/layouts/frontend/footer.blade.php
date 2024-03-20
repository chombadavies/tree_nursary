<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
    
          <div class="col-lg-4 col-md-6 footer-contact">
            <h3> <i class="ti-home"></i> Contacts</h3>
            Karatina-Kerugoya Highway, Kabonge, Kirinyaga County<br>
            P.O. Box 000-0000, Kerugoya<br>
            <strong> <i class="ti-email"></i>Email:</strong>mjmware@gmail.com<br>
          
            <p>

          </div>
    
       

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Useful Links</h3>
            <ul style="text-decoration: none">
              {{-- <li> <a href="{{route('project_profile')}}" style="color:white">About Us</a></li>
              <li><a href="{{route('contact_us')}}" style="color:white">Contact Us</a></li>
              <li> <a href="{{route('partners')}}" style="color:white">Partners</a></li>
              <li><a href="{{route('coapplicants')}}" style="color:white">Co-Applicants</a></li> --}}
    
            </ul>
          </div>
    
         
          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Seedling Categories</h3>
            <ul>
                  @php
                      $categories=App\Models\Category::all();
                  @endphp

              @foreach ($categories as $category)
              <li style="text-decoration: none" > <a href="{{route('valuechains',$category->id)}}" style="color:white">{{$category->name}}</a></li> 
              @endforeach
           
            </ul>
          </div>
      
     
    
        </div>
      </div>
    </div>
    
    <div class="container d-md-flex py-4">
    
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          {{-- ©  --}}
          {{-- &copy;<script>document.write(new Date().getFullYear())</script>  <strong><span>KALRO AgriFI</span></strong>. All Rights Reserved . Designed by <a href="https://www.kalro.org/">KALRO ICT</a> --}}

          &copy;<script>document.write(new Date().getFullYear())</script>  <strong><span>Prof Mugo Mware Botnical Tree Nursery</span></strong>. All Rights Reserved.
        </div>

    
    
       
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="" class="twitter" target="blank"><i class="bx bxl-twitter"></i></a>
        <a href="" class="facebook" target="blank"><i class="bx bxl-facebook"></i></a>
        {{-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
      </div>
    </div>
    </footer><!-- End Footer -->
    
    
    
    <div id="preloader"></div>
      {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}
    
      <!-- Vendor JS Files -->
      <script src="{{asset('frontend/vendor/purecounter/purecounter_vanilla.js')}}"></script>
      <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
      <script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
      <script src="{{asset('frontend/vendor/php-email-form/validate.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    



  <!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/64e355ddcc26a871b030799f/1h8c0equl';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script> --}}
  <!--End of Tawk.to Script-->
  <!--End of Tawk.to Script-->
	 
      @yield('scripts')
      <!-- Template Main JS File -->
      <script src="{{asset('frontend/js/main.js')}}"></script>
      

      <script src="{{asset('frontend/jss/js/common_scripts.min.js')}}"></script>
      <script src="{{asset('frontend/jss/js/main.js')}}"></script>
    
    <!-- SPECIFIC SCRIPTS -->
    <script src="{{asset('frontend/jss/js/carousel-home.min.js')}}"></script>
    {{-- media --}}
    <script src="{{asset('frontend/media/js/main.js')}}"></script>
    <script src="{{asset('frontend/media/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('frontend/media/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/media/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/media/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/media/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/media/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/media/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('frontend/media/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('frontend/media/vendor/php-email-form/validate.js')}}"></script>

  @include('layouts.backend.rejectmodal')
  
  <script type="text/javascript">
   
    $(document).on('click','.reject-modal',function(){
  
     var head=$(this).attr('data-title');
            
         var url=$(this).attr("data-url");
          $("#load-category-details").html("");
          $("#my-header").html(" ");
          $("#my-header").html(head);
          $("#category-modal").modal("show");
      $("#load-category-details").load(url,function(data){
      $("#category-modal").modal("show");
       
    });
  });
  </script>

  <script>
    setTimeout(function(){
    $('#alert').slideUp();
      },3000)
     </script>


  {{-- charts --}}

  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <script src="https://code.highcharts.com/modules/drilldown.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
