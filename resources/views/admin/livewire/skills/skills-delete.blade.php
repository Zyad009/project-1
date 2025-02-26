<x-model.delete title="Delete Skill" deleteName="{{$name}}">
    <form wire:submit.prevent='submit'>
        <div class="modal-body">
            Are You Sure To Delete?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
            </button>
            <x-button.submit name="Delete"></x-button.submit>
        </div>
    </form>
</x-model.delete>







{{-- 
<div class="modal fade" id="deleteSkillModel" tabindex="-1" style="display: none;" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Delete Skill ({{$name}})</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form wire:submit.prevent='submit'>
                <div class="modal-body">
                    Are You Sure To Delete?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <x-message.error name="Delete"></x-message.error>
                </div>
            </form>
        </div>
    </div>
</div> --}}