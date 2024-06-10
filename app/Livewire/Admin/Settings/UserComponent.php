<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;

class UserComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.settings.user-component')->layout('layouts.base');
    }
}
