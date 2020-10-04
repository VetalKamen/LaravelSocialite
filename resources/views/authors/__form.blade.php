<div class="form-group">
    <label>{{ __('Name') }}</label>
    <input type="text" name="name" class="form-control"
           value="{{ old('name', $author->name ?? '') }}"/>
</div>
<div class="form-group">
    <label>{{ __('Surname') }} </label>
    <input type="text" name="surname" class="form-control"
           value="{{ old('surname', $author->surname ?? '') }}"/>
</div>

