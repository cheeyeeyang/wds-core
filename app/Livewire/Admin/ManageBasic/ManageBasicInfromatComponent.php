<?php

namespace App\Livewire\Admin\ManageBasic;

use App\Models\TbProduct;
use App\Models\TbUnit;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ManageBasicInfromatComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $barcode, $hiidenId_product, $product_name, $unit_id, $price_cost;
    public $name_units, $hiidenId_units;
    public function render()
    {
        $search = $this->search;

        $products = TbProduct::orderBy('id', 'desc')->where(function ($q) {
            $q->where('product_name', 'like', '%' . $this->search . '%');
        })->paginate(8);
        $selectUnits = TbUnit::orderBy('id', 'desc')->get();
        $units = TbUnit::orderBy('id', 'desc')->where(function ($q) {
            $q->where('name', 'like', '%' . $this->search . '%');
        })->paginate(8);
        return view('livewire.admin.manage-basic.manage-basic-infromat-component', compact('units', 'selectUnits', 'products'))->layout('layouts.base');
    }

    // <!-- show ຂໍ້ມູນສິນຄ້າ -->
    public function show_DataProducts()
    {
        $this->dispatch('show-modal-data-products');
    }
    public function resetForm_product()
    {
        $this->hiidenId_product = '';
        $this->product_name = '';
        $this->unit_id = '';
        $this->price_cost = '';
    }
    // add-edit ເພີ່ມຂໍ້ມູນສິນຄ້າ
    public function Store_products()
    {
        $updateId = $this->hiidenId_product;

        if ($updateId > 0) {

            $this->validate([
                'product_name' => 'required',
                'unit_id' => 'required',
                'price_cost' => 'required',
            ], [
                'product_name.required' => 'ກະລຸນາໃສ່ຊື່ສິນຄ້າກ່ອນ!',
                'unit_id.required' => 'ກະລຸນາເລືອກຫົວໜ່ອຍກ່ອນ!',
                'price_cost.required' => 'ກະລຸນາໃສ່ລາຄາກ່ອນນ!',
            ]);
            try {
                DB::beginTransaction();
                $Edit_product = TbProduct::find($updateId);
                $Edit_product->product_name = $this->product_name;
                $Edit_product->unit_id = $this->unit_id;
                $Edit_product->price_cost = str_replace(',', '', $this->price_cost);

                $Edit_product->update();
                DB::commit();
                $this->resetForm_product();
                $this->dispatch('edit');
            } catch (\Exception $e) {
                DB::rollBack();
                $this->dispatch('something_went_wrong');
            }
        } else {

            $this->validate([
                'product_name' => 'required',
                'unit_id' => 'required',
                'price_cost' => 'required',
            ], [
                'product_name.required' => 'ກະລຸນາໃສ່ຊື່ສິນຄ້າກ່ອນ!',
                'unit_id.required' => 'ກະລຸນາເລືອກຫົວໜ່ອຍກ່ອນ!',
                'price_cost.required' => 'ກະລຸນາໃສ່ລາຄາກ່ອນນ!',
            ]);
            try {
                DB::beginTransaction();
                $add_product = new TbProduct();
                if ($this->product_name) {
                    $add_product->product_name = $this->product_name;
                }
                if ($this->unit_id) {
                    $add_product->unit_id = $this->unit_id;
                }
                if (str_replace(',', '', $this->price_cost)) {
                    $add_product->price_cost = str_replace(',', '', $this->price_cost);
                }

                $add_product->save();
                DB::commit();
                $this->resetForm_product();
                $this->dispatch('add');
            } catch (\Exception $ex) {
                DB::rollBack();
                $this->dispatch('something_went_wrong');
            }
        }
    }
    // show-edit ຂໍ້ມູນສິນຄ້າ
    public function show_product($id)
    {
        $edit = TbProduct::find($id);
        $this->hiidenId_product = $id;
        $this->product_name = $edit->product_name;
        $this->unit_id = $edit->unit_id;
        $this->price_cost = $edit->price_cost;
    }
     // <!-- show-delete ຂໍ້ມູນສິນຄ້າ -->
     public function showDetory_product($id)
     {
         $this->dispatch('hide-modal-data-products');
         $this->dispatch('show-modal-data-products-delete');
         $show_delete = TbProduct::find($id);
         $this->hiidenId_product = $id;
     }
     // <!-- delete ຂໍ້ມູນສິນຄ້າ -->
     public function delete_Products()
     {
         $id = $this->hiidenId_product;
         $delete_units = TbProduct::find($id);
         $delete_units->delete();
         $this->resetFiledUnits();
         $this->dispatch('delete');
         $this->dispatch('hide-modal-data-products-delete');
         $this->dispatch('show-modal-data-products');
     }
     public function get_backproduct()
     {
         $this->dispatch('hide-modal-data-products-delete');
         $this->dispatch('show-modal-data-products');
     }

    // <!-- show ຂໍ້ມູນຫົວໜ່ອຍ -->
    public function show_DataUnits()
    {
        $this->resetFiledUnits();
        $this->dispatch('show-modal-data-units');
    }
    // resetfiled ຂໍ້ມູນຫົວໜ່ອຍ
    public function resetFiledUnits()
    {
        $this->name_units = '';
    }
    // add-edit ຂໍ້ມູນຫົວໜ່ອຍ
    public function Store_units()
    {
        $updateId = $this->hiidenId_units;

        if ($updateId > 0) {

            $this->validate([
                'name_units' => 'required',
            ], [
                'name_units.required' => 'ກະລຸນາໃສ່ຊື່ຫົວໜ່ອຍກ່ອນ!',
            ]);
            try {

                $update_Units = TbUnit::find($updateId);
                $update_Units->name = $this->name_units;

                $update_Units->update();
                $this->dispatch('edit');
            } catch (\Exception $e) {
                $this->dispatch('something_went_wrong');
            }
        } else {

            $this->validate([
                'name_units' => 'required',
            ], [
                'name_units.required' => 'ກະລຸນາໃສ່ຊື່ຫົວໜ່ອຍກ່ອນ!',
            ]);
            try {
                $add_Units = new TbUnit();
                if ($this->name_units) {
                    $add_Units->name = $this->name_units;
                }

                $add_Units->save();
                $this->resetFiledUnits();
                $this->dispatch('add');
            } catch (\Exception $ex) {
                $this->dispatch('something_went_wrong');
            }
        }
    }
    // <!-- show-Edit ຂໍ້ມູນຫົວໜ່ອຍ -->
    public function showEdit($ids)
    {
        $show_Edit = TbUnit::find($ids);
        $this->hiidenId_units = $ids;
        $this->name_units = $show_Edit->name;
    }
    // <!-- show-delete ຂໍ້ມູນຫົວໜ່ອຍ -->
    public function showDetory($ids)
    {
        $this->dispatch('hide-modal-data-units');
        $this->dispatch('show-modal-data-units-delete');
        $show_delete = TbUnit::find($ids);
        $this->hiidenId_units = $ids;
    }
    // <!-- delete ຂໍ້ມູນຫົວໜ່ອຍ -->
    public function delete_Units()
    {
        $ids = $this->hiidenId_units;
        $delete_units = TbUnit::find($ids);
        $delete_units->delete();
        $this->resetFiledUnits();
        $this->dispatch('delete');
        $this->dispatch('hide-modal-data-units-delete');
        $this->dispatch('show-modal-data-units');
    }
    public function get_backunits()
    {
        $this->dispatch('hide-modal-data-units-delete');
        $this->dispatch('show-modal-data-units');
    }

    // <!-- show ຂໍ້ມູນຕຳແໜ່ງ -->
    public function show_DataPosition()
    {
        $this->dispatch('show-modal-data-position');
    }

    // <!-- show ຂໍ້ມູນພະນັກງານ -->
    public function show_DataStaff()
    {
        $this->dispatch('show-modal-data-staff');
    }

    // <!-- show ຂໍ້ມູນສາຂາ ແລະ ລູກຄ້າປະຈຳ -->
    public function show_DataBranch_regularCustomer()
    {
        $this->dispatch('show-modal-data-branch-regular-customer');
    }

    // <!-- show ຂໍ້ມູນລາຄາ -->
    public function show_DataPrice()
    {
        $this->dispatch('show-modal-data-price');
    }

    // <!-- show ຂໍ້ມູນລູກຄ້າ -->
    public function show_DataCustomer()
    {
        $this->dispatch('show-modal-data-customer');
    }

    // <!-- show ຂໍ້ມູນສາຍນໍ້າ -->
    public function show_DataWater()
    {
        $this->dispatch('show-modal-data-water');
    }

    // <!-- show ຂໍ້ມູນບ້ານ -->
    public function show_DataVillage()
    {
        $this->dispatch('show-modal-village');
    }

    // <!-- show ຂໍ້ມູນເມືອງ -->
    public function show_DataDistrict()
    {
        $this->dispatch('show-modal-district');
    }

    // <!-- show ຂໍ້ມູນແຂວງ -->
    public function show_DataProvince()
    {
        $this->dispatch('show-modal-province');
    }

    // <!-- show ຂໍ້ມູນເງື່ອນໄຂການສະສົມຄະແນນ -->
    public function show_CriteriaForAccumulatingPoints()
    {
        $this->dispatch('show-modal-criteria-for-accumulating-points');
    }

    // <!-- show ຂໍ້ມູນຈັດການຂໍ້ມູນເງີນເດືອນ -->
    public function show_ManageSalaryInformation()
    {
        $this->dispatch('show-modal-manage-salary-information');
    }
    // <!-- show ຂໍ້ມູນປະເພດການເຄື່ອນໄຫວຕຸກ -->
    public function show_TukMoventType()
    {
        $this->dispatch('show-modal-tuk-movement-type');
    }
}
