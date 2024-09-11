{{-- Page Layout Backend, use bootstrap5, jquery and jquery validated --}}
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Add icon favicon --}}
    <link rel="icon" href="{{ asset('assets/images/logo/dai-long.png') }}" type="image/x-icon">
    {{-- Add Title --}}
    <title>Quản trị hệ thống</title>
    {{-- Add link reset.css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    {{-- Add link CSS bootstrap5 from public/assets/library/bootstrap/dist use asset --}}
    <link rel="stylesheet" href="{{ asset('assets/library/bootstrap/dist/css/bootstrap.min.css') }}">
    {{-- Add link Font Roboto from public/assets/library/roboto/index.css --}}
    <link rel="stylesheet" href="{{ asset('assets/library/@fontsource/roboto/index.css') }}">
    {{-- Add link Font Awesome from public/assets/library/@fortawesome/fontawesome-free/css/all.min.css --}}
    <link rel="stylesheet" href="{{ asset('assets/library/@fortawesome/fontawesome-free/css/all.min.css') }}">
    {{-- Add link CSS custom --}}
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    {{-- Add CSS adminDashboard --}}
    <link rel="stylesheet" href="{{ asset('assets/css/backend.css') }}">
    {{-- Add CSS custom --}}
    <style>
        /* Background container */
        .custom-container {
            background-image: url('{{ asset('assets/images/background/background-login.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Fix input search */
        .input-search-custom {
            width: 136px;
        }

        /* Fix dropdown */
        .dropdown-information-arrow::before {
            content: "";
            position: absolute;
            top: -6px;
            right: 8px;
            border-width: 0 8px 8px 8px;
            border-style: solid;
            border-color: transparent transparent #ffffff transparent;
        }

        .button-dropdown-company {
            min-width: 280px;
        }

        /* Fix sidebar */
        .sidebarControl {
            width: 80px;
            background-color: #041434;
        }

        .sidebarControl.active {
            width: 200px;
        }

        .sidebarControl .sidebarItem {
            color: #ffffff;
            border: none;
            height: 34px;
        }

        .sidebarControl .sidebarItem .text {
            display: none;
        }

        .sidebarControl.active .sidebarItem .icon {
            left: 26px;
        }

        .sidebarControl.active .sidebarItem .text {
            display: block;
            left: 48px;
        }

        .sidebarControl.active .sidebarItem.action .icon {
            left: 32px;
        }

        .sidebarControl.active .sidebarItem.action .text {
            left: 48px;
        }


        /* Fix content */
        .container-content-custom .content-custom {
            padding-left: 80px;
        }

        .container-content-custom .content-custom.active {
            padding-left: 200px;
        }

        /* Responsive width >= 768px */
        @media (min-width: 768px) {

            /* Fix input search */
            .input-search-custom {
                width: 386px;
            }
        }

        /* Responsive width >= 992px */
        @media (min-width: 992px) {}
    </style>
    {{-- File css page inherit layouts --}}
    @stack('styles')
</head>

<body>
    {{-- Container --}}
    <div class="custom-container vh-100">
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-sm bg-light">
            <div class="container-fluid flex-nowrap">
                <div class="navbar-brand d-flex align-items-center justify-content-start me-0">
                    {{-- Menu launch --}}
                    <a href="{{ route('admin.dashboard.index') }}" class='me-3 me-md-5'><img
                            src="{{ asset('assets/images/subapp/icon-launcher-menu.svg') }}" alt="Menu launch"
                            class="img-fluid" width="28px">
                    </a>
                    {{-- Section Subapp sidebar --}}
                    @yield('subapp')

                </div>
                {{-- Navigation --}}
                <ul class="navbar-nav flex-row align-items-center justify-content-end">
                    {{-- Item search --}}
                    <li class="nav-item">
                        <div class="input-group input-search-custom">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="search"
                                aria-describedby="search">
                        </div>
                    </li>
                    {{-- Item information --}}
                    <li class="nav-item ms-3">
                        <div class="dropdown h-100 d-flex justify-content-center align-items-center">
                            {{-- Avatar --}}
                            <img src="{{ asset('assets/images/background/background-login.jpg') }}" alt="Avatar"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false" class="rounded-circle"
                                width="36px" height="36px">
                            {{-- Dropdown menu --}}
                            <ul
                                class="dropdown-menu position-absolute dropdown-menu-end dropdown-information-arrow p-0 mt-2">
                                {{-- Container content --}}
                                {{-- Item information --}}
                                <li
                                    class="dropdown-item bg-transparent d-flex flex-column align-items-center justify-content-center mt-3">
                                    {{-- Avatar --}}
                                    <img src="{{ asset('assets/images/background/background-login.jpg') }}"
                                        alt="Avatar" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                        class="rounded-circle" width="64px" height="64px">
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
        <div class="container-content-custom position-relative">
            {{-- Sidebar --}}
            <div id="sidebarControl" class='sidebarControl position-absolute top-0 left-0 bottom-0'>
                {{-- List item --}}
                <div class="py-3">
                    {{-- Item "Tổng quan" --}}
                    <div class='sidebarItemWrap w-100 px-2' data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-title="Tổng quan">
                        <a href="#"
                            class='sidebarItem w-100 btn btn-sm btn-outline-primary mb-1 active position-relative'>
                            <i
                                class="icon fas fa-tachometer-alt fs-4 position-absolute top-50 left-50 translate-middle"></i>
                            <span class='text position-absolute top-50 translate-middle-y'>Tổng quan</span>
                        </a>
                    </div>
                    {{-- Item "Công ty" --}}
                    <div class='sidebarItemWrap w-100 px-2' data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-title="Công ty">
                        <a href="#"
                            class='sidebarItem w-100 btn btn-sm btn-outline-primary mb-1 position-relative'>
                            <i class="icon fas fa-building fs-4 position-absolute top-50 left-50 translate-middle"></i>
                            <span class='text position-absolute top-50 translate-middle-y'>Công ty</span>
                        </a>
                    </div>
                    {{-- Item "Công ty" --}}
                    <div class='sidebarItemWrap w-100 px-2' data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-title="Công ty">
                        <a href="#"
                            class='sidebarItem w-100 btn btn-sm btn-outline-primary mb-1 position-relative'>
                            <i class="icon fas fa-building fs-4 position-absolute top-50 left-50 translate-middle"></i>
                            <span class='text position-absolute top-50 translate-middle-y'>Công ty</span>
                        </a>
                    </div>
                </div>
                {{-- Show and hide --}}
                <button
                    class='action sidebarItem w-100 btn btn-sm btn-outline-primary position-absolute bottom-0 rounded-0'
                    type="button">
                    <i class="icon fas fa-chevron-right fs-4 position-absolute top-50 left-50 translate-middle"></i>
                    <span class="text position-absolute top-50 translate-middle-y ms-3">Thu gọn</span>
                </button>
                {{-- Section menu item --}}
                @yield('menu')
            </div>
            {{-- Content --}}
            <div class="content-custom vw-100 h-100 bg-secondary-subtle">
                Content here
                {{-- Section content --}}
                @yield('content')
            </div>
        </div>

        {{-- Add Link jquery from public/assets/library/jquery/dist/jquery.min.js --}}
        <script src="{{ asset('assets/library/jquery/dist/jquery.min.js') }}"></script>
        {{-- Add Link jquery validate from public/assets/library/jquery-validation/dist/jquery.validate.min.js --}}
        <script src="{{ asset('assets/library/jquery-validation/dist/jquery.validate.min.js') }}"></script>
        {{-- Add link proper JS --}}
        <script src="{{ asset('assets/library/@popperjs/core/dist/umd/popper.min.js') }}"></script>
        {{-- Add link bootstrap JS --}}
        <script src="{{ asset('assets/library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        {{-- Add js custom --}}
        <script>
            // Page loaded
            $(document).ready(function() {
                // Tooltip
                $('[data-bs-toggle="tooltip"]').tooltip();
                // Set height .container-content-custom = 100vh - outer height navbar
                $('.container-content-custom').css('height', 'calc(100vh - ' + $('.navbar').outerHeight() + 'px)');
                // Check width window for responsive, if width >= 768px then add class .active for .sidebarControl and .container-content-custom .content-custom
                if ($(window).width() >= 768) {
                    $('.sidebarControl').addClass('active');
                    $('.container-content-custom .content-custom').addClass('active');
                    $('.sidebarControl.active .sidebarItemWrap').tooltip('dispose');
                }
                // Listen click button .sidebarControl .action
                $('.sidebarControl .action').click(function() {
                    // Toggle class .active for .sidebarControl
                    $('.sidebarControl').toggleClass('active');
                    // Toggle class fa-chevron-right and fa-chevron-left for .sidebarControl .action i
                    $('.sidebarControl .action i').toggleClass('fa-chevron-right fa-chevron-left');
                    // Toggle class .active for .container-content-custom .content-custom
                    $('.container-content-custom .content-custom').toggleClass('active');
                    // If .sidebarControl has class .active then dispose tooltip for .sidebarControl .sidebarItemWrap
                    if ($('.sidebarControl').hasClass('active')) {
                        $('.sidebarControl.active .sidebarItemWrap').tooltip('dispose');
                    } else {
                        $('.sidebarControl .sidebarItemWrap').tooltip();
                    }
                });
            });
        </script>
        {{-- File js page inherit layouts --}}
        @stack('scripts')
</body>

</html>
