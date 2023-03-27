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
    public $base;



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


}
