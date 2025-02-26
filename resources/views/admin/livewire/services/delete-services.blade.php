<x-model.delete title="Delete Service" deleteName="{{$name}}">
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