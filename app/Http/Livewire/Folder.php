<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\file;

class Folder extends Component
{

    public $photo;

    public function render()
    {
        return view('livewire.folder');
    }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $this->photo->store('photos');
    }
}
