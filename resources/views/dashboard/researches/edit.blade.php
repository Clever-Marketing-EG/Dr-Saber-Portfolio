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
    <form method="POST" action="{{ route('researches.update', $research) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="container">

            <div class="position-relative">
                <div style="height: 50px">
                <label for="image" class="btn btn-success position-absolute end-0 top-0">
                        Upload Images
                    </label>
                    <input id="image" type="file" name="images[]" style="display: none;" multiple>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                @for ($i = 0; $i<count($research['images']); $i++)
                <div class="position-relative" id="image-{{$i}}">
                    <img src="{{$research['images'][$i]}}" class="rounded m-2" alt="..." style="max-width: 300px;">
                    <input type="hidden" name="old_images[]" value="{{$research['images'][$i]}}">
                    <button id="{{$i}}" class="btn btn-danger position-absolute end-0 top-0 delete-button">Delete</button>
                </div>
                @endfor
            </div>


            <div class="row">
                <div class="form-group col-md-6">
                    <label>Title:</label>
                    <input type="text" name="title" value="{{$research->title}}" class="form-control" />
                </div>
                <div class="form-group col-md-6">
                    <label>Title (AR):</label>
                    <input type="text" name="title_ar" value="{{$research->title_ar}}" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Content:</label>
                    <textarea type="text" name="content" class="form-control" rows="10">{{$research->content}}</textarea>
                </div>
                <div class="form-group col-md-6">
                    <label>Content (AR):</label>
                    <textarea type="text" name="content_ar" class="form-control" rows="10">{{$research->content_ar}}</textarea>
                </div>
                <div class="form-group col-md-6 mb-5">
                    <label>Video URL:</label>
                    <input type="text" name="video_url" class="form-control" value="{{$research->video_url}}" />
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>

    <script>
        document.querySelectorAll('.delete-button').forEach(btn=> {
            btn.addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById(`image-${event.target.id}`).remove();
        })
        })
    </script>

</x-app-layout>
