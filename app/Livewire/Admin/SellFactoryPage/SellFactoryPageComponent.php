<?php

namespace App\Livewire\Admin\SellFactoryPage;

use App\Models\TbPrice;
use App\Models\TbProduct;
use Illuminate\Support\Facades\DB;
use Cart; // Import the Cart facade
use Livewire\Component;
use Livewire\WithPagination;

class SellFactoryPageComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $index = 0;
    public function render()
    {
        $products = TbProduct::orderBy('id', 'desc')->get();
        // if($this->index){

        // }
        return view('livewire.admin.sell-factory-page.sell-factory-page-component', compact('products'))->layout('layouts.base');
    }

    public function setIndex()
    {
        $this->index = 0;
    }

    public function addToCart($id)
    {
        try {
            DB::beginTransaction();
            $check_data = TbProduct::find($id);
            $cart = Cart::content()->where('id', $id)->first();
            if (!$cart) { // Corrected logic: add only if the item is not already in the cart
                Cart::add($check_data->product_name, 1, $check_data->price_cost);
            }

            DB::commit();
            $this->dispatch('add'); // Correct event dispatching for Livewire
        } catch (\Exception $ex) {
            dd($ex);
            DB::rollBack();
            $this->dispatch('something_went_wrong'); // Correct event dispatching for Livewire
        }
    }
}
