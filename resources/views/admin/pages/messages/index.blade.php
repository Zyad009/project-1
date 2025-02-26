@extends("admin.layouts.app")
@section("title" , "messages")
@section("messages-active" , "active")
@section("admin-content")

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="mb-3">
        <h4 class="fw-bold py-3 mb-4 d-inline">Messages</h4>
    </div>
    <div class="card mb-4">
        <livewire:admin.livewire.messages.data-messages>
    </div>
    <livewire:admin.livewire.messages.show-messages>
        <livewire:admin.livewire.messages.delete-messages>

</div>

@endsection