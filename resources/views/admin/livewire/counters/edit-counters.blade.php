<x-model.edit title="Edit Skill">
<div class="col-md-4 mb-0">
        <label class="form-label">Name</label>
        <input type="text" wire:model='name' class="form-control" placeholder="Name">
        <x-message.error name="name"></x-message.error>
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Count</label>
        <input type="number" wire:model='count' class="form-control" min="0" placeholder="10">
        <x-message.error name="count"></x-message.error>
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" wire:model='icon' class="form-control" placeholder="icon">
        <x-message.error name="icon"></x-message.error>
    </div>
</x-model.edit>