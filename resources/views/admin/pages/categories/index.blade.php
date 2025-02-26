@extends("admin.layouts.app")
@section("title" , "categories")
@section("categories-active" , "active")
@section("admin-content")

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="mb-3">
        <h4 class="fw-bold py-3 mb-4 d-inline">Categories</h4>
        <x-button.create name="Category"></x-button.create>
        <!-- Modal -->
        <livewire:admin.livewire.categories.create-categories>
    </div>
    <div class="card mb-4">
        <livewire:admin.livewire.categories.data-categories>
    </div>
    <livewire:admin.livewire.categories.edit-categories>
    <livewire:admin.livewire.categories.delete-categories>

</div>

@endsection