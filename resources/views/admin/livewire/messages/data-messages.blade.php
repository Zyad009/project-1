<div class="card-body">
    <x-button.search></x-button.search>

    <div class="table-responsive text-nowrap">
        @if (count($data) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th width="30%">Name</th>
                    <th width="30%">Email</th>
                    <th width="20%">Subject</th>
                    <th width="10%">Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($data as $record )
                {{-- @dd($record) --}}
                <tr>
                    <td>{{$record->name}}</td>
                    <td>{{$record->email}}</td>
                    <td>{{$record->subject}}</td>
                    <td>
                        <span class='{{$record->status == 0 ? "badge bg-label-primary me-1" : ""}}'>
                            {{$record->status == 0 ? "NOT Seen" : "Seen"}}
                        </span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"
                                    wire:click.prevent='$dispatch("messageShow" , {id : {{$record->id}} })'>
                                    <i class="bx bx-edit-alt me-1"></i>
                                    Show</a>
                                <a class="dropdown-item" href="#"
                                    wire:click.prevent='$dispatch("messageDelete" , {id: {{$record->id}} })'>
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