<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\note;
use Illuminate\Support\Facades\Auth;
use App\Models\Todo;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class Home extends Component
{


    public $modalOpen=false;
    public $notes,$note;

    public $count_todo;
    public $count_note;

    public function render()
    {
        $this->count_todo=Todo::where('user_id',Auth::id())->where('status','undone')->get()->count();
        $this->count_note=Note::where('user_id',Auth::id())->get()->count();

        $this->notes=note::where('user_id',Auth::id())->get();
        return view('livewire.home');

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


    public function logout(Request $request)
    {
        Auth::logout();

        return ('/home');
    }
}
