<x-app-layout>

    <div  class="container mt-5">
        <img src="{{$research->image_url}}" class="rounded mx-auto d-block" alt="..." style="max-height: 400px; width: auto">
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
        </div>

    </div>

</x-app-layout>
