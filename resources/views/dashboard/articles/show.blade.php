<x-app-layout>

    <div  class="container mt-5">
        <br /><br /><br />
        <div  class="row mb-5">
            <div  class="col-md-6">
                <h5>Article Title:</h5>
                <h6>{{ $article->title }}</h6>
                <h5>Article Content:</h5>

                <h6>{{ $article->content }}</h6>
            </div>
            <div  class="col-md-6">
                <h5>Article Title(ar):</h5>

                <h6  class="title">{{ $article->title_ar }}</h6>
                <h5>Article Content(ar):</h5>

                <h6  class="title">{{ $article->content_ar }}</h6>


            </div>
        </div>
        <div class="row">
            @foreach($article->images as $image)
                <div class="col-md-3 mb-3">
                    <img src="{{$image->url}}" class="img-thumbnail" alt="..." style="height: 300px">
                </div>
            @endforeach
        </div>
    </div>

</x-app-layout>
