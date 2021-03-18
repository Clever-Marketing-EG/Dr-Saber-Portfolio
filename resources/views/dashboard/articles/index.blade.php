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
            @foreach ($articles as $article)
                <tbody>
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->title_ar }}</td>
                        <td><a class="btn btn-primary" href="{{ route('dashboard.show', $article) }}">Show</a></td>
                        <td><a href="{{ route('articles.edit', $article) }}" class="btn btn-secondary">Edit</a></td>
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
