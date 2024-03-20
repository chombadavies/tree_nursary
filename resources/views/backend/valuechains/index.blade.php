@extends('layouts.backend.main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
            @include('layouts.notifications')
              <?=$page_title?>
            </h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
             
            </ol>
          </div>
        </div>
      
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-12">

            <a href="<?=route('valuechains.create')?>" class="btn btn-sm btn-success" data-title="Add Item "><span class="fa fa-plus"><span> Add Seedling</a>

                                       
 </div>

          <div class="col-12">
               
           

            <div class="card">

          </div>
            <!-- /.card -->

            <div class="card2 card-success card-outline">
           
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                   <table id="SystemPermisions" class="table table-bordered table-striped table-info"  style="width: 100%;">
                  <thead class="table ">
                  <tr>
                    
                                        <th>Action</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th> Photo</th>
                                       <th>introduction</th>
                                       <th>desription</th>
                    </tr>
                  </thead>
                  <tbody>
                     
                  </tbody>
                </table>
                  
                </div>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection


@push("scripts")
<script>    
       $('#SystemPermisions').DataTable({
        processing: true,
        serverSide: true,
         pageLength:25,
         "lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
        "order": [[1, "desc" ]],
       
           ajax:'<?=route("fetch.valuechains")?>',
            columns: [
            {data: 'action', name: 'action',searchable:false,orderable:false},
           {data: 'name', name: 'name'},
           {data: 'category', name: 'category'},
           {data: 'image', name: 'image'},       
           {data: 'introduction', name: 'introduction'},
           {data: 'description', name: 'description'},
            ],


            dom: 'Bfrtip',

        buttons: [
         'pageLength',
        ],
        });
    </script>

@endpush
