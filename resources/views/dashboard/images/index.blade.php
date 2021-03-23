<x-app-layout>
    <h2>Images</h2>
    @include('shared.flash')
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Position</th>
                <th>View</th>
                <th>Choose Image</th>
                <th>Confirm</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($images as $image)
                <tr>
                    <form method="POST" action="{{route('images.update', $image)}}" enctype="multipart/form-data">
                    <td>{{$image->name}}</td>
                    <td>
                        <img src="{{$image->url}}" alt="..." style="height: 300px; width: auto;" >
                    </td>
                        @csrf
                        @method('PATCH')

                        <td>
                            <input type="file" name="image" class="mt-5">
                        </td>
                        <td>
                            <button type="submit" class="btn btn-success mt-5">Upload</button>
                        </td>
                    </form>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
