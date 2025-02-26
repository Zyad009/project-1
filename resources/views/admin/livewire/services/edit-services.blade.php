<x-model.edit title="Edit Service">
    <div class="col-md-4 mb-0">
        <label class="form-label">Name</label>
        <input type="text" wire:model='name' class="form-control" placeholder="Name">
        <x-message.error name="name"></x-message.error>
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" wire:model='icon' class="form-control" placeholder="icon">
        <x-message.error name="icon"></x-message.error>
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Description</label>
        <textarea wire:model='description' class="form-control"></textarea>
        <x-message.error name="description"></x-message.error>
    </div>
</x-model.edit>