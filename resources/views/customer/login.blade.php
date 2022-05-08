@extends('layout.layout_customer')
@section('title')
    Login
@endsection
@section('content')
    <div class="content-header row"></div>
    <div class="content-body">
        <section class="row flexbox-container">
            <div class="col-xl-12 col-12 d-flex justify-content-center">
                <div class="card bg-authentication rounded-0 mb-0">
                    <div class="row m-4">
                        <div class="col-lg-12 col-12 p-4">
                            <div class="card rounded-4 mb-4 px-4">
                                <div class="card-header pb-1">
                                    <div class="card-title">
                                        <h4 class="mb-0">Đăng nhập</h4>
                                    </div>
                                </div>
                                <p class="px-2">Chào mừng trở lại, hãy nhập tài khoản của bạn</p>
                                @if (Session::has('loginFalse'))
                                    <div class="alert alert-danger">{{ Session::get('loginFalse') }}</div>
                                @endif
                                <div class="card-content">
                                    <div class="card-body pt-1">
                                        <form action="/post-signin" method="post">
                                            <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                <input type="text" name="email" class="form-control" id="user-name"
                                                    placeholder="Username" required>
                                                <div class="form-control-position">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                                <label for="user-name">Tài khoản</label>
                                            </fieldset>
                                            <span class="error text-danger" id="error_birth">
                                                @if ($errors->has('email'))
                                                    {{ $errors->first('email') }}
                                                @endif
                                            </span><br>
                                            <fieldset class="form-label-group position-relative has-icon-left">
                                                <input type="password" name="password" class="form-control"
                                                    id="user-password" placeholder="Password" required>
                                                <div class="form-control-position">
                                                    <i class="feather icon-lock"></i>
                                                </div>
                                                <label for="user-password">Mật khẩu</label>
                                            </fieldset>
                                            <span class="error text-danger" id="error_birth">
                                                @if ($errors->has('password'))
                                                    {{ $errors->first('password') }}
                                                @endif
                                            </span><br>
                                            <div class="form-group d-flex justify-content-between align-items-center">
                                                <div class="text-left">
                                                    <fieldset class="checkbox">
                                                        <div class="vs-checkbox-con vs-checkbox-primary">
                                                            <input type="checkbox">
                                                            <span class="vs-checkbox">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                            <span class="">Ghi nhớ</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="text-right"><a href="/forgot-password" class="card-link">Quên mật khẩu</a></div>
                                            </div>
                                            <a href="/signup"
                                                class="btn btn-outline-primary float-left btn-inline">Đăng ký</a>
                                            <button type="submit"
                                                class="btn btn-primary float-right btn-inline">Đăng nhập</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="login-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
