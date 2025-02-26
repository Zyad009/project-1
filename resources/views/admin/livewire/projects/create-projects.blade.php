<x-model.create title="Add New Project">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" wire:model='name' class="form-control" placeholder="Name">
        <x-message.error name="name"></x-message.error>
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Link</label>
        <input type="url" wire:model='link' class="form-control" placeholder="Link">
        <x-message.error name="link"></x-message.error>
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">image</label>
        <input type="file" id="image" wire:model='image' class="form-control">
        <x-message.error name="image"></x-message.error>
        <div wire:loading wire:target="image" class="text-success">Uploading...</div>
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Category</label>
        <select wire:model='category_id' class="form-control">
            <option value="">Selet Category</option>
            @if (count($categories) > 0 )
            @foreach ($categories as $category )
                <option value="{{$category->id}}" wire:key="category-{{$category->id}}">{{$category->name}}</option>
            @endforeach
            @endif
        </select>
        <x-message.error name="category_id"></x-message.error>
    </div>
    @if ($image)
    <div class="my-4">
        <img src="{{ $image->temporaryUrl() }}" width="40%" height="150px">
    </div>
        @endif
    <div class="col-md-12 mb-0">
        <label class="form-label">Description</label>
        <textarea wire:model='description' class="form-control" placeholder="Name"></textarea>
        <x-message.error name="description"></x-message.error>
    </div>
</x-model.create>