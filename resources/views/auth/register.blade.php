@extends('app')

@section('title', 'ユーザー登録')

@section('content')
  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <h1 class="text-center">
          <a href="/" class="text-dark">memo</a>
        </h1>
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center my-2">
              ユーザー登録
            </h2>

            @include('error_card_list')

            <div class="card-text">
              <form method="post" action="{{ route('register') }}">
                @csrf
                <div class="md-form">
                  <label for="name">ユーザー名</label>
                  <input
                   type="text"
                   class="form-control"
                   name="name"
                   id="name"
                   required
                   value="{{ old('name') }}"
                  >
                  <small>
                    英数字3～16文字（登録後の変更はできません）
                  </small>
                </div>
                <div class="md-form">
                  <label for="email">メールアドレス</label>
                  <input
                   type="text"
                   class="form-control"
                   name="email"
                   id="email"
                   required
                   value="{{ old('email') }}"
                  >
                </div>
                <div class="md-form">
                  <label for="password">パスワード</label>
                  <input
                   type="password"
                   class="form-control"
                   name="password"
                   id="password"
                   required
                   value=""
                  >
                </div>
                <div class="md-form">
                  <label for="password">パスワード（確認）</label>
                  <input
                   type="password"
                   class="form-control"
                   name="password_confirmation"
                   id="password_confirmation"
                   required
                   value=""
                  >
                </div>
                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ユーザー登録</button>
              </form>
              <div class="mt-0">
                <a href="{{ route('login') }}" class="card-text">ログインはこちら</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection