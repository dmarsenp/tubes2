<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\note;
use Illuminate\Support\Facades\Auth;

class Modalnote extends Component
{
    public $modalOpen=false;
    public $notes,$note;


    public function render()
    {
        $this->notes=note::where('user_id',Auth::id())->get();
        return view('livewire.modalnote');
    }

    public function modalOpen(){
        $this->modalOpen=!$this->modalOpen;

    }

    public function modalClose(){
        $this->modalOpen=false;
    }

    public function insert(){
        $notes = note::create([
            'user_id' => Auth::id(),
            'note' => $this->note,
        ]);
    }

    public function update(){
        $notes = note::find(1);

        $notes->note = 'Paris to London';

        $notes->save();
    }
}
