@extends("admin.layouts.app")
@section("title" , "subscribers")
@section("subscribers-active" , "active")
@section("admin-content")
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="mb-3">
    <h4 class="fw-bold py-3 mb-4 d-inline">Subscribrs</h4>
  </div>
  <div class="card mb-4">
    <div class="card-body">
      <livewire:admin.livewire.subscribers.data-subscribers>
      </div>
      <livewire:admin.livewire.subscribers.delete-subscribers>
  </div>
    {{-- <livewire:admin.livewire.skills.skills-delete> --}}
</div>
@endsection