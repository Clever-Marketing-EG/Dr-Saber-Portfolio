<x-app-layout>

    <div  class="container mt-5">
        <br /><br /><br />
        <div  class="row">
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
        <div  class="container center">
            <img src={{ $article->images[0]->url}}  class="article-img" alt="" />

        </div>
    </div>

</x-app-layout>
