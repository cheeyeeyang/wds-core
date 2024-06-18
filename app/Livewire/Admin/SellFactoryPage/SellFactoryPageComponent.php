<?php

namespace App\Livewire\Admin\SellFactoryPage;

use Livewire\Component;

class SellFactoryPageComponent extends Component
{
    public $index = 0;
    public function render()
    {

        // if($this->index){

        // }
        return view('livewire.admin.sell-factory-page.sell-factory-page-component')->layout('layouts.base');
    }

    public function setIndex()
    {
        $this->index = 0;
    }
}
