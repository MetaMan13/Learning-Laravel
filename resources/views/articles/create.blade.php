@extends ('layout');

@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>

            <form action="/articles" method="POST">
                @csrf
                <div class="field">
                    <label for="title" class="label">Title</label>

                    <div class="control">
                        <input type="text" class="input" name="title" id="title" value="{{ old('title') }}">
                        @if ($errors->has('title'))
                        <p style="color: red">{{ $errors->first('title')}}</p>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label for="excerpt" class="label">Excerpt</label>

                    <div class="control">
                        <textarea type="text" class="input" name="excerpt" id="excerpt">{{ old('excerpt') }}</textarea>
                        @if ($errors->has('excerpt'))
                        <p style="color: red">{{ $errors->first('excerpt')}}</p>
                        @endif
                    </div>
                </div>

                <div class="field is-grouped">
                    <label for="body" class="label">Body</label>

                    <div class="control">
                        <textarea type="text" class="input" name="body" id="body" value="{{ old('title') }}">{{ old('body') }}</textarea>
                        @if ($errors->has('excerpt'))
                        <p style="color: red">{{ $errors->first('excerpt')}}</p>
                        @endif
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