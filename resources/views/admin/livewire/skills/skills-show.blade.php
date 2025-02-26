<x-model.show title='{{$title}} :-'>

    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <div class="form-control">
            {{$title}}
        </div>
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Progress</label>
        <div class="form-control">
            {{$progress}}
        </div>
    </div>
</x-model.show>


{{-- <div class="modal fade" id="showSkillModel" tabindex="-1" style="display: none;" aria-hidden="true"
    wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit Skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row ">
                    <div class="col-md-6 mb-0">
                        <label class="form-label">Name</label>
                        <input type="text" wire:model='name' class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-6 mb-0">
                        <label class="form-label">Progress</label>
                        <input type="text" wire:model='progress' class="form-control" min="1" placeholder="10">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div> --}}