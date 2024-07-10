@extends('backend.admin-master')

@section('content')
<div class="container">
    <h1>{{ $work->title }}</h1>
    <p>{{ $work->description }}</p>
    <h2>Images</h2>
    <div class="row">
        @foreach($work->images as $image)
            <div class="col-md-3">
                <img src="{{ asset($image->file_path) }}" class="img-fluid" alt="{{ $image->file_name }}">
                <div>
                    <a href="{{ route('admin.work.image.edit', ['work_id' => $work->id, 'image_id' => $image->id]) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.work.image.delete', ['work_id' => $work->id, 'image_id' => $image->id]) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
