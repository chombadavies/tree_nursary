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
             
              
              <form action="{{route('variations.store')}}" method="post" enctype="multipart/form-data">@csrf
    
                <div class="card-body">
                    <div class="row">
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Variation Title</label>
                    <input type="text" name="name" class="form-control" id="" @error('name') is-invalid @enderror placeholder="Enter Category Name" required value="{{old('name')}}">
                    <span style="color: red" >{{$errors->first('name')}}</span>
                  
                
                  </div>
                 
                  <div class="form-group col-md-4">
                    <label for=""> Variation Price</label>
                    <input type="number" name="price" class="form-control" id="" @error('price') is-invalid @enderror required value="{{old('price')}}" placeholder="0.0">
                    <span style="color: red" >{{$errors->first('price')}}</span>
                
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Available stock</label>
                    <input type="number" name="stock_count" class="form-control" id="" @error('stock_count') is-invalid @enderror placeholder="Enter Category Name" required value="{{old('stock_count')}}">
                    <span style="color: red" >{{$errors->first('stock_count')}}</span>
                  
                
                  </div>
                </div>

               
 
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
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
@endpush
