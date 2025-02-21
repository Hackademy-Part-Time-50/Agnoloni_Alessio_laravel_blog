<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class UsersList extends Component
{
    public function deleteUser($user_id)
    {
        $user = User::find($user_id);

        $user->articles()->update(['user_id'=>null]);

        $user->delete();
    }

    public function editUser($user_id)
    {
        $this->dispatch('edit-user', $user_id);
    }

    #[On('user-created')]
    public function render()
    {
        return view('livewire.users-list', [
            'users' => User::all()
        ]);
    }
}
