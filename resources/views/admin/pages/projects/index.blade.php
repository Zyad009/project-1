@extends("admin.layouts.app")
@section("title" , "projects")
@section("projects-active" , "active")
@section("admin-content")

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="mb-3">
        <h4 class="fw-bold py-3 mb-4 d-inline">projects</h4>
        <x-button.create name="Project"></x-button.create>

        <!-- Modal -->
        <livewire:admin.livewire.projects.create-projects>
    </div>
    <div class="card mb-4">
        <livewire:admin.livewire.projects.data-projects>
    </div>
    <livewire:admin.livewire.projects.edit-projects>
        <livewire:admin.livewire.projects.delete-projects>

</div>

@endsection