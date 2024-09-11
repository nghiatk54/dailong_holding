{{-- Page Admin dashboard, use bootstrap5, jquery and jquery validated --}}
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Add icon favicon --}}
    <link rel="icon" href="{{ asset('assets/images/logo/dai-long.png') }}" type="image/x-icon">
    {{-- Add Title --}}
    <title>Quản trị hệ thống</title>
    {{-- Add link CSS bootstrap5 from public/assets/library/bootstrap/dist use asset --}}
    <link rel="stylesheet" href="{{ asset('assets/library/bootstrap/dist/css/bootstrap.min.css') }}">
    {{-- Add link reset.css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    {{-- Add link proper JS --}}
    <script src="{{ asset('assets/library/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    {{-- Add link bootstrap JS --}}
    <script src="{{ asset('assets/library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    {{-- Add link Font Roboto from public/assets/library/roboto/index.css --}}
    <link rel="stylesheet" href="{{ asset('assets/library/@fontsource/roboto/index.css') }}">
    {{-- Add link Font Awesome from public/assets/library/@fortawesome/fontawesome-free/css/all.min.css --}}
    <link rel="stylesheet" href="{{ asset('assets/library/@fortawesome/fontawesome-free/css/all.min.css') }}">
    {{-- Add link CSS custom --}}
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    {{-- Add CSS adminDashboard --}}
    <link rel="stylesheet" href="{{ asset('assets/css/adminDashboard.css') }}">
</head>

<body>
    {{-- Container --}}
    <div class="custom-container"
        style="background-image: url('{{ asset('assets/images/background/admin-dashboard.jpg') }}')">
        {{-- Navbar --}}
        <nav class="navbar navbar-light bg-dark">
            <div class="container-fluid">
                {{-- Brand --}}
                <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
                    <img src="{{ asset('assets/images/logo/dai-long.png') }}" alt="Logo" class="img-fluid"
                        width="48px">
                    <h1 class='navbar-text text-white ms-2 fw-900'>ĐẠI LONG</h1>
                </a>
                {{-- Navbar For mobile --}}
                {{-- Button dropdown --}}
                <button class="navbar-toggler bg-white d-md-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mynavbarMobile">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-md-none" id="mynavbarMobile">
                    <ul class="navbar-nav me-auto py-2">
                        {{-- Item search sub app --}}
                        <li class="nav-item mb-2">
                            <div class="nav-link p-3 position-relative" href="#">
                                {{-- Input --}}
                                <input type="text" id="searchSubAppMobile" name="searchSubAppMobile"
                                    class="ps-5 custom-placeholder text-white bg-dark bg-opacity-50 form-control rounded-pill border border-white custom-input-search"
                                    placeholder="Tìm kiếm ứng dụng" aria-label="searchSubapp"
                                    aria-describedby="searchSubapp">
                                {{-- Icon --}}
                                <span class="position-absolute top-50 translate-middle-y ms-3 text-white"><i
                                        class="fas fa-search"></i><span>
                            </div>
                        </li>
                        {{-- Item information --}}
                        <li class="nav-item mb-2">
                            <a class="nav-link p-3 d-flex row text-white fs-5" href="#">
                                <i class="fas fa-user-circle col-2"></i>
                                <span class="col-10">Thông tin tài khoản<span>
                            </a>
                        </li>
                        {{-- Item Company --}}
                        <li class="nav-item mb-2">
                            <a class="nav-link p-3 d-flex row text-white fs-5" href="#">
                                <i class="fas fa-building col-2"></i>
                                <div class="col-10">
                                    <span>ĐẠI LONG</span>
                                    {{-- Arrow right --}}
                                    <i class="fas fa-chevron-right ms-2"></i>
                                </div>
                            </a>
                        </li>
                        {{-- Item Change background --}}
                        <li class="nav-item mb-2">
                            <a class="nav-link p-3 d-flex row text-white fs-5" href="#">
                                <i class="fas fa-image col-2"></i>
                                <span class='col-10'>Đổi ảnh nền</span>
                            </a>
                        </li>
                        {{-- Item change password --}}
                        <li class="nav-item mb-2">
                            <a class="nav-link p-3 d-flex row text-white fs-5" href="#">
                                <i class="fas fa-key col-2"></i>
                                <span class='col-10'>Đổi mật khẩu</span>
                            </a>
                        </li>
                        {{-- Item set account --}}
                        <li class="nav-item mb-2">
                            <a class="nav-link p-3 d-flex row text-white fs-5" href="#">
                                <i class="fas fa-user-cog col-2 "></i>
                                <span class='col-10'>Thiết lập tài khoản</span>
                            </a>
                        </li>
                        {{-- Item set security --}}
                        <li class='nav-item mb-2'>
                            <a class="nav-link p-3 d-flex row text-white fs-5" href="#">
                                <i class="fas fa-shield-alt col-2"></i>
                                <span class="col-10">Thiết lập bảo mật</span>
                            </a>
                        </li>
                        {{-- Item Logout --}}
                        <li class="nav-item">
                            <a class="nav-link p-3 d-flex row text-white fs-5" href="{{ route('logout') }}">
                                <i class="fas fa-sign-out-alt col-2 "></i>
                                <span class='col-10'>Đăng xuất</span>
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- Navbar for desktop --}}
                <ul class="navbar-nav flex-row d-none d-md-flex">
                    {{-- Search section --}}
                    <li class="nav-item">
                        <div class="position-relative">
                            {{-- Input --}}
                            <input type="text" id="searchSubApp"
                                class="ps-5 text-white bg-dark bg-opacity-50 form-control rounded-pill border border-white custom-input-search"
                                placeholder="Tìm kiếm ứng dụng" aria-label="searchSubapp"
                                aria-describedby="searchSubapp">
                            {{-- Icon --}}
                            <span class="position-absolute top-50 translate-middle-y ms-3 text-white"><i
                                    class="fas fa-search"></i><span>
                        </div>
                    </li>
                    {{-- Item setting --}}
                    <li class="nav-item ms-3">
                        <div class="dropdown">
                            {{-- Button --}}
                            <button
                                class="btn text-white bg-transparent rounded-circle border-0 d-flex justify-content-center align-items-center"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{-- Icon --}}
                                <i class="fas fa-cog fs-2"></i>
                            </button>
                            {{-- Dropdown menu --}}
                            <ul class="dropdown-menu position-absolute dropdown-menu-end dropdown-setting-arrow mt-2">
                                {{-- Item change background --}}
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class="fas fa-image me-2 text-muted"></i>
                                        <span>Đổi ảnh nền</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- Item information --}}
                    <li class="nav-item ms-3">
                        <div class="dropdown h-100 d-flex justify-content-center align-items-center">
                            {{-- Avatar --}}
                            <img src="{{ asset('assets/images/background/background-login.jpg') }}" alt="Avatar"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                class="rounded-circle" width="36px" height="36px">
                            {{-- Dropdown menu --}}
                            <ul
                                class="dropdown-menu position-absolute dropdown-menu-end dropdown-information-arrow p-0 mt-2">
                                {{-- Container content --}}
                                {{-- Item information --}}
                                <li
                                    class="dropdown-item bg-transparent d-flex flex-column align-items-center justify-content-center mt-3">
                                    {{-- Avatar --}}
                                    <img src="{{ asset('assets/images/background/background-login.jpg') }}"
                                        alt="Avatar" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false" class="rounded-circle" width="64px" height="64px">
                                    {{-- Name --}}
                                    <div class="text-center mt-3">
                                        <h6 class="fw-bold fs-5">{{ $user->name }}</h6>
                                    </div>
                                    {{-- Email --}}
                                    <div class="text-center mt-2">
                                        <span class="text-muted">
                                            {{ $user->email }}
                                        </span>
                                    </div>
                                </li>
                                {{-- Item Company --}}
                                <li>
                                    <a class="dropdown-item mt-3" href="#">
                                        <button
                                            class='btn btn-outline-primary w-100 h-100 d-flex justify-content-center align-items-center button-dropdown-company'
                                            type='button'>
                                            <i class="fas fa-building me-2"></i>
                                            <div
                                                class="text-hover-primary w-100 d-flex justify-content-between align-items-center">
                                                <span>ĐẠI LONG</span>
                                                {{-- Arrow right --}}
                                                <i class="fas fa-chevron-right me-2"></i>
                                            </div>
                                        </button>
                                    </a>
                                </li>
                                {{-- Item change password --}}
                                <li>
                                    <a class="dropdown-item d-flex align-items-center mt-2 px-4 py-2 rounded-1"
                                        href="#">
                                        <i class="fas fa-key me-2 text-muted"></i>
                                        <span>Đổi mật khẩu</span>
                                    </a>
                                </li>
                                {{-- Item set account --}}
                                <li>
                                    <a class="dropdown-item d-flex align-items-center mt-2 px-4 py-2 rounded-1"
                                        href="#">
                                        <i class="fas fa-user-cog me-2 text-muted"></i>
                                        <span>Thiết lập tài khoản</span>
                                    </a>
                                </li>
                                {{-- Item set security --}}
                                <li>
                                    <a class="dropdown-item d-flex align-items-center mt-2 px-4 py-2 rounded-1"
                                        href="#">
                                        <i class="fas fa-shield-alt me-2 text-muted"></i>
                                        <span>Thiết lập bảo mật</span>
                                    </a>
                                </li>
                                {{-- Break line --}}
                                <hr class='m-0 mt-2' />
                                {{-- Item logout --}}
                                <li>
                                    <a class="dropdown-item d-flex align-items-center justify-content-center py-3 rounded-bottom rounded-1"
                                        href="{{ route('logout') }}">
                                        <i class="fas fa-sign-out-alt me-2 text-muted"></i>
                                        <span>Đăng xuất</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        {{-- Section content --}}
        {{-- Select module --}}
        <div class='container-module mx-auto'>
            <div class="container-fluid">
                <div class="row g-2 mt-2 justify-content-center">
                    {{-- Select all --}}
                    <button class="selection fw-900 px-3 me-2  btn btn-sm btn-outline-primary rounded-pill active">Tất
                        cả</button>
                    {{-- Select employee --}}
                    <button class="selection fw-900 px-3 me-2 btn btn-sm btn-outline-primary rounded-pill">Nhân
                        sự</button>
                    {{-- Select business --}}
                    <button class="selection fw-900 px-3 me-2 btn btn-sm btn-outline-primary rounded-pill">Kinh
                        doanh</button>
                    {{-- Select marketing --}}
                    <button
                        class="selection fw-900 px-3 me-2 btn btn-sm btn-outline-primary rounded-pill">Marketing</button>
                    {{-- Select produce --}}
                    <button class="selection fw-900 px-3 me-2 btn btn-sm btn-outline-primary rounded-pill">Sản
                        xuất</button>
                    {{-- Select Finance - Accounting --}}
                    <button class="selection fw-900 px-3 btn btn-sm btn-outline-primary rounded-pill">Tài chính - Kế
                        toán</button>
                </div>
            </div>
        </div>
        {{-- SubApp list --}}
        <div id="carouselSubapp" class="carousel slide mb-2 carouselSubapp">
            {{-- Indicators and footer --}}
            <div class="position-fixed bottom-0 vw-100 mb-3">
                <div class="carousel-indicators position-relative">
                    <button type="button" data-bs-target="#carouselSubapp" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselSubapp" data-bs-slide-to="1" class=""
                        aria-current="true" aria-label="Slide 2"></button>
                </div>
                {{-- Section footer --}}
                <footer>
                    {{-- Copyright --}}
                    <p class="text-white text-center fs-6 lh-base fw-900">
                        {{ __('Copyright © 2024 - Đại Long JSC version 1.0.0') }}
                    </p>
                </footer>
            </div>
            {{-- Carousel inner --}}
            <div class="carousel-inner carousel-inner-custom m-auto h-100">
                {{-- Item slide --}}
                <div class="carousel-item container-fluid h-100 active">
                    <div class="row row-cols-2 row-cols-md-4 gy-2 gy-md-4 row-cols-lg-5">
                        <div class="col">
                            <a class="card text-center border-0 py-3 text-decoration-none">
                                <img src="{{ asset('assets/images/subapp/organization.svg') }}"
                                    class="card-img-top mb-2" width="80px" height="80px" alt="Nhân sự">
                                <h5 class="text-white">Nhân sự</h5>
                            </a>
                        </div>
                        <div class="col">
                            <a class="card text-center border-0 py-3 text-decoration-none"
                                href="{{ route('admin.company.index') }}">
                                <img src="{{ asset('assets/images/subapp/company.svg') }}" class="card-img-top mb-2"
                                    width="80px" height="80px" alt="Nhân sự">
                                <h5 class="text-white">Công ty</h5>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Item slide --}}
                <div class="carousel-item">
                </div>
            </div>
            {{-- Button Control previous --}}
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselSubapp"
                data-bs-slide="prev">
                <div
                    class="custom-control-button position-absolute top-50 translate-middle-y rounded-circle d-flex justify-content-center align-items-center">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </div>
                <span class="visually-hidden">Previous</span>
            </button>
            {{-- Button Control next --}}
            <button class="carousel-control-next" type="button" data-bs-target="#carouselSubapp"
                data-bs-slide="next">
                <div
                    class="custom-control-button position-absolute top-50 translate-middle-y rounded-circle d-flex justify-content-center align-items-center">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </div>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    {{-- Add Link jquery from public/assets/library/jquery/dist/jquery.min.js --}}
    <script src="{{ asset('assets/library/jquery/dist/jquery.min.js') }}"></script>
    {{-- Add Link jquery validate from public/assets/library/jquery-validation/dist/jquery.validate.min.js --}}
    <script src="{{ asset('assets/library/jquery-validation/dist/jquery.validate.min.js') }}"></script>
</body>

</html>
