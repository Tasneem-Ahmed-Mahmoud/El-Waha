@extends('./dashboard.layouts.master')

@section('content')
    

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">اضافة صنف</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST"   action="{{ route('categories.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">الاسم</label>
                        <input type="text" class="form-control" id="name" placeholder="الاسم" name="name" value="{{ old('name')? old('name'):'' }}">
                        @error('name')
                           <small class="text-danger">{{ $message }}</small> 
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">الوصف</label>
                        <textarea id="description" class="form-control" placeholder="الوصف"  name="description">{{ old('description')? old('description'):'' }}</textarea>
                        @error('description')
                        <small class="text-danger">{{ $message }}</small> 
                     @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">الصوره</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">اختار ملف</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">رفع</span>
                            </div>

                        </div>
                        @error('image')
                        <small class="text-danger">{{ $message }}</small> 
                     @enderror
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>
        </div>






  
@endsection
