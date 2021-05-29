<x-app-layout>

    <div  class="container mt-5">
        @foreach ($research['images'] as $image)
            <img src="{{$image}}" class="rouded m-2" alt="..." style="max-width: 300px">
        @endforeach
        <br /><br /><br />
        <div  class="row">
            <div  class="col-md-6">
                <h5>Research Title:</h5>
                <h6>{{ $research->title }}</h6>
                <h5>Research Content:</h5>

                <h6>{{ $research->content }}</h6>
            </div>
            <div  class="col-md-6">
                <h5>Research Title(ar):</h5>

                <h6  class="title">{{ $research->title_ar }}</h6>
                <h5>Research Content [AR]:</h5>

                <h6  class="title">{{ $research->content_ar }}</h6>

            </div>

            @if(isset($research['video_url']))
            <iframe width="auto" height="500px" src="{{$research['video_url']}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ></iframe>
            @endif
        </div>

    </div>

</x-app-layout>
