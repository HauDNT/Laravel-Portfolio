@push('scripts')
    <script src="{{ asset('js/navbar.js') }}"></script>
@endpush

<nav id="adminNavbar" class="navbar navbar-expand-lg sticky-top z-3 py-3">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between align-items-center" id="navbarNav">
            <div class="navbar-breadcrum">
                {!! Breadcrumbs::render() !!}
            </div>
            <div class="navbar-others">
                <x-heroicon-o-chevron-down id="adminNavbarIcon" class="navbar-others--icon" />
                <div id="adminNavbarMenu" class="navbar-others--menu d-none">
                    <ul>
                        <li>
                            <a href="#">Đăng xuất</a>
                        </li>
                        <li>
                            <a href="#">Chia sẻ thông tin</a>
                        </li>
                        <li>
                            <a href="#">Báo cáo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
