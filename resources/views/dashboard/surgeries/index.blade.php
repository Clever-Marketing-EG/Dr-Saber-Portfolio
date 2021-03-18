<x-app-layout>

    <h2>Section title</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Title(AR)</th>
                    <th>Actions</th>

                </tr>
            </thead>
            @foreach ($operations as $operation)
                <tbody>
                    <tr>
                        <td>{{ $operation->title }}</td>
                        <td>{{ $operation->title_ar }}</td>
                        <td><a class="btn btn-primary" href="{{ route('surgeries.show', $operation) }}">Show</a></td>
                        <td><a href="{{ route('articles.edit', $operation) }}" class="btn btn-secondary">Edit</a></td>
                        <td>
                            <form method="POST" action="{{ route('dashboard.delete') }}">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach

        </table>
    </div>
</x-app-layout>
