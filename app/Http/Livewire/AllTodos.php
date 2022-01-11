<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AllTodos extends Component
{

    public $todo, $item;
    public $todo_done,$todo_undone;

    public function render(){
        $this->todo_done=Todo::where('user_id',Auth::id())->where('status','done')->get();
        $this->todo_undone=Todo::where('user_id',Auth::id())->where('status','undone')->get();
        return view('livewire.all-todos');
    }


    public function insert(){
        $todo = Todo::create([
            'user_id' => Auth::id(),
            'item' => $this->item,
            'status' => "undone",
        ]);
    }

    public function delete($id){
        Todo::find($id)->delete();

    }

    public function done($id){
        $todo = Todo::find($id);

        $todo->status = "undone";

        $todo->save();
    }

    public function undone($id){
        $todo = Todo::find($id);

        $todo->status = "done";

        $todo->save();
    }


}

