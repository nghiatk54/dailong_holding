{{-- Page login, use bootstrap5, jquery and jquery validated --}}
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Add icon favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon_io/favicon-16x16.png') }}">
    {{-- Add Title --}}
    <title>Đăng nhập hệ thống</title>
    {{-- Add link CSS bootstrap5 from public/library/bootstrap/dist use asset --}}
    <link rel="stylesheet" href="{{ asset('library/bootstrap/dist/css/bootstrap.min.css') }}">
    {{-- Add link proper JS --}}
    <script src="{{ asset('library/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    {{-- Add link bootstrap JS --}}
    <script src="{{ asset('library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    {{-- Add link reset.css --}}
    <link rel="stylesheet" href="{{ asset('assets/dist/reset.css') }}">
    {{-- Add link Font Roboto from public/library/roboto/index.css --}}
    <link rel="stylesheet" href="{{ asset('library/@fontsource/roboto/index.css') }}">
    {{-- Add link CSS index --}}
    <link rel="stylesheet" href="{{ asset('assets/dist/index.css') }}">
    {{-- Add CSS custom --}}
    <style>
        /* Background container form */
        .custom-container-form {
            background-image: url('{{ asset('assets/images/background/bg_login2.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            z-index: 1;
        }
        .custom-container-form::before {
            content:"";
            display:block;
            position:absolute;
            z-index:-1;
            width:100%;
            height:100%;
            top:0;
            left:0;
            background:linear-gradient(rgba(0,30,61,.6) 0,rgba(0,0,0,.1) 41.42%,rgba(0,0,0,.3) 100%)
        }
        .container-login{
            width: 100%;
            max-width: 400px;
            margin: auto;
        }
        .login-copy-right-container{
            font-weight: bold;
            color: #fff;
        }
    </style>
</head>

<body>
    {{-- Container Form --}}
    <div class="container-fluid vh-100 custom-container-form">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="container-login">
                    {{-- Section content --}}
                    <div class="bg-white rounded p-4 mb-2">
                        {{-- Logo image --}}
                        <div class="text-center">
                            <img src="{{ asset('assets/images/logo/final.png') }}" alt="Logo" class="img-fluid" width="100">
                        </div>
                        {{-- Title "Đăng Nhập Hệ Thống" --}}
                        <h2 class="text-center mb-4 fs-3 fw-bold">{{ __('HỆ SINH THÁI ĐẠI LONG') }}</h2>
                        <div class="alert alert-success text-center lh-base">
                            {{ __('Xin vui lòng đăng nhập vào hệ thống') }}
                        </div>
                        {{-- Notification --}}
                        {{-- If have any error --}}
                        @if ($errors->any())
                            {{-- Alert first error --}}
                            <div class="alert alert-danger text-center lh-base">
                                {{ $errors->first() }}
                            </div>
                        @endif
                        {{-- If success --}}
                        @if (session('success'))
                            {{-- Alert success --}}
                            <div class="alert alert-success text-center lh-base">
                                {{ session('success') }}
                            </div>
                        @endif
                        {{-- Form login --}}
                        <form method="POST" action="{{ route('login') }}" id="formLogin">
                            @csrf
                            {{-- Input Phone or Email --}}
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="emailPhoneNumber" name="emailPhoneNumber"
                                    placeholder="" value='{{ old('emailPhoneNumber') }}' required autofocus>
                                <label for="emailPhoneNumber"
                                    class="form-label">{{ __('Nhập Số điện thoại hoặc Email') }}</label>
                            </div>
                            {{-- Input password --}}
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder=""
                                    value='{{ old('password') }}' required>
                                <label for="password" class="form-label">{{ __('Nhập mật khẩu') }}</label>
                            </div>
                            {{-- Button login --}}
                            <button type="submit"
                                class="btn btn-primary btn-lg w-100 fw-bold">{{ __('Đăng nhập') }}</button>
                        </form>
                    </div>
                    {{-- Thêm phần copyright --}}
                    <div class="text-center">
                        <p class="login-copy-right-container lh-base">
                            {{ __('Copyright © 2024 - Đại Long JSC version 1.0.0') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Add Link jquery from public/library/jquery/dist/jquery.min.js --}}
    <script src="{{ asset('library/jquery/dist/jquery.min.js') }}"></script>
    {{-- Add Link jquery validate from public/library/jquery-validation/dist/jquery.validate.min.js --}}
    <script src="{{ asset('library/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    {{-- Add link JS index --}}
    <script src="{{ asset('assets/dist/index.js') }}"></script>

    {{-- Add js custom --}}
    <script>
        // Page loaded
        $(document).ready(function() {
            // Add method check email or phone number
            $.validator.addMethod('emailPhoneNumber', function(value, element) {
                // Check value email, have characters: a-z, A-Z, 0-9, ., _, - and @, then domain have characters: a-z, A-Z, 0-9, ., -
                const isEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(value);
                // Check value phone number in vietnam, start with 0, follow then is 3, 5, 7, 8, 9 and have 8 characters
                const isPhoneNumber = /^(0[3|5|7|8|9])+([0-9]{8})\b$/.test(value);
                // Return result
                return isEmail || isPhoneNumber;
            });

            // Validate formLogin
            $('#formLogin').validate({
                // Set rules
                rules: {
                    // Field emailPhoneNumber
                    emailPhoneNumber: {
                        required: true,
                        emailPhoneNumber: true
                    },
                    // Field password
                    password: {
                        required: true,
                        minlength: 9
                    }
                },
                // Set Notification
                messages: {
                    emailPhoneNumber: {
                        required: 'Vui lòng nhập số điện thoại hoặc email',
                        emailPhoneNumber: 'Số điện thoại hoặc email không hợp lệ'
                    },
                    password: {
                        required: 'Vui lòng nhập mật khẩu',
                        minlength: 'Mật khẩu phải chứa ít nhất 9 ký tự'
                    }
                },

                // Create error element
                errorElement: 'div',
                // Add class invalid-feedback, mt-2 to error element, insert after input element
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback mt-2');
                    error.insertAfter(element);
                },
                // Add class is-invalid, remove class is-valid if have when validate error
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid').removeClass('is-valid');
                },
                // Add class is-valid, remove class is-invalid if have when validate success
                unhighlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-valid').removeClass('is-invalid');
                }
            });
        });
    </script>
</body>

</html>
