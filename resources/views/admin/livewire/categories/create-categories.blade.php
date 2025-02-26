<x-model.create title="Add New Category">
    <div class="col-md-4 mb-0">
        <label class="form-label">Name</label>
        <input type="text" wire:model='name' class="form-control" placeholder="Name">
        <x-message.error name="name"></x-message.error>
    </div>
</x-model.create>