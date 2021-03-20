<x-app-layout>

    <h2>Add</h2>
    <form method="POST" action="{{ route('dashboard.articles.store') }}">
        @csrf
        @method('POST')
        <div class="container">
            <div class="row">
                @error('title')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
                <div class="form-group col-md-6">
                    <label>Title:</label>
                    <input type="text" name="title" class="form-control">
                </div>
                @error('title_ar')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
                <div class="form-group col-md-6">
                    <label>Title (AR):</label>
                    <input type="text" name="title_ar" class="form-control">
                </div>
                @error('title')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
                <div class="form-group col-md-12">
                    <label>Content:</label>
                    <input type="text" name="title" class="form-control">
                </div>
                @error('title_ar')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
                <div class="form-group col-md-12">
                    <label>Content (AR):</label>
                    <input type="text" name="title_ar" class="form-control">
                </div>

            </div>

        </div>
        <br />
        <button type="submit" class="btn btn-primary">Add</button>
    </form>

</x-app-layout>
