<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;



class UserForm extends Component
{
    public $name;

    public $email;

    public $password;

    public $user_id;

    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email|unique:users,email'. ($this->user_id ? ',' . $this->user_id : ''),
            'password'=> $this->user_id ? '' : 'required',
        ];
    }

    public function save()
    {
        $this->validate();

        if($this->user_id) {

            $data = [
                'name' => $this->name,
                'email' => $this->email,
            ];

            if($this->password) {
                $data['password'] = $this->password;
            }

            User::find($this->user_id)->update($data);

            $succesMsg = 'Utente modificato correttamente.';

        }else {
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
            ]);

            $succesMsg = 'Utente creato correttamente.';
        }

        $this->reset('name','email','password','user_id');

        session()->flash('success', $succesMsg);

        $this->dispatch('user-created');
    }

    #[On('edit-user')]
    public function editUser(User $user)
    {
        $this->user_id = $user->id;

        $this->name = $user->name;

        $this->email = $user->email;

        $this->resetErrorBag();
    }

    public function render()
    {
        return view('livewire.user-form');
    }
}
