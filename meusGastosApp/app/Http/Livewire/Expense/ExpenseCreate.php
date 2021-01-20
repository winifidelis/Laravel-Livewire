<?php

namespace App\Http\Livewire\Expense;

use Livewire\Component;
use App\Models\Expense;

class ExpenseCreate extends Component
{
    public $amount;
    public $type;
    public $description;

    protected $rules = [
        'amount' => 'required',
        'type' => 'required',
        'description' => 'required'
    ];

    public function createExpense()
    {
        $this->validate();
        
        //dd($this->amount, $this->description, $this->type);
        Expense::create([
            'amount' => $this->amount,
            'type' => $this->type,
            'description' => $this->description,
            'user_id' => 1
        ]);

        session()->flash('message','Registro criado com sucesso');
        //para saber
        //uma sessão flash é excluida assim que ela é exibida


        //depois de excluir tudo eu limpo o campo
        $this->amount = $this->description = null;
    }

    public function render()
    {
        return view('livewire.expense.expense-create');
    }
}
