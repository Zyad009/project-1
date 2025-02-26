@extends("admin.layouts.app")
@section("title" , "services")
@section("services-active" , "active")
@push("icon")
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
@endpush
@section("admin-content")

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="mb-3">
        <h4 class="fw-bold py-3 mb-4 d-inline">Services</h4>
        <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal"
            data-bs-target="#createModel">
            Add Service
        </button>

        <!-- Modal -->
        <livewire:admin.livewire.services.create-services>
    </div>
    <div class="card mb-4">
            <livewire:admin.livewire.services.data-services>
    </div>
    <livewire:admin.livewire.services.edit-services>
        <livewire:admin.livewire.services.delete-services>

</div>

@endsection