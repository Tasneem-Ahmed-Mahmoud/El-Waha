@extends('./dashboard.layouts.master')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Responsive Hover Table</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input id="search" type="text" name="table_search" class="form-control float-right"
              placeholder="البحث بالاسم">


          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>#</th>
              <th>الاسم</th>
              <th>الصوره</th>
              <th>الوصف</th>
              <th>##</th>
            </tr>
          </thead>
          <tbody id="data">
            @foreach ($categories as $category)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $category->name }}</td>
              <td>
                <img src="{{ asset('storage/'.$category::PATH.$category->image) }}" alt="" srcset=""
                  style="width:100px;height:100px">
              </td>
              <td>{{ $category->description }}</td>
              <td class="d-flex  align-items-center">

                <a href="{{ route('categories.destroy',$category->id) }}" class="btn btn-danger ml-3"
                  data-confirm-delete="true">Delete</a>

                <a class="btn-primary btn" href="{{ route('categories.edit',$category->id) }}">Edit</a>
              </td>
            </tr>
            @endforeach



          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection

@section('script')


<script src="{{ asset('dashboard/assets/js/jQuery.js') }}"></script>

<script>
 
  console.log($('#data'))
$(document).on('keyup','#search',function(){
$value=$(this).val();
$.ajax({
type : 'get',
url : "{{URL::to('categories/search')}}",
data:{'search':$value},
success:function(data){
  $('#data').html(data);
}

});

});
</script>

@endsection