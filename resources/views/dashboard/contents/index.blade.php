<x-app-layout>
    <h2>Contents</h2>
    @include('shared.flash')
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Position</th>
                <th>Content</th>
                <th>Arabic Content</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($contents as $content)
                <tr>
                    <td>
                        {{$content->position}}
                    </td>
                    <form method="POST" action="{{route('contents.update', $content)}}">
                        @csrf
                        @method('PATCH')
                        <td>
                            <textarea name="content" rows="5" cols="50">{{$content->content}}</textarea>
                        </td>
                        <td>
                            <textarea name="content_ar" rows="5" cols="50">{{$content->content_ar}}</textarea>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-secondary mt-5">Edit</button>
                        </td>
                    </form>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
