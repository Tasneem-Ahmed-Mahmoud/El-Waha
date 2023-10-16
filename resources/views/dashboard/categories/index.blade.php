@extends('./dashboard.layouts.master')

@section('content')
    
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Responsive Hover Table</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
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
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <img src="{{ asset('storage/images/categories/'.$category->image) }}" alt="" srcset="" style="width:100px;hieght:100px">
                    </td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <form action="{{ route('categories.destroy',$category->id) }}" method="post">
                        @csrf
                        @method('delete')

                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
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

      {{-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
        Launch Default Modal
      </button>
  --}}
{{-- 
      <div class="modal fade show" id="modal-default" style="display: block; padding-right: 15px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body…</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div> --}}
    </div>
  </div>
@endsection