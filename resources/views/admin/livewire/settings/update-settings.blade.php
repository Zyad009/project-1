<form class="row" wire:submit.prevent="submit">
    <div class="col-md-6 mt-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" wire:model.blur="settings.name" placeholder="Name">
        <x-message.error name="settings.name"></x-error>
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" wire:model.blur="settings.email" placeholder="Email">
        <x-message.error name="settings.email"></x-error>
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">Address</label>
        <input type="text" class="form-control" wire:model.blur="settings.address" placeholder="Address">
        <x-message.error name="settings.address"></x-error>
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">Phone</label>
        <input type="text" class="form-control" wire:model.blur="settings.phone" placeholder="Phone">
        <x-message.error name="settings.phone"></x-error>
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">Linkedin</label>
        <input type="text" class="form-control" wire:model.blur="settings.linkedin" placeholder="Linkedin">
        <x-message.error name="settings.linkedin"></x-error>
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">Facebook</label>
        <input type="text" class="form-control" wire:model.blur="settings.facebook" placeholder="Facebook">
        <x-message.error name="settings.facebook"></x-error>
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">Instagram</label>
        <input type="text" class="form-control" wire:model.blur="settings.instagram" placeholder="Instagram">
        <x-message.error name="settings.instagram"></x-error>
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">Twitter</label>
        <input type="text" class="form-control" wire:model.blur="settings.twitter" placeholder="Twitter">
        <x-message.error name="settings.twitter"></x-error>
    </div>
    <div class="col-md-12 mt-4">
            <x-button.submit name="Save" />
    </div>
</form>