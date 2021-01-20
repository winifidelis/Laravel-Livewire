<?php

namespace App\Http\Livewire\Expense;

use App\Models\Expense;
use Livewire\Component;

class ExpenseEdit extends Component
{

    //a notação abaixo só funciona com PHP 7.4
    //public Expense $expense;

    public $amount;
    public $type;
    public $description;
    public $expense;

    protected $rules = [
        'amount' => 'required',
        'type' => 'required',
        'description' => 'required'
    ];

    //a classe mount é como se fosse o construtor da classe
    //mas ele é executado no momento a montagem da classe
    //quando o componente é montado
    public function mount(Expense $expense){
        //dd($expense);
        $this->expense = $expense;
        $this->amount = $expense->amount;
        $this->type = $expense->type;
        $this->description = $expense->description;
    }

    public function updateExpense(){
        $this->validate();
        //dd($this->expense);

        $this->expense->update([
            'amount' => $this->amount,
            'type' => $this->type,
            'description' => $this->description,
        ]);

        session()->flash('message','Registro atualizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.expense.expense-edit');
    }
}
