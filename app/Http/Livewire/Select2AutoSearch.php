<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Asantibanez\LivewireSelect\LivewireSelect;
use Illuminate\Support\Collection;

class Select2AutoSearch extends LivewireSelect
{

    public function options($searchTerm = null) : Collection
    {
        return User::query()
        ->when($this->hasDependency('user_id'), function ($query) {
            $query->where('user_id', $this->getDependingValue('user_id'));
        })
        ->when($searchTerm, function ($query, $searchTerm) {
            $query->where('name', 'like', "%$searchTerm%");
        })
        ->get()
        ->map(function(User $user){
            return [
                'value' => $user->id,
                'description' => $user->name
            ];
        });
    }

    public function selectedOption($value)
    {
        $user = User::find($value);

        return [
            'value' => $user->id,
            'description' => $user->name
        ];
    }
}
