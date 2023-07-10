@extends('front.layout.master')

@section('title', 'Login')

@section('body')

<div class="container-login">
    <h2>Đăng nhập</h2>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="" method="POST">
        @csrf
        <div class="form-group-login">
            <label for="email">Địa chỉ email: </label>
            <input type="email" id="email" name="email" placeholder="Nhập email của bạn" required>
        </div>
        <div class="form-group-login">
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
        </div>
        <div class="checkbox-group-login">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Lưu mật khẩu</label>
        </div>
        <div class="form-group-login">
            <button type="submit">Đăng nhập</button>
        </div>
        <div class="forgot-password-login">
            <a href="#">Quên mật khẩu?</a>
            <a href="./account/register">Tạo tài khoản mới</a>
        </div>
    </form>
</div>

@endsection