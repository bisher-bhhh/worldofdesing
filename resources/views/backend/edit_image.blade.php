@extends('backend.admin-master')

@section('content')
<div class="container">
    <h1>Edit Image</h1>
    <form action="{{ route('admin.work.image.update', ['work_id' => $image->project_id, 'image_id' => $image->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Update Image</button>
    </form>
</div>
@endsection
