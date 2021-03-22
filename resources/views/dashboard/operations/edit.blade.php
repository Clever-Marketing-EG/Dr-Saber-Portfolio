<x-app-layout>

    <h2>Editing</h2>
    @if($errors->any())
        <div class="alert alert-warning" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('operations.update', $operation) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="container">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Title:</label>
                    <input type="text" name="title" value="{{$operation->title}}" class="form-control" />
                </div>
                <div class="form-group col-md-6">
                    <label>Title (AR):</label>
                    <input type="text" name="title_ar" value="{{$operation->title_ar}}" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Content:</label>
                    <textarea type="text" name="content" class="form-control" rows="10">{{$operation->content}}</textarea>
                </div>
                <div class="form-group col-md-6">
                    <label>Content (AR):</label>
                    <textarea type="text" name="content_ar" class="form-control" rows="10">{{$operation->content_ar}}</textarea>
                </div>
                <div class="form-group col-md-6 mb-5">
                    <label>Video URL:</label>
                    <input type="text" name="video_url" class="form-control" value="{{$operation->video_url}}" />
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
    <div class="container position-relative">
        <div class="position-absolute top-0 end-0">
            <form method="POST" action="{{route('operations.images.upload', $operation)}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="operation_id" value="{{$operation->id}}" >
                <label for="image" class="btn btn-secondary">
                    Choose Image
                </label>
                <input id="image" type="file" name="image" style="display: none;">
                <button type="submit" class="btn btn-success">Upload</button>
            </form>
        </div>
        <br><br>
        <div class="row">
            @foreach($operation->images as $image)
                <div class="col-md-3 mb-3 position-relative">
                    <img src="{{$image->url}}" class="img-thumbnail" alt="..." style="height: 300px">
                    <form method="POST" action="{{route('operations.images.destroy', $image)}}" class="position-absolute bottom-0 end-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

</x-app-layout>
