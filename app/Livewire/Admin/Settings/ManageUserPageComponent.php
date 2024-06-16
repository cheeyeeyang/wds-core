<?php

namespace App\Livewire\Admin\Settings;

use App\Models\TbRole;
use Livewire\Component;
use Livewire\WithPagination;

class ManageUserPageComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $rolename,$search, $hiddenId;
    
    public function render()
    {

        
        $roles = TbRole::orderBy('id', 'desc')->where(function ($q) {
            $q->where('role', 'like', '%' . $this->search . '%');
        })->paginate(8);

        return view('livewire.admin.settings.manage-user-page-component',compact('roles'))->layout('layouts.base');
    }
    
    public function resetFiled()
    {
        $this->rolename = '';
        $this->hiddenId = '';
    }

    public function create_Store()
    {
        $updateId = $this->hiddenId;

        if ($updateId > 0) {

            $this->validate([
                'rolename' => 'required',
            ], [
                'rolename.required' => 'ກະລຸນາໃສ່ ຊື່ສິດກ່ອນ!',
            ]);

            try {

                $update = TbRole::find($updateId);

                $update->role = $this->rolename;

                $update->update();
                $this->resetFiled();
                $this->dispatch('edit');
            } catch (\Exception $ex) {
                $this->dispatch('something_went_wrong');
            }
        } else {

            $this->validate([
                'rolename' => 'required',
            ], [
                'rolename.required' => 'ກະລຸນາໃສ່ ຊື່ສິດກ່ອນ!',
            ]);

            try {

                $add = new TbRole();
                if ($this->rolename) {
                    $add->role = $this->rolename;
                }

                $add->save();
                $this->resetFiled();
                $this->dispatch('add');
            } catch (\Exception $e) {
                $this->dispatch('something_went_wrong');
            }
        }
    }
    public function show_edit($id)
    {
        $edit = TbRole::find($id);
        $this->hiddenId = $id;
        $this->rolename = $edit->role;
    }

    // public function show_detory($id)
    // {
    //     $this->dispatch('show-modal-delete');
    //     $show_user = TbRole::find($id);
    //     $this->hiddenId = $id;
    // }

    // public function create_Detory()
    // {
    //     $id = $this->hiddenId;

    //     $data = TbRole::find($id);
    //     $data->delete();
    //     $this->dispatch('delete');
    //     $this->dispatch('hide-modal-delete');
    // }
}
