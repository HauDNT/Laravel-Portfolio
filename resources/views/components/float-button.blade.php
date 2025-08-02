<div id="adminSidebarToggle" class="d-md-none float-button">
    <div id="mobile-sidebar" class="mobile-sidebar">
        <x-heroicon-o-chevron-double-right id="float-button--icon--show" class="float-button--icon" />
        <x-heroicon-o-chevron-double-left id="float-button--icon--hide" class="d-none float-button--icon" />
        <ul class="mobile-sidebar-list">
            <li class="mobile-sidebar-item">
                <x-heroicon-o-home class="mobile-sidebar-item--icon" />
                <a href="{{ route('admin.dashboard') }}" class="mobile-sidebar-item--link flex-grow-1">
                    Trang chủ
                </a>
            </li>
            <li class="mobile-sidebar-item">
                <x-heroicon-o-user class="mobile-sidebar-item--icon" />
                <a href="{{ route('admin.persional_profile') }}" class="mobile-sidebar-item--link flex-grow-1">
                    Thông tin cá nhân
                </a>
            </li>
            <li class="mobile-sidebar-item">
                <x-heroicon-o-globe-asia-australia class="mobile-sidebar-item--icon" />
                <a href="{{ route('admin.activities') }}" class="mobile-sidebar-item--link flex-grow-1">
                    Hoạt động
                </a>
            </li>
            <li class="mobile-sidebar-item">
                <x-heroicon-o-briefcase class="mobile-sidebar-item--icon" />
                <a href="{{ route('admin.portfolio_info') }}" class="mobile-sidebar-item--link flex-grow-1">
                    Portfolio
                </a>
            </li>
            <li class="mobile-sidebar-item">
                <x-heroicon-o-cog-8-tooth class="mobile-sidebar-item--icon" />
                <a href="{{ route('admin.settings') }}" class="mobile-sidebar-item--link flex-grow-1">
                    Cài đặt chung
                </a>
            </li>
        </ul>
    </div>
</div>
