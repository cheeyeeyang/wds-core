<?php

namespace App\Livewire\Admin\Expenses;

use App\Models\TbExpense;
use App\Models\TbExport;
use App\Models\TbUnit;
use Livewire\Component;
use Livewire\WithPagination;

class ExpenseComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name, $qty, $unitId, $amount, $userId, $search, $hiddenId;
    public function render()
    {
        $units = TbUnit::orderBy('id', 'desc')->get();
        $expenses = TbExpense::orderBy('id', 'desc')->where(function ($q) {
            $q->where('bill_name', 'like', '%' . $this->search . '%');
        });

        if (!empty($expenses)) {
            $expenses = $expenses->paginate(8);
        } else {
            $expenses = [];
        }

        return view('livewire.admin.expenses.expense-component', compact('expenses', 'units'))->layout('layouts.base');
    }

    public function resetForm()
    {
        $this->name = '';
        $this->qty = '';
        $this->unitId = '';
        $this->amount = '';
        $this->userId = '';
        $this->hiddenId = '';
    }

    public function Store()
    {

        $UpdateId = $this->hiddenId;

        if ($UpdateId > 0) {

            $this->validate([
                'name' => 'required',
                'qty' => 'required',
                'unitId' => 'required',
                'amount' => 'required',
            ], [
                'name.required' => 'ກະລຸນາໃສ່ຊື່ກ່ອນ!',
                'qty.required' => 'ກະລຸນາໃສ່ຈຳນວນກ່ອນ!',
                'unitId.required' => 'ກະລຸນາເລືອກຫົວໜ່ອຍກ່ອນ!',
                'amount.required' => 'ກະລຸນາໃສ່ຈຳນວນເງິນກ່ອນ!',
            ]);

            try {

                $update_Data = TbExpense::find($UpdateId);
                $update_Data->bill_name = $this->name;
                $update_Data->qty = $this->qty;
                $update_Data->unit_id = $this->unitId;
                $update_Data->amount = str_replace(',', '', $this->amount);

                $update_Data->update();
                $this->resetForm();
                $this->dispatch('edit');
            } catch (\Exception $e) {
                $this->dispatch('something_went_wrong');
            }
        } else {

            $this->validate([
                'name' => 'required',
                'qty' => 'required',
                'unitId' => 'required',
                'amount' => 'required',
            ], [
                'name.required' => 'ກະລຸນາໃສ່ຊື່ກ່ອນ!',
                'qty.required' => 'ກະລຸນາໃສ່ຈຳນວນກ່ອນ!',
                'unitId.required' => 'ກະລຸນາເລືອກຫົວໜ່ອຍກ່ອນ!',
                'amount.required' => 'ກະລຸນາໃສ່ຈຳນວນເງິນກ່ອນ!',
            ]);

            try {

                $add_Data = new TbExpense();
                $add_Data->bill_name = $this->name;
                $add_Data->qty = $this->qty;
                $add_Data->unit_id = $this->unitId;
                $add_Data->amount = str_replace(',', '', $this->amount);
                $add_Data->user_id = auth()->user()->id;

                $add_Data->save();
                $this->resetForm();
                $this->dispatch('add');
            } catch (\Exception $ex) {
                $this->dispatch('something_went_wrong');
            }
        }
    }

    public function Edit($id)
    {
        $edit = TbExpense::find($id);
        $this->hiddenId = $id;
        $this->name = $edit->bill_name;
        $this->qty = $edit->qty;
        $this->unitId = $edit->unit_id;
        $this->amount = $edit->amount;
    }

    public function detory($id)
    {
        $this->dispatch('show-modal-delete');
        $data = TbExpense::find($id);
        $this->hiddenId = $data->id;
    }

    public function deleteData()
    {
        $id = $this->hiddenId;

        $Data = TbExpense::find($id);
        $Data->delete();
        $this->dispatch('delete');
        $this->resetForm();
        $this->dispatch('hide-modal-delete');
    }
}
