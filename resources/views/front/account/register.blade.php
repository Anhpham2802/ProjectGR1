@extends('front.layout.master')
@section('title', 'Register')
@section('body')

<div class="container-register">
    <h2 style="margin-bottom: 20px;">Đăng ký tài khoản</h2>
    
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    
    <form action="" method="POST">
        @csrf
        <div class="form-group-register">
            <label for="name" class="required">Tên:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group-register">
            <label for="email" class="required">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group-register">
            <label for="password" class="required">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group-register">
            <label for="confirm-password" class="required">Xác nhận mật khẩu:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
        </div>
        <div class="form-group-register">
            <input type="submit" value="Đăng ký">
        </div>
    </form>
</div>

@endsection