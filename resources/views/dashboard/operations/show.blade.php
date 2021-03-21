<x-app-layout>

    <div  class="container mt-5">
        <br /><br /><br />
        <div  class="row">
            <div  class="col-md-6">
                <h5>Article Title:</h5>
                <h6>{{ $operation->title }}</h6>
                <h5>Article Content:</h5>

                <h6>{{ $operation->content }}</h6>
            </div>
            <div  class="col-md-6">
                <h5>Article Title(ar):</h5>

                <h6  class="title">{{ $operation->title_ar }}</h6>
                <h5>Article Content(ar):</h5>

                <h6  class="title">{{ $operation->content_ar }}</h6>


            </div>
        </div>
 
    </div>

</x-app-layout>
