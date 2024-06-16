<?php

namespace App\Livewire\Admin\Settings;

use App\Models\TbPermission;
use Livewire\Component;
use Livewire\WithPagination;

class DefineUserRigthComponent extends Component
{
    
    public function render()
    {
        return view('livewire.admin.settings.define-user-rigth-component')->layout('layouts.base');
    }

    public function showDefineRights()
    {
        $this->dispatch('show-modal-define-rights');
    }

   
}
