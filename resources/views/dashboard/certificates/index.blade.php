<x-app-layout>

    <h2>Certificates List</h2>
    <a href="{{ route('certificates.create') }}" class="btn btn-success">Add</a>
    <br>
    <br>
    @include('shared.flash')
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Title</th>
                <th>Title(AR)</th>
                <th>Image</th>
                <th>Upload</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            @foreach($certificates as $certificate)
                <tbody>
                <tr>
                    <form method="POST" action="{{route('certificates.update', $certificate)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <td>
                            <input name="title" value="{{$certificate->title}}" style="margin-top: 5rem;">
                        </td>
                        <td>
                            <input name="title_ar" value="{{$certificate->title}}" style="margin-top: 5rem;">
                        </td>
                        <td>
                            <img src="{{$certificate->image_url}}" alt="..." style="height: 200px; width: auto;" >
                        </td>
                        <td>
                            <input name="image" type="file" style="margin-top: 5rem;">
                        </td>
                        <td>
                            <button type="submit" class="btn btn-secondary" style="margin-top: 5rem;">Edit</button>
                        </td>
                    </form>
                    <td>
                        <form method="POST" action="{{ route('certificates.destroy', $certificate) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="margin-top: 5rem;">Delete</button>
                        </form>
                    </td>
                </tr>
                </tbody>
            @endforeach

        </table>

    </div>
</x-app-layout>
