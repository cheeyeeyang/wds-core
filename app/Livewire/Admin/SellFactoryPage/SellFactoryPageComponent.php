<?php

namespace App\Livewire\Admin\SellFactoryPage;

use App\Models\TbProduct;
use Livewire\Component;
use Livewire\WithPagination;

class SellFactoryPageComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $index = 0;
    public function render()
    {
             $products = TbProduct::orderBy('id','desc')->get();
        // if($this->index){

        // }
        return view('livewire.admin.sell-factory-page.sell-factory-page-component',compact('products'))->layout('layouts.base');
    }

    public function setIndex()
    {
        $this->index = 0;
    }
}
