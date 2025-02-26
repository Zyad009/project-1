<x-model.edit title="Edit Skill">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" wire:model='name' class="form-control" placeholder="Name">
        <x-message.error name="name"></x-message.error>
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Progress</label>
        <input type="text" wire:model='progress' class="form-control" min="1" placeholder="10">
        <x-message.error name="progress"></x-message.error>
    </div>
</x-model.edit>
























{{-- <div class="modal fade" id="editSkillModel" tabindex="-1" style="display: none;" aria-hidden="true"
    wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit Skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='submit'>
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-md-6 mb-0">
                            <label class="form-label">Name</label>
                            <input type="text" wire:model='name' class="form-control" placeholder="Name">
                            <x-message.error name="name"></x-message.error>
                        </div>
                        <div class="col-md-6 mb-0">
                            <label class="form-label">Progress</label>
                            <input type="text" wire:model='progress' class="form-control" min="1" placeholder="10">
                            <x-message.error name="progress"></x-message.error>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <x-button.submit name="Save Change"></x-button.submit>
                </div>
            </form>
        </div>
    </div>
</div> --}}