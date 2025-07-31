<x-admin-layout title="Dashboard" bodyClass="bg-gray-100">
    {{-- Cards --}}
    <div class="row mb-4">
        <x-admin.dashboard-card title="Card 1" value="50" />
        <x-admin.dashboard-card title="Card 2" value="50" />
        <x-admin.dashboard-card title="Card 3" value="50" />
        <x-admin.dashboard-card title="Card 4" value="50" />
    </div>

    {{-- Charts --}}
    <div class="row">
        <div class="col-md-6">
            <div class="chart-box">Website visits</div>
        </div>
        <div class="col-md-6">
            <div class="chart-box">Website visits</div>
        </div>
    </div>
</x-admin-layout>
