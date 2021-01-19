@extends ('layout');

@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Edit article</h1>

            <form action="/articles/{{ $article->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="field">
                    <label for="title" class="label">Title</label>

                    <div class="control">
                        <input type="text" class="input" name="title" id="title" value="{{ $article->title }}">
                    </div>
                </div>

                <div class="field">
                    <label for="excerpt" class="label">Excerpt</label>

                    <div class="control">
                        <textarea type="text" class="input" name="excerpt" id="excerpt">{{ $article->excerpt }}</textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <label for="body" class="label">Body</label>

                    <div class="control">
                        <textarea type="text" class="input" name="body" id="body">{{ $article->body }}</textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection