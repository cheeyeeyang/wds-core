<?php

namespace App\Livewire\Admin\Settings;

use App\Models\TbPermission;
use Livewire\Component;
use Livewire\WithPagination;

class ManageRigthsComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $permission, $path, $search, $hiddenId;

    public function render()
    {
        $permissions = TbPermission::orderBy('id', 'desc')->where(function ($q) {
            $q->where('permission', 'like', '%' . $this->search . '%');
        })->paginate(8);
        return view('livewire.admin.settings.manage-rigths-component', compact('permissions'))->layout('layouts.base');
    }

    public function resetFiled()
    {
        $this->permission = '';
        $this->path = '';
        $this->hiddenId = '';
    }

    public function creat_Store()
    {
        $updateId = $this->hiddenId;

        if ($updateId > 0) {

            $validatedData = $this->validate([
                'permission' => 'required',
                'path' => 'required|url',  // Ensure path is a valid URL
            ], [
                'permission.required' => 'ກະລຸນາໃສ່ ຊື່ສິດທີກ່ອນ!',
                'path.required' => 'ກະລຸນາໃສ່ URL ກ່ອນ!',
                'path.url' => 'URL ບໍ່ຖືກຕ້ອງ!',
            ]);
        
            try {
                // Find the existing TbPermission record by its ID
                $update = TbPermission::findOrFail($updateId);
        
                // Update the record with new values
                $update->permission = $validatedData['permission'];
                $update->path = $validatedData['path'];
        
                // Save the updated record
                $update->save();
        
                // Reset the input fields
                $this->resetFiled();
        
                // Dispatch a success event
                $this->dispatch('edit');
            } catch (\Exception $ex) {
                // Handle the exception and dispatch an error event
                $this->dispatch('something_went_wrong');
            }

        } else {

            $validatedData = $this->validate([
                'permission' => 'required',
                'path' => 'required|url',  // Ensure path is a valid URL
            ], [
                'permission.required' => 'ກະລຸນາໃສ່ ຊື່ສິດທີກ່ອນ!',
                'path.required' => 'ກະລຸນາໃສ່ URL ກ່ອນ!',
                'path.url' => 'URL ບໍ່ຖືກຕ້ອງ!',
            ]);

            try {
                // Create a new TbPermission instance
                $add_Data = new TbPermission();
                $add_Data->permission = $validatedData['permission'];
                $add_Data->path = $validatedData['path'];

                // Save the new permission
                $add_Data->save();

                // Reset the input fields
                $this->resetFiled();

                // Dispatch a success event
                $this->dispatch('add');
            } catch (\Exception $e) {
                // Handle the exception and dispatch an error event
                $this->dispatch('something_went_wrong');
            }
        }
    }

    public function show_edit($id)
    {
        $edit = TbPermission::find($id);
        $this->hiddenId = $id;
        $this->permission = $edit->permission;
        $this->path = $edit->path;
    }

    public function show_detory($id)
    {
        $this->dispatch('show-modal-delete');
        $data = TbPermission::find($id);
        $this->hiddenId = $id;
    }

    public function create_Detory()
    {
        $id = $this->hiddenId;

        $data = TbPermission::find($id);
        $data->delete();
        $this->dispatch('delete');
        $this->dispatch('hide-modal-delete');
    }
}
