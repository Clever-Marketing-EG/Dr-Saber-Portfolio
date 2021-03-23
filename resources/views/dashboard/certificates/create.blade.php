<x-app-layout>

    <h2>Add a Certificate</h2>
    @if($errors->any())
        <div class="alert alert-warning" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('certificates.store') }}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="container">
            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label>Title:</label>
                    <input type="text" name="title" value="{{old('title')}}" class="form-control" required>
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label>Title (AR):</label>
                    <input type="text" name="title_ar" value="{{old('title_ar')}}" class="form-control" required>
                </div>
                <div class="form-group col-md-6 mb-3">
                    <input type="file" name="image">
                    <small class="form-text text-muted">Upload Certificate Image</small>
                </div>

            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>

</x-app-layout>
