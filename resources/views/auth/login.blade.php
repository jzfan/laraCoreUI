@extends('layouts.guest')

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-group">
        <div class="card p-4">
          <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <h1>管理登录</h1>
            <p class="text-muted">Sign In to your account</p>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="icon-user"></i>
                </span>
              </div>
              <input class="form-control" type="email" placeholder="Email" name='email' value="admin@admin.com">
            </div>
            <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="icon-lock"></i>
                </span>
              </div>
              <input class="form-control" type="password" placeholder="密码" name='password' value="12341234">
            </div>
            <div class="row">
              <div class="col-6">
                <button class="btn btn-primary px-4" type="submit">登录</button>
              </div>
              <div class="col-6 text-right">
                <button class="btn btn-link px-0" type="button">忘记密码?</button>
              </div>
            </div>
          </form>
          </div>
        </div>
        <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
          <div class="card-body text-center">
            <div>
              <h2>Sign up</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <button class="btn btn-primary active mt-3" type="button">Register Now!</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
