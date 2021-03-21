<x-app-layout>

    <h2>Scientific Publications List</h2>
    <a href="{{ route('researches.create') }}" class="btn btn-success">Add</a>
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
            @foreach ($researches as $research)
                <tbody>
                <tr>
                    <td>{{ $research->title }}</td>
                    <td>{{ $research->title_ar }}</td>
                    <td><a class="btn btn-primary" href="{{ route('researches.show', $research) }}">Show</a></td>
                    <td><a href="{{ route('researches.edit', $research) }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('researches.destroy', $research) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                </tbody>
            @endforeach

        </table>
        {{ $researches->links() }}

    </div>
</x-app-layout>
