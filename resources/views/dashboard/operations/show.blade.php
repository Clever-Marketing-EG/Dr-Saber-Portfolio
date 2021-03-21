<x-app-layout>

    <div  class="container mt-5">
        <img src="{{$operation->image_url}}" class="rounded mx-auto d-block" alt="..." style="max-height: 400px; width: auto">
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

    </div>

</x-app-layout>
