@csrf
<div class="md-form">
  <label for="title">タイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}">
</div>
<div class="form-group">
  <label for="body"></label>
  <textarea class="form-control" placeholder="本文" rows="16" name="body">{{ $article->body ?? old('body') }}</textarea>
</div>