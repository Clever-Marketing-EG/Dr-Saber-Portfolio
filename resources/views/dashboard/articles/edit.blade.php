<x-app-layout>

    <h2>Edit</h2>
    <form method="POST" action="{{ route('dashboard.update', $article) }}">
        @csrf
        @method('PATCH')
        <div class="container">
            <div class="row">
                @error('title')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
                <div class="form-group col-md-6">
                    <label>Title:</label>
                    <input type="text" name="title" class="form-control" value="{{ $article->title }}"
                        placeholder="{{ $article->title }}">
                </div>
                @error('title_ar')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
                <div class="form-group col-md-6">
                    <label>Title (AR):</label>
                    <input type="text" name="title_ar" class="form-control" value="{{ $article->title_ar }}"
                        placeholder="{{ $article->title_ar }}">
                </div>
                <div class="form-group col-md-12">
                    <label>Content:</label>
                    <input type="text" name="name" class="form-control" value="{{ $article->content }}"
                        placeholder="{{ $article->content }}">
                </div>
                <div class="form-group col-md-12">
                    <label>Content (AR):</label>
                    <input type="text" name="name" class="form-control" value="{{ $article->content_ar }}"
                        placeholder="{{ $article->content_ar }}">
                </div>
            </div>

        </div>
        <br />
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>

</x-app-layout>
