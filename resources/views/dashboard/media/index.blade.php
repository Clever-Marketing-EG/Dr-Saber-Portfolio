<x-app-layout>

    <h2>Media List</h2>
    <a href="{{ route('media.create') }}" class="btn btn-success">Add</a>
    <br>
    <br>
    @include('shared.flash')
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Title</th>
                <th>Title(AR)</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            @foreach($media as $medium)
                <tbody>
                <tr>
                    <td>{{ $medium->title }}</td>
                    <td>{{ $medium->title_ar }}</td>
                    <td><a class="btn btn-primary" href="{{ route('media.show', $medium) }}">Show</a></td>
                    <td><a href="{{ route('media.edit', $medium) }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('media.destroy', $medium) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                </tbody>
            @endforeach

        </table>
        {{ $media->links() }}

    </div>
</x-app-layout>
