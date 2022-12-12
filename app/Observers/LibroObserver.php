<?php

namespace App\Observers;

use App\Models\libros;
use Illuminate\Support\Facades\Storage;

class LibroObserver
{
    /**
     * Handle the libros "created" event.
     *
     * @param  \App\Models\libros  $libros
     * @return void
     */
    public function creating(libros $libro)
    {
        if (! \App::runningInConsole()) {
            $libro->user_id = auth()->user()->id;
        }
    }
    /**
     * Handle the libros "deleted" event.
     *
     * @param  \App\Models\libros  $libros
     * @return void
     */
    public function deleting(libros $libro)
    {
        if ($libro->image) {
            Storage::delete($libro->image->url);
        }
    }

}
