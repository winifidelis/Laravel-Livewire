<?php

namespace App\Http\Livewire\Expense;

use App\Models\Expense;
use Livewire\Component;

class ExpenseList extends Component
{
    public function render()
    {
        //$expenses = Expense::all(['id','description','amount','type','created_at']);
        $expenses = Expense::paginate(3);
        return view('livewire.expense.expense-list', compact('expenses'));
    }

    public function remove($expense){
        $exp = Expense::find($expense);
        $exp->delete();

        session()->flash('message','Registro removido com sucesso!');
    }
}
