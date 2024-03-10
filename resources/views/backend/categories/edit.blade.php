<div class="card card-info">
    <div class="card-header">
      <h3 class="card-title"> <small><?=$page_title?></small></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
   
    
    <form action="{{route('categories.update',$category->id)}}" method="post" enctype="multipart/form-data">@csrf
        @method('put')

      <div class="card-body">
          <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Category Title</label>
          <input type="text" name="name" class="form-control" id="" @error('name') is-invalid @enderror placeholder="Enter Category Name" required value="{{$category->name}}">
          <span style="color: red" >{{$errors->first('name')}}</span>
        
      
        </div>
       
        <div class="form-group col-md-6">
          <label for=""> Research Model Category</label>
          <input type="file" name="image" class="form-control" id="" @error('image') is-invalid @enderror  value="{{$category->image}}">
          <span style="color: red" >{{$errors->first('image')}}</span>
          <br>
      <img src="{{asset('backend/uploads/'.$category->image)}}" alt="" height="50" width="50" style="border-radius: 4px">
        </div>
      </div>
     

      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-info">Update</button>
      </div>
    </form>
  </div>