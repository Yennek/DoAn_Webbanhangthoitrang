@extends('layout.layout_customer')
@section('title')
    Register
@endsection
@section('content')
    <div class="content-header row">
    </div>
    <div class="content-body">
        <section class="row flexbox-container">
            <div class="col-xl-12 col-12 d-flex justify-content-center">
                <div class="card bg-authentication rounded-0 mb-0">
                    <div class="row m-4">
                        <div class="col-lg-12 col-12 p-4">
                            <div class="card rounded-2 mb-1 p-4">
                                <div class="card-header pt-50 pb-1">
                                    <div class="card-title">
                                        @if (Session::has('thanhcong'))
                                            <div class="alert alert-success">{{ Session::get('thanhcong') }}</div>
                                        @endif
                                        <h4 class="mb-0">Tạo tài khoản</h4>
                                    </div>
                                </div>
                                <p class="px-2">Nhập thông tin của bạn để đăng kí tài khoản mới</p>
                                <div class="card-content">
                                    <div class="card-body pt-0">
                                        <form action="/post-signup" method="post">
                                            @csrf
                                            <div class="form-label-group">
                                                <input type="text" name="userName" id="inputName" class="form-control @error('userName') border border-danger @enderror"
                                                    placeholder="Username" required oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Trường bắt buộc vui lòng nhập')">
                                            @error('userName')
                                                <lable style="color: red">{{ $errors->first('userName') }}</lable>
                                                <br><br>
                                            @enderror

                                            </div>
                                            <div class="form-label-group">
                                                <input type="email" name="email" id="inputEmail" class="form-control @error('email') border border-danger @enderror"
                                                    placeholder="Email" required oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Trường bắt buộc vui lòng nhập')">
                                                @error('email')
                                                    <lable style="color: red">{{ $errors->first('email') }}</lable>
                                                    <br><br>
                                                @enderror
                                            </div>
                                            <div class="form-label-group">
                                                <input type="password" name="password1" id="inputPassword"
                                                    class="form-control @error('password1') border border-danger @enderror" placeholder="Password" required oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Trường bắt buộc vui lòng nhập')">
                                                @error('password1')
                                                    <lable style="color: red">{{ $errors->first('password1') }}</lable>
                                                    <br><br>
                                                @enderror
                                            </div>
                                            <div class="form-label-group">
                                                <input type="password" name="password2" id="inputConfPassword"
                                                    class="form-control @error('password2') border border-danger @enderror"" placeholder="Confirm Password" required oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Trường bắt buộc vui lòng nhập')">
                                                @error('password2')
                                                    <lable style="color: red">{{ $errors->first('password2') }}</lable>
                                                    <br><br>
                                                @enderror
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <fieldset class="checkbox">
                                                        <div class="vs-checkbox-con vs-checkbox-primary">
                                                            <input type="checkbox" checked>
                                                            <span class="vs-checkbox">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                            <span class=""> Tôi chấp nhận mọi điều khoản</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <a href="/signin"
                                                class="btn btn-outline-primary float-left btn-inline mb-50">Đăng nhập</a>
                                            <button type="submit"
                                                class="btn btn-primary float-right btn-inline mb-50">Đăng ký</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
