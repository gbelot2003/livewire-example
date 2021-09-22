<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class UsersTable extends Component
{
    use WithPagination;

    public $search = ''; 
    public $sortField = "created_at";
    public $sortDirection = "asc";
    protected $queryString = ['search', 'sortField', 'sortDirection'];
    public $showEditModal = false;
    public User $editing;
    public $roles;
    public $rolId;
    public $roleSelected;

    public function mount()
    {
        $this->roles = Role::all();
    }
    

    protected $rules = [
        'editing.name' => 'required',
        'editing.email' => 'required',
        'editing.state' => 'required',
        'roleSelected' => 'required',
    ];
    /**
     * function sortBy
     *
     * @param [type] $field
     * @return void
     */
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'desc';
        }

        $this->sortField = $field;
    }
    
    /**
     * function close
     */
    public function close()
    {
        $this->reset('roleSelected');
        $this->showEditModal = false;
    }

    /**
     * function edit
     *
     * @param User $user
     * @return void
     */
    public function edit(User $user)
    {
        $this->editing = $user;
        $this->roleSelected = str_replace(array('[',']'), "", $user->roles->pluck('id'));
        $this->showEditModal = true;
    }

    /**
     * Function save
     *
     * @return void
     */
    public function save()
    {
        $this->validate();
        
        $roles = $this->editing->roles;
        unset($this->editing->roles);

        $this->editing->save();
        $this->editing->roles()->sync($this->roleSelected);

        $this->showEditModal = false;
    }

    public function render()
    {
        /**TODO:crear un filtro de busquedas mas amplio */
        return view('livewire.users.users-table', [
            'users' => User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'LIKE', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10),
        ]);
    }
}
