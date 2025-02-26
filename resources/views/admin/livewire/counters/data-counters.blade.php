<div class="card-body">
    <div class="mb-3">
        <input type="text" wire:model.live='search' class="form-control w-25" placeholder="Search">
    </div>


    <div class="table-responsive text-nowrap">
        @if (count($data) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th width="50%">Name</th>
                    <th width="20%">Count</th>
                    <th width="20%">Icon</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($data as $record )
                <tr>
                    <td>{{$record->name}}</td>
                    <td><span class="badge bg-label-primary me-1">{{$record->count}}</span></td>
                    <td>
                        <i class="{{$record->icon}} fa-3x text-secondary mb-3"></i>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"
                                    wire:click.prevent='$dispatch("counterUpdate" , {id : {{$record->id}} })'>
                                    <i class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="#"
                                    wire:click.prevent='$dispatch("counterDelete" , {id: {{$record->id}} })'>
                                    <i class="bx bx-trash me-1"></i>
                                    Delete</a>
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