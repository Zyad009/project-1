<div class="card-body">
    <div class="mb-3">
        <input type="text" wire:model.live='search' class="form-control w-25" placeholder="Search">
    </div>


    <div class="table-responsive text-nowrap">
        @if (count($data) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th width="90%">Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($data as $record )
                <tr>
                    <td>{{$record->email}}</td>
                    <td>
                        {{-- <div class="dropdown"> --}}
                            {{-- <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button> --}}
                            <div class="text-center ">
                                <a class="text-danger" href="#"
                                    wire:click.prevent='$dispatch("deleteSubscribers" , {id: {{$record->id}} })'>
                                    <i class="bx bx-trash me-1"></i></a>
                            </div>
                        {{-- </div> --}}
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