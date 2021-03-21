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
    @include('shared.flash')
    <form method="POST" action="{{ route('articles.update', $article) }}">
        @csrf
        @method('PATCH')
        <div class="container">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Title:</label>
                    <input type="text" name="title" value="{{$article->title}}" class="form-control" />
                </div>
                <div class="form-group col-md-6">
                    <label>Title (AR):</label>
                    <input type="text" name="title_ar" value="{{$article->title_ar}}" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Content:</label>
                    <textarea type="text" name="content" class="form-control" rows="10">{{$article->content}}</textarea>
                </div>
                <div class="form-group col-md-6">
                    <label>Content (AR):</label>
                    <textarea type="text" name="content_ar" class="form-control" rows="10">{{$article->content_ar}}</textarea>
                </div>
                <div class="form-group col-md-6">
                    <label>Video URL:</label>
                    <input type="text" name="video_url" class="form-control" value="{{$article->video_url}}" />
                    <small class="form-text text-muted">Enter a valid YouTube video URL</small>
                </div>
                <div class="form-group col-md-6">
                    <label>Meta:</label>
                    <input type="text" name="meta" class="form-control" value="{{ str_replace('',',', str_replace(array('"','[',']'),'',$article->meta) )}}"/>
                    <small class="form-text text-muted">Enter Meta tags separated by commas ","</small>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>

        </div>
        <br />
    </form>
    <form method="POST" action="{{route('articles.images.upload')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="article_id" value="{{$article->id}}" >
        <label for="image" class="btn btn-secondary">
            Upload Image
        </label>
        <input id="image" type="file" name="image" style="display: none;">
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</x-app-layout>
