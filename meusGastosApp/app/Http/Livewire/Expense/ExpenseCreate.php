<?php

namespace App\Http\Livewire\Expense;

use Livewire\Component;
use App\Models\Expense;

class ExpenseCreate extends Component
{
    public $amount;
    public $description;
    public $type;

    public function createExpense()
    {
        //dd($this->amount, $this->description, $this->type);
        Expense::create([
            'amount' => $this->amount,
            'type' => $this->type,
            'description' => $this->description,
            'user_id' => 1
        ]);
    }

    public function render()
    {
        return view('livewire.expense.expense-create');
    }
}
