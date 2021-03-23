<x-app-layout>
    <h2>Contents</h2>
    @include('shared.flash')
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Position</th>
                <th>Edit</th>
            </tr>
            </thead>
            @foreach ($contents as $content)
                <tbody>
                <tr>
                    <td>
                        {{$content->position}}
                    </td>
                    <form action="{{route('contents.update', $content)}}">
                        @csrf
                        @method('PATCH')
                        <td>
                            <textarea name="content" rows="5" cols="50">{{$content->content}}</textarea>
                        </td>
                        <td>
                            <textarea name="content_ar" rows="5" cols="50">{{$content->content_ar}}</textarea>
                        </td>
                        <td></td>
                    </form>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</x-app-layout>
