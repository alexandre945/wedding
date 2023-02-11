<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;
use Livewire\WithPagination;

class Messagen extends Component
{
    use WithPagination; 

    public $name;
    public $kin;
    public $message;

    protected $rules = [
        'name' => 'required',
        'kin' => 'required',
        'message' => 'required'
    ];

    public $messages = [
        'name.required' => 'O Campo name é Obrigatório',
        'kin.required' => "O Campo Parentesco é Obrigatório",
        'message.required'=> 'O Campo menssagem é obrigatório'

    ];


    public function create(){
        // dd($this->message);
        $this->validate();
             Message::create([
            'name' => $this->name, 
            'kin' => $this->kin, 
            'message' => $this->message]);

            $this->name = $this->kin = $this->message = null;
            session()->flash('sucesso', 'Mensagem Enviada com sucesso');
    }

    public function render()
    {
        $key = Message::paginate(2);
        return view('livewire.message',compact('key'));
    }
}
