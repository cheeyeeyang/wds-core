<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;

class ManageUserPageComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.settings.manage-user-page-component')->layout('layouts.base');
    }
}
