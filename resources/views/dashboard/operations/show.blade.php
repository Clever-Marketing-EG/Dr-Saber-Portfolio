<x-app-layout>

    <div  class="container mt-5">
        <br /><br /><br />
        <div  class="row">
            <div  class="col-md-6">
                <h5>Operation Title:</h5>
                <h6>{{ $operation->title }}</h6>
                <h5>Operation Content:</h5>

                <h6>{{ $operation->content }}</h6>
            </div>
            <div  class="col-md-6">
                <h5>Operation Title(ar):</h5>

                <h6  class="title">{{ $operation->title_ar }}</h6>
                <h5>Operation Content [AR]:</h5>

                <h6  class="title">{{ $operation->content_ar }}</h6>


            </div>
        </div>

        <div class="row justify-content-around mt-5">
            @foreach($operation->images as $image)
                <div class="col-md-3 mb-3">
                    <img src="{{$image->url}}" class="img-thumbnail" alt="..." style="height: 300px">
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center align-items-center mt-5">
            <iframe width="560" height="315" src="{{$operation->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</x-app-layout>
