@extends("admin.layouts.app")
@section("title" , "skills")
@section("skills-active" , "active")
@section("admin-content")

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="mb-3">
        <h4 class="fw-bold py-3 mb-4 d-inline">Skills</h4>
        <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal" data-bs-target="#createModel">
            Add Skill
        </button>

        <!-- Modal -->
        <livewire:admin.livewire.skills.skills-create>
    </div>
    <div class="card mb-4">
        <livewire:admin.livewire.skills.skills-data>
    </div>
    <livewire:admin.livewire.skills.skills-edit>
    <livewire:admin.livewire.skills.skills-delete>
    <livewire:admin.livewire.skills.skills-show>
</div>

@endsection