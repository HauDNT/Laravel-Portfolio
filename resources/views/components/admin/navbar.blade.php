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
            <div class="navbar-breadcrum">Navbar > Breadcrum</div>
            <div class="navbar-others">
                <x-heroicon-o-home style="width: 24px; height: 24px; color: gray;" />
            </div>
        </div>
    </div>
</nav>
