<x-app-layout>

    <h2>Add</h2>
    @if($errors->any())
        <div class="alert alert-warning" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('operations.store') }}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="container">
            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label>Title:</label>
                    <input type="text" name="title" value="{{old('title')}}" class="form-control" />
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label>Title (AR):</label>
                    <input type="text" name="title_ar" value="{{old('title_ar')}}" class="form-control">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label>Content:</label>
                    <textarea type="text" name="content" class="form-control" rows="10">{{old('content')}}</textarea>
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label>Content (AR):</label>
                    <textarea type="text" name="content_ar" class="form-control" rows="10">{{old('content_ar')}}</textarea>
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label>Video URL:</label>
                    <input type="text" name="video_url" class="form-control" value="{{old('video_url')}}" />
                    <small class="form-text text-muted">Enter a valid YouTube video URL</small>
                </div>
                <div class="form-group col-md-6 mb-3 mt-4">
                    <label for="image" class="btn btn-secondary">
                        Upload Image
                    </label>
                    <input id="image" type="file" name="image" style="display: none;">
                </div>

            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>

</x-app-layout>
