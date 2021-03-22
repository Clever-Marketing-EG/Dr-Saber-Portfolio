<x-app-layout>

    <div  class="container mt-5">
        <iframe width="560" height="315" src="{{$medium->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br /><br /><br />
        <div  class="row">
            <div  class="col-md-6">
                <h5>Medium Title:</h5>
                <h6>{{ $medium->title }}</h6>
                <h5>Medium Content:</h5>

                <h6>{{ $medium->content }}</h6>
            </div>
            <div  class="col-md-6">
                <h5>Medium Title(ar):</h5>

                <h6  class="title">{{ $medium->title_ar }}</h6>
                <h5>Medium Content [AR]:</h5>

                <h6 class="title">{{ $medium->content_ar }}</h6>

            </div>
        </div>

    </div>

</x-app-layout>
