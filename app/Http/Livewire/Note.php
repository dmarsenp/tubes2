<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\catatan;
use Illuminate\Support\Facades\Auth;

class note extends Component
{

    public $modalOpen=false;
    public $notes,$note;


    public function render()
    {
        $this->notes=catatan::where('user_id',Auth::id())->get();
        return view('livewire.note');

    }

    public function modalOpen(){
        $this->modalOpen=!$this->modalOpen;

    }

    public function modalClose(){
        $this->modalOpen=false;
    }

    public function insert(){
        $notes = catatan::create([
            'user_id' => Auth::id(),
            'note' => $this->note,
        ]);
    }

    public function delete($id){
        catatan::find($id)->delete();

    }

    public function update(){
        $notes = catatan::find(1);

        $notes->note = 'Paris to London';

        $notes->save();
    }

}
