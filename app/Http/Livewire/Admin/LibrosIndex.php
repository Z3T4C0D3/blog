<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\libros;
use Livewire\WithPagination;

class LibrosIndex extends Component
{
    use WithPagination;
    //Propiedad para indicar que seleccione bootstrap y no TailwindUI
    protected $paginationTheme = "bootstrap";
    //Propiedad para barra de busqueda de libros
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $libros = libros::where('user_id', auth()->user()->id)
            ->where('titulo', 'LIKE', '%' . $this->search . '%')
            ->latest('id')
            ->paginate();
        return view('livewire.admin.libros-index', compact('libros'));
    }
}
