@extends("admin.layouts.app")
@section("title" , "settings")
@section("settings-active" , "active")
@section("admin-content")

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Settings</h4>
    <div class="card mb-4">
        <div class="card-body">
            <livewire:admin.livewire.settings.update-settings>
        </div>
    </div>
</div>

@endsection