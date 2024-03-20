@extends('layouts.backend.main')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href="<?=route('valuechains.index')?>" class="btn btn-sm btn-info"><span class="fa fa-bars">View List </span></a>
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
             
              
              <form action="{{route('valuechains.store')}}" method="post" enctype="multipart/form-data">@csrf
    
                <div class="card-body">
                    <div class="row">
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Valuechain Name</label>
                    <input type="text" name="name" class="form-control" id="" @error('name') is-invalid @enderror placeholder="Enter Category Name" required value="{{old('name')}}">
                    <span style="color: red" >{{$errors->first('name')}}</span>
                  
                
                  </div>
                 
                  <div class="form-group col-md-3">
                    <label for="">Botanical Name</label>
                    <input type="text" name="botanical_name" class="form-control" id="" @error('botanical_name') is-invalid @enderror required value="{{old('botanical_name')}}">
                    <span style="color: red" >{{$errors->first('botanical_name')}}</span>
                
                  </div>

                  <div class="form-group col-md-3">
                    <label for="">Value Chain Category</label>
                  <select name="category_id" class="form-control">
                    <option selected disabled> Select Category</option>

                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                    <span style="color: red" >{{$errors->first('category_id')}}</span>
                
                  </div>

                  <div class="form-group col-md-3">
                    <label for="">Price</label>
                    <input type="number" name="price" class="form-control" id="" @error('price') is-invalid @enderror required value="{{old('price')}}">
                    <span style="color: red" >{{$errors->first('price')}}</span>
                
                  </div>
                </div>
                <div class="row">

                    <div class="form-group col-md-3">
                      <label for=""> introduction Image</label>
                      <input type="file" name="image" class="form-control" id="" @error('image') is-invalid @enderror required value="{{old('image')}}">
                      <span style="color: red" >{{$errors->first('image')}}</span>
                  
                    </div>
  
                    <div class="form-group col-md-3">
                      <label for=""> Description Image</label>
                      <input type="file" name="details_image" class="form-control" id="" @error('details_image') is-invalid @enderror required value="{{old('details_image')}}">
                      <span style="color: red" >{{$errors->first('details_image')}}</span>
                  
                    </div>
                    <div class="form-group col-md-3">
                      <label for=""> Variation eg Grafted/Non-grafted (Optional)</label>
                      <select name="variation_id[]" id="" class="form-control" multiple>
                        <option selected disabled>Select Variation</option>
                      @foreach ($variations as $variation)
                      <option value="{{$variation->id}}">{{$variation->name}}</option>
                          
                      @endforeach
                      </select>

                      <span style="color: red" >{{$errors->first('variation')}}</span>
                  
                    </div>

                    <div class="form-group col-md-3">
                      <label for="">Available Stock</label>
                      <input type="number" name="stock_count" class="form-control" id="" @error('stock_count') is-invalid @enderror required value="{{old('stock_count')}}">
                      <span style="color: red" >{{$errors->first('stock_count')}}</span>
                  
                    </div>
                  </div>

                 
                    <div class="row">
                        <div class="col-md-12" class="form-control">
                            <label for="">Value Chain introduction</label>
                            <textarea id="meme" name="introduction" >{{old('introduction')}}</textarea>
                        </div>
            
                     
                </div>
               

                
                    <div class="row">
                        <div class="col-md-12" class="form-control">
                            <label for="">Value Chain description</label>
                            <textarea id="tutu" name="description" >{{old(('description'))}}</textarea>
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

<script>
    $(document).ready(function() {
  $('#summernote').summernote();
  $('#tutu').summernote();
});
</script>
@endpush
