@php
    $activeLink = 'activeLink';
    $inActiveLink = 'inActiveLink';
@endphp

<aside class="bg-teal-500 min-h-screen flex-shrink-0 admin-sidebar">
    <div class="sidebar-brand">
        <img class="sidebar-brand--image" src="/imgs/portfolio.png" />
    </div>

    <nav class="d-flex align-items-start flex-column sidebar-menu">
        <div
            class="sidebar-item d-flex align-items-center w-100 {{ request()->routeIs('admin.dashboard') ? $activeLink : $inActiveLink }}">
            <x-heroicon-o-home class="sidebar-item--icon" />
            <a href="{{ route('admin.dashboard') }}" class="sidebar-item--link flex-grow-1">
                Trang chủ
            </a>
        </div>
        <div
            class="sidebar-item d-flex align-items-center w-100 {{ request()->routeIs('admin.persional_profile') ? $activeLink : $inActiveLink }}">
            <x-heroicon-o-user class="sidebar-item--icon" />
            <a href="{{ route('admin.persional_profile') }}" class="sidebar-item--link flex-grow-1">
                Thông tin cá nhân
            </a>
        </div>
        <div
            class="sidebar-item d-flex align-items-center w-100 {{ request()->routeIs('admin.activities') ? $activeLink : $inActiveLink }}">
            <x-heroicon-o-globe-asia-australia class="sidebar-item--icon" />
            <a href="{{ route('admin.activities') }}" class="sidebar-item--link flex-grow-1">
                Hoạt động
            </a>
        </div>
        <div
            class="sidebar-item d-flex align-items-center w-100 {{ request()->routeIs('admin.portfolio_info') ? $activeLink : $inActiveLink }}">
            <x-heroicon-o-briefcase class="sidebar-item--icon" />
            <a href="{{ route('admin.portfolio_info') }}" class="sidebar-item--link flex-grow-1">
                Portfolio
            </a>
        </div>
        <div
            class="sidebar-item d-flex align-items-center w-100 {{ request()->routeIs('admin.settings') ? $activeLink : $inActiveLink }}">
            <x-heroicon-o-cog-8-tooth class="sidebar-item--icon" />
            <a href="{{ route('admin.settings') }}" class="sidebar-item--link flex-grow-1">
                Cài đặt chung
            </a>
        </div>
    </nav>
</aside>
