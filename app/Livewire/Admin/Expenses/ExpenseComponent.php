<?php

namespace App\Livewire\Admin\Expenses;

use Livewire\Component;

class ExpenseComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.expenses.expense-component')->layout('layouts.base');
    }
}
