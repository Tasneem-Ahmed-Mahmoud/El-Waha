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