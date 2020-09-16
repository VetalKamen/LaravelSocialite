<div class="form-group">
    <label>{{ __('Title') }}</label>
    <input type="text" name="title" class="form-control"
           value="{{ old('title', $book->title ?? '') }}"/>
</div>
<div class="form-group">
    <label>{{ __('Content') }} </label>
    <input type="text" name="content" class="form-control"
           value="{{ old('content', $book->content ?? '') }}"/>
</div>
<div class="form-group">
    <label>{{ __('Author') }} </label>
    <select class="dropdown" name="author_id">
        @foreach($authors as $author)
            <option value="{{ $author->id }}">{{ $author->name }}</option>
        @endforeach
    </select>
</div>

