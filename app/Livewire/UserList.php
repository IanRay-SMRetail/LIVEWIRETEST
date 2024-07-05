<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User as User;
use Illuminate\Support\Facades\DB;

class UserList extends Component
{
    use WithPagination;

    public string $query = " ";

    public function search()
    {
        $this->resetPage();
    }
    public function render()
    {

        return view('livewire.user-list', ['users' => User::where('active', 1)
            ->where('LastName', 'like', '%' . $this->query . '%')
            ->paginate(10)]);
    }
}
