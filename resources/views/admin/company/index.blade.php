{{-- Use layouts.backend --}}
@extends('layouts.backend')
{{-- Set title --}}
@section('title', 'Quản lý công ty')
{{-- Section styles --}}
@push('styles')
@endpush

{{-- Set subapp --}}
@section('subapp')
    <a class='d-flex justify-content-center align-items-center text-decoration-none buttonSidebar' data-bs-toggle="collapse"
        href="#sidebarControl" role="button" aria-expanded="false" aria-controls="sidebarControl">
        <img src="{{ asset('assets/images/subapp/company.svg') }}" alt="icon-subapp" class="img-fluid me-2" width="36px">
        <h2 class="h4 m-0 text-black">Công ty</h2>
    </a>
@endsection
{{-- Section menu --}}
@section('menu')

@endsection
{{-- Section content --}}
@section('content')

@endsection

{{-- Section scripts --}}
@push('scripts')
@endpush
