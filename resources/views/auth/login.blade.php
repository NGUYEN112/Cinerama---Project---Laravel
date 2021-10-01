@extends('layouts.auth-layout')

@section('auth-content')
<div class="col-4 offset-4">
    <h3 class="login__font-tittle text-center login__form-bottom animate__animated animate__backInRight">Đăng nhập
    </h3>
    <form method="post">
        @csrf
        <!-- Phone input -->
        <div class="form-outline login__form-bottom">
            <input type="text" name="email" id="form2Example1" class="form-control login__border" />
            <label class="form-label login__font" for="form2Example1">Email</label>
        </div>

        <!-- Password input -->
        <div class="form-outline login__form-bottom">
            <input type="password" name="password" id="form2Example2" class="form-control login__border" />
            <label class="form-label login__font" for="form2Example2">Mật khẩu</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-outline-light btn-block login__form-bottom">Xác nhận</button>

        <!-- Register buttons -->
        <div class="text-center login__color">
            <p>Nếu bạn chưa là thành viên? <a href="/auth/register" class="login__font">Đăng kí</a></p>
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
            </button>
        </div>
    </form>
</div>
@endsection