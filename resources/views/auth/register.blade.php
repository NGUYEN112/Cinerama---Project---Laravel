@extends('layouts.auth-layout')

@section('auth-content')
<div class="col-4 offset-4">
    <h3 class="login__font-tittle text-center login__form-bottom animate__animated animate__backInRight">ĐĂNG KÍ</h3>
</div>
<form method="POST" class="row" >
    @csrf
    <div class="col-6">
        <!-- Phone input -->
        <div class="form-outline login__form-bottom">
            <input type="text" name="email" id="email" class="form-control login__border" required/>
            <label class="form-label login__font" for="email">Email</label>
        </div>

        <!-- Password input -->
        <div class="form-outline login__form-bottom">
            <input type="password" name="password" id="password" class="form-control login__border" required />
            <label class="form-label login__font" for="password">Mật khẩu</label>
        </div>

        <!-- Name input -->
        <!-- <div class="form-outline login__form-bottom">
            <input type="password" name="password" id="form2Example2" class="form-control login__border" required />
            <label class="form-label login__font" for="form2Example2">Nhập lại mật khẩu</label>
        </div> -->
    </div>
    <div class="col-6 login__form-bottom ">
        <!-- name input -->
        <div class="form-outline login__form-bottom">
            <input type="text" name="full_name" id="fullname" class="form-control login__border" required />
            <label class="form-label login__font" for="fullname">Họ và tên</label>
        </div>

        <!-- Address input -->
        <div class="form-outline login__form-bottom">
            <input type="text" name="phone_number" id="phonenumber" class="form-control login__border" required />
            <label class="form-label login__font" for="phonenumber">Số điện thoại</label>
        </div>

        <!-- City input -->
        <!-- <div class="form-outline login__form-bottom">
            <input type="text" name="address" id="form2Example2" class="form-control login__border" />
            <label class="form-label login__font" for="form2Example2">Địa chỉ</label>
        </div> -->
    </div>
    <!-- Submit button -->
    <div class="col-4 offset-4">
        <button type="submit" class="btn btn-outline-light btn-block login__form-bottom">Xác nhận</button>
    </div>

    <!-- Register buttons -->
    <div class="text-center login__color">
        <p>hoặc đăng nhập với:</p>
        <button type="button" class="btn btn-outline-light btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-outline-light btn-floating mx-1">
            <i class="fab fa-google"></i>
        </button>

        <button type="button" class="btn btn-outline-light btn-floating mx-1">
            <i class="fab fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-outline-light btn-floating mx-1">
            <i class="fab fa-github"></i>
        </button><br>
        <p>Hoặc:</p>
        <a class="login__font" href="/auth/login">Quay lại Đăng nhập</a>
    </div>
</form>

@endsection