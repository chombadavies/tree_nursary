<div class="row">
                      
    <form action="{{route('feedback')}}" method="post">@csrf
<div class="row">
<div class="col-md-6">
<label for="">Name</label>
<input type="text" name="name" class="form-control" placeholder="Name" required>
<span class="text-danger">{{ $errors->first('name') }}</span>
</div>
<br>
<div class="col-md-6">
<label for="">Phone Number</label>
<input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
<span class="text-danger">{{ $errors->first('phone') }}</span>
</div>
</div>
<br>
<div class="row">
<div class="col-md-6">
@php
$categories=App\Models\Category::all();
@endphp
<label for="">Select Category</label>
<select name="category" id="category" class="form-control">
@foreach ($categories as $category)
<option value="{{$category->id}}">{{$category->name}}</option>
@endforeach

</select>
</div>
<br>
<div class="col-md-6">
<label for="">Seedling Variety</label>
<select name="valuechain" id="valuechain" class="form-control" required>
{{-- <option value="" selected disabled>Select Agent</option> --}}

</select>
</div>
</div>
{{-- <div class="row">
<div class="col-md-6"></div>
<div class="col-md-6"></div>
</div> --}}
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


       @push("scripts")

       <script>
       
         $("#category").on("change",function(e){
              e.preventDefault();
              
               var id=$(this).val();
               alert(id);
                 if(id.length>0)
                 {
                     var url="<?=url('category/valuechain')?>/"+id;
                     
                      $.get(url,function(data){
                      
                          $("#valuechain").html(data);
                      })
                 }
       
          });
         
          </script>
       
          @endpush



