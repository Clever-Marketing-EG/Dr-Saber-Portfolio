<x-app-layout>

    <h2>Operations List</h2>
    <a href="{{ route('operations.create') }}" class="btn btn-success">Add</a>
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
            @foreach ($operations as $operation)
                <tbody>
                    <tr>
                        <td>{{ $operation->title }}</td>
                        <td>{{ $operation->title_ar }}</td>
                        <td><a class="btn btn-primary" href="{{ route('operations.show', $operation) }}">Show</a></td>
                        <td><a href="{{ route('operations.edit', $operation) }}" class="btn btn-secondary">Edit</a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('operations.destroy', $operation) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach

        </table>
        {{ $operations->links() }}

    </div>
</x-app-layout>
