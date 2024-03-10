@extends('layouts.backend.main')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href="<?=route('categories.index')?>" class="btn btn-sm btn-info"><span class="fa fa-bars">View List </span></a>
            <a href="" class="btn btn-sm btn-danger"><span class="fa fa-download"><span>Upload Data</a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

        
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> <small><?=$page_title?></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              
              <form action="{{route('valuechains.update',$valuechain->id)}}" method="post" enctype="multipart/form-data">@csrf
       @method('put')
                <div class="card-body">
                    <div class="row">
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Valuechain Name</label>
                    <input type="text" name="name" class="form-control" id="" @error('name') is-invalid @enderror placeholder="Enter Category Name" required value="{{$valuechain->name}}">
                    <span style="color: red" >{{$errors->first('name')}}</span>
                  
                
                  </div>
                 
                  <div class="form-group col-md-4">
                    <label for="">Botanical Name</label>
                    <input type="text" name="botanical_name" class="form-control" id="" @error('botanical_name') is-invalid @enderror required value="{{$valuechain->botanical_name}}">
                    <span style="color: red" >{{$errors->first('botanical_name')}}</span>
                
                  </div>

                  <div class="form-group col-md-4">
                    <label for="">Value Chain Category</label>
                  <select name="category_id" class="form-control">
                    <option selected disabled> Select Category</option>

                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{$valuechain->category_id==$category->id ? "selected":""}}>{{$category->name}}</option>


                    @endforeach
                  </select>
                    <span style="color: red" >{{$errors->first('category_id')}}</span>
                
                  </div>
                </div>
                <div class="row">

                    <div class="form-group col-md-6">
                      <label for=""> introduction Image</label>
                      <input type="file" name="image" class="form-control" id="" @error('image') is-invalid @enderror >
                      <span style="color: red" >{{$errors->first('image')}}</span>
                      <br>
                      <img src="{{asset('backend/uploads/'.$valuechain->image)}}" alt="" width="80" height="80">
                  
                    </div>
  
                    <div class="form-group col-md-6">
                      <label for=""> Description Image</label>
                      <input type="file" name="details_image" class="form-control" id="" @error('details_image') is-invalid @enderror >
                      <span style="color: red" >{{$errors->first('details_image')}}</span>
                      <br>
                      <img src="{{asset('backend/uploads/'.$valuechain->details_image)}}" alt="" height="80" width="80">
                    </div>
                  </div>

                 
                    <div class="row">
                        <div class="col-md-12" class="form-control">
                            <label for="">Value Chain introduction</label>
                            <textarea id="meme" name="introduction" >{{$valuechain->introduction}}</textarea>
                        </div>
            
                     
                </div>
               

                
                    <div class="row">
                        <div class="col-md-12" class="form-control">
                            <label for="">Value Chain description</label>
                            <textarea id="tutu" name="description" >{{$valuechain->description}}</textarea>
                        </div>
            
                                  
                </div>
                


 
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                </div>
              </form>
            </div>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
@push('scripts')
<script>
    $(document).ready(function() {
  $('#summernote').summernote();
  $('#meme').summernote();
});
</script>

<script>
    $(document).ready(function() {
  $('#summernote').summernote();
  $('#tutu').summernote();
});
</script>
@endpush
