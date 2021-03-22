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
    <form method="POST" action="{{ route('media.update', $medium) }}" >
        @csrf
        @method('PATCH')
        <div class="container">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Title:</label>
                    <input type="text" name="title" value="{{$medium->title}}" class="form-control" />
                </div>
                <div class="form-group col-md-6">
                    <label>Title (AR):</label>
                    <input type="text" name="title_ar" value="{{$medium->title_ar}}" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Content:</label>
                    <textarea type="text" name="content" class="form-control" rows="10">{{$medium->content}}</textarea>
                </div>
                <div class="form-group col-md-6">
                    <label>Content (AR):</label>
                    <textarea type="text" name="content_ar" class="form-control" rows="10">{{$medium->content_ar}}</textarea>
                </div>
                <div class="form-group col-md-6 mb-5">
                    <label>Video URL:</label>
                    <input type="text" name="video_url" class="form-control" value="{{$medium->video_url}}" />
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>

</x-app-layout>
