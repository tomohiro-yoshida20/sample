@extends('app')

@section('title', '記事投稿')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            @include('error_card_list')
            <div class="card-text">
              <form method="post" action="{{ route('articles.store') }}">
                @include('articles.form')
                <button type="submit" class="btn btn-block blue-gradient">投稿する</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection