@extends("admin.layouts.app")
@section("title" , "counters")
@section("counters-active" , "active")
@push("icon")
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
@endpush
@section("admin-content")

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="mb-3">
        <h4 class="fw-bold py-3 mb-4 d-inline">Counters</h4>
        <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal"
            data-bs-target="#createModel">
            Add Counter
        </button>

        <!-- Modal -->
        <livewire:admin.livewire.counters.create-counters>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <livewire:admin.livewire.counters.data-counters>
        </div>
    </div>
    <livewire:admin.livewire.counters.edit-counters>
        <livewire:admin.livewire.counters.delete-counters>

</div>

@endsection