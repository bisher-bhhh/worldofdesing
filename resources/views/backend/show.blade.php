@extends('backend.admin-master')

@section('content')
    <div class="container">
        <h1>{{ $work->title }}</h1>
        <p>{{ $work->description }}</p>
        <h2>Images</h2>
        <div class="row mb-3">
            <button class="btn btn-success" data-toggle="modal" data-target="#uploadImageModal">Add Image</button>
        </div>
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

    <!-- Upload Image Modal -->
    <div class="modal fade" id="uploadImageModal" tabindex="-1" role="dialog" aria-labelledby="uploadImageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('admin.work.image.store', $work->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="uploadImageModalLabel">Upload New Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" name="image" id="image" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection