<div class="card-body">
    <x-button.search></x-button.search>

    <div class="table-responsive text-nowrap">
        @if (count($data) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th width="40%">Name</th>
                    <th width="25%">Category</th>
                    <th width="25%">Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($data as $record )
                <tr>
                    <td>{{$record->name}}</td>
                    <td>{{$record->category?->name}}</td>
                    <td>
                        <img src="{{asset($record->image)}}" width="75px" height="75px"></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"
                                    wire:click.prevent='$dispatch("projectUpdate" , {id : {{$record->id}} })'>
                                    <i class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="#"
                                    wire:click.prevent='$dispatch("projectDelete" , {id: {{$record->id}} })'>
                                    <i class="bx bx-trash me-1"></i>
                                    Delete</a>
                                <a class="dropdown-item" href="#"
                                    wire:click.prevent='$dispatch("projectShow" , {id: {{$record->id}} })'>
                                    <i class="bx bx-trash me-1"></i>
                                    Show</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{$data->links()}}
        </div>
        @else
        <div class="text-center">
            <span class="text-danger">Ruselt Not Found</span>
        </div>
        @endif
    </div>
</div>