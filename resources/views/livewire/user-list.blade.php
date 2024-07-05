<div>
    <h5>Search Employee by Name...</h5>
        <input type="text" wire:model.live="query" class="form-control" wire:keyup="search">
        {{-- <button type="submit" wire:click="search" class="btn btn-success mt-2">Go!</button> --}}
    @foreach ($users as $user)
        <p>{{$user->LastName}} / {{$user->UserID}}</p>
    @endforeach
    {{$users->links('vendor.livewire.bootstrap')}}
</div>
