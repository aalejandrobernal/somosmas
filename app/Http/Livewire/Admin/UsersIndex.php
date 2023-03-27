<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class UsersIndex extends Component
{
    use WithPagination;
    public $search;
    public $estado=1;
    protected $paginationTheme = "bootstrap";
    protected $listeners = ['render','deshabilitar','eliminar'];
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = User::
        where(function($search){
            $search->where('nombre','LIKE','%'.$this->search.'%')
            ->orwhere('documento','LIKE','%'.$this->search.'%');
        })

        ->where('estado',$this->estado)
        ->paginate(20);

        return view('livewire.admin.users-index', compact('users'));
    }
    public function deshabilitar(User $user)
    {
        if ($user->estado == 1  ){
            $user->update(['estado' => '0']);
        }
        else{
            $user->update(['estado' => '1']);
        }
    }
    public function eliminar(User $user)
    {
        $user->update(['estado' => '2']);
    }

}
