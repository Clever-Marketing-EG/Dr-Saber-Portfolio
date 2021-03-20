<x-app-layout>

    <h2>Edit</h2>
    <form method="POST" action="{{ route('surgeries.update', $operation) }}">
        @csrf
        @method('PATCH')
        <div class="container">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Title:</label>
                    <input type="text" name="title" class="form-control" value="{{ $operation->title }}"
                        placeholder="{{ $operation->title }}">
                </div>
                <div class="form-group col-md-6">
                    <label>Title (AR):</label>
                    <input type="text" name="title_ar" class="form-control" value="{{ $operation->title_ar }}"
                        placeholder="{{ $operation->title_ar }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Content:</label>
                    <input type="text" name="name" class="form-control" value="{{ $operation->content }}"
                        placeholder="{{ $operation->content }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Content (AR):</label>
                    <input type="text" name="name" class="form-control" value="{{ $operation->content }}"
                        placeholder="{{ $operation->content }}">
                </div>
            </div>
        </div>
    </form>

</x-app-layout>
