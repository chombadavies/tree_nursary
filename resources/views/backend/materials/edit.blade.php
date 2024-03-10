<div class="col-md-12">
    <!-- jquery validation -->
    <div class="card card-info">
      <div class="card-header">
      
      </div>
      <!-- /.card-header -->
      <!-- form start -->
     
      
      <form action="{{route('materials.update',$material->id)}}" method="post" enctype="multipart/form-data">@csrf

        @method('put')

        <div class="card-body">
            <div class="row">

          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">PDF File Nane</label>
          <input type="text" name="title" id="" class="form-control" value="{{$material->title}}">
          </div>
          <div class="form-group col-md-6">
            <label for="">Value Chain Category</label>
          <select name="value_chain_id" class="form-control" required>

            <option selected disabled>Select Value Chain</option>

            @foreach ($valuechains as $valuechain)
            <option value="{{$valuechain->id}}" {{$material->value_chain_id==$valuechain->id?'selected':''}}>{{$valuechain->title}}</option> 
            @endforeach

          </select>
          </div>
        </div>
  
        <div class="card-footer">
          <button type="submit" class="btn btn-info">Update</button>
        </div>
      </form>
    </div>
    </div>
    <!-- /.card -->
    </div>
  <!--/.col (left) -->