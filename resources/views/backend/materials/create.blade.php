@extends('layouts.backend.main')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href="<?=route('materials.index')?>" class="btn btn-sm btn-info"><span class="fa fa-bars">View List </span></a>
          
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
             
              
              <form action="{{ route('materials.store') }}" method="post" enctype="multipart/form-data">
                @csrf
            
                <div class="card-body">
                    <div class="row">
            
                        <div class="form-group col-md-6">
                            <label for="pdf">PDF file</label>
                            <input type="file" name="pdf[]" id="pdf" class="form-control" multiple >
                            <!-- Display errors for PDF input -->
                            @if ($errors->has('pdf.*'))
                                @foreach ($errors->get('pdf.*') as $error)
                                    <div class="alert alert-danger mt-2">{{ $error[0] }}</div>
                                @endforeach
                            @endif
                        </div>
            
                        <div class="form-group col-md-6">
                            <label for="valuechain_id">Value Chain Category</label>
                            <select name="valuechain_id" id="valuechain_id" class="form-control" >
                                <option disabled selected>Select Value Chain</option>
                                @foreach ($valuechains as $valuechain)
                                    <option value="{{ $valuechain->id }}">{{ $valuechain->name }}</option> 
                                @endforeach
                            </select>
                            <!-- Display errors for Value Chain Category input -->
                            @if ($errors->has('valuechain_id'))
                                <div class="alert alert-danger mt-2">{{ $errors->first('valuechain_id') }}</div>
                            @endif
                        </div>
            
                    </div>
                </div>
            
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
     $('#lfm').filemanager('file');
</script>
@endpush
