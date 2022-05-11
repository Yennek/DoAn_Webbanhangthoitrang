@extends('layout.layout_customer')
@section('title')
    Forgot password
@endsection
@section('content')
    <div class="content-header row"></div>
    <div class="content-body">
        <section class="row flexbox-container mx-0">
            <div class="col-xl-7 col-md-9 col-10 d-flex justify-content-center px-0">
                <div class="card bg-authentication rounded-0 mb-0">
                    <div class="row m-0">
                        <div class="col-lg-6 d-lg-block d-none text-center align-self-center">
                            <img src="{{ asset('css/app-assets/images/pages/forgot-password.png') }}" alt="branding logo">
                        </div>
                        <div class="col-lg-6 col-12 p-0">
                            <div class="card rounded-0 mb-0 px-2 py-1">
                                <div class="card-header pb-1">
                                    <div class="card-title">
                                        <h4 class="mb-0">Khôi phục mật khẩu của bạn</h4>
                                    </div>
                                </div>
                                <p class="px-2 mb-0">Vui lòng nhập địa chỉ email của bạn</p>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="/forgot-password" method="POST">
                                            <div class="form-label-group">
                                                <input type="email" id="inputEmail" class="form-control" placeholder="Email"
                                                    name="email" required oninput="this.setCustomValidity('')"  oninvalid="this.setCustomValidity('Trường bắt buộc vui lòng nhập')">
                                                <label for="inputEmail">Email</label>
                                            </div>
                                            <div class="float-md-left d-block mb-1">
                                                <a href="/signin" class="btn btn-outline-primary btn-block px-75">Quay lại</a>
                                            </div>
                                            <div class="float-md-right d-block mb-1">
                                                <button type="submit" class="btn btn-primary btn-block px-75">Đặt lại mật khẩu</button>
                                            </div>
                                        </form>
                                    </div>
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
