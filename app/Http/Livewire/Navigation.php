<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\clasificaciones;

class Navigation extends Component
{
    public function render()
    {
        $clasificaciones = clasificaciones::all();

        return view('livewire.navigation', compact('clasificaciones'));
    }
}
