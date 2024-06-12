<?php

namespace App\Livewire\Admin\ManageBasic;

use App\Models\TbBranch;
use App\Models\TbEmployee;
use App\Models\TbPosition;
use App\Models\TbPrice;
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
    public $name_positon, $hiidenId_position;
    public $fullname, $phone, $position_id, $hiidenId_staff;
    public $fullname_branch, $phone_branch, $price_id, $details_branch, $hiidenId_branch;
    public function render()
    {
        $search = $this->search;

        $selectUnits = TbUnit::orderBy('id', 'desc')->get();
        $selectPositons = TbPosition::orderBy('id', 'desc')->get();
        $data_price = TbPrice::orderBy('id','desc')->get();

        $products = TbProduct::orderBy('id', 'desc')->where(function ($q) {
            $q->where('product_name', 'like', '%' . $this->search . '%');
        })->paginate(8);

        $units = TbUnit::orderBy('id', 'desc')->where(function ($q) {
            $q->where('name', 'like', '%' . $this->search . '%');
        })->paginate(8);

        $positions = TbPosition::orderBy('id', 'desc')->where(function ($q) {
            $q->where('name', 'like', '%' . $this->search . '%');
        })->paginate(8);

        $employees = TbEmployee::orderBy('id', 'desc')->where(function ($q) {
            $q->where('fullname', 'like', '%' . $this->search . '%')
                ->orwhere('phone', 'like', '%' . $this->search . '%');
        })->paginate(8);

        $branches = TbBranch::orderBy('id', 'desc')->where(function ($q) {
            $q->where('fullname', 'like', '%' . $this->search . '%')
                ->orwhere('phone', 'like', '%' . $this->search . '%');
        })->paginate(8);
        return view('livewire.admin.manage-basic.manage-basic-infromat-component', compact(
            'units',
            'selectUnits',
            'products',
            'positions',
            'selectPositons',
            'employees',
            'data_price',
            'branches',
        ))->layout('layouts.base');
    }

    // -- ========= products ========== -- \\
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
    // -- ========= end products ========== -- //

    // -- ========= units ========== -- \\
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
    // -- ========= end units ========== -- //

    // -- ========= add position ========== -- //
    public function show_DataPosition()
    {
        $this->dispatch('show-modal-data-position');
    }
    public function resetFiled_position()
    {
        $this->hiidenId_position = '';
        $this->name_positon = '';
    }
    // add-edit ຂໍ້ມູນຕຳແໜ່ງ
    public function Store_position()
    {
        $updateId = $this->hiidenId_position;

        if ($updateId > 0) {

            $this->validate([
                'name_positon' => 'required',
            ], [
                'name_positon.required' => 'ກະລຸນາໃສ່ຊື່ຕຳແໜ່ງກ່ອນ!',
            ]);
            try {

                $update_Position = TbPosition::find($updateId);
                $update_Position->name = $this->name_positon;

                $update_Position->update();
                $this->resetFiled_position();
                $this->dispatch('edit');
            } catch (\Exception $e) {
                $this->dispatch('something_went_wrong');
            }
        } else {

            $this->validate([
                'name_positon' => 'required',
            ], [
                'name_positon.required' => 'ກະລຸນາໃສ່ຊື່ຕຳແໜ່ງກ່ອນ!',
            ]);
            try {
                $add_Position = new TbPosition();
                if ($this->name_positon) {
                    $add_Position->name = $this->name_positon;
                }

                $add_Position->save();
                $this->resetFiled_position();
                $this->dispatch('add');
            } catch (\Exception $ex) {
                $this->dispatch('something_went_wrong');
            }
        }
    }
    // <!-- show-Edit ຂໍ້ມູນຕຳແໜ່ງ -->
    public function showEditPosition($ids)
    {
        $show_Edit_pos = TbPosition::find($ids);
        $this->hiidenId_position = $ids;
        $this->name_positon = $show_Edit_pos->name;
    }
    // <!-- show-delete ຂໍ້ມູນຕຳແໜ່ງ -->
    public function showDetoryPosition($ids)
    {
        $this->dispatch('hide-modal-data-position');
        $this->dispatch('show-modal-data-position-delete');
        $show_delete = TbPosition::find($ids);
        $this->hiidenId_position = $ids;
    }
    // <!-- delete ຂໍ້ມູນຕຳແໜ່ງ -->
    public function delete_Position()
    {
        $ids = $this->hiidenId_position;
        $delete_position = TbPosition::find($ids);
        $delete_position->delete();
        $this->resetFiled_position();
        $this->dispatch('delete');
        $this->dispatch('hide-modal-data-position-delete');
        $this->dispatch('show-modal-data-position');
    }
    public function get_backPosition()
    {
        $this->dispatch('show-modal-data-position');
        $this->dispatch('hide-modal-data-position-delete');
    }
    // -- ========= end position ========== -- //

    // -- ========= add staff ========== -- //
    public function show_DataStaff()
    {
        $this->dispatch('show-modal-data-staff');
    }
    public function resetFiledStaff()
    {
        $this->hiidenId_staff = '';
        $this->fullname = '';
        $this->phone = '';
        $this->position_id = '';
    }
    // add-edit ຂໍ້ມູນພະນັກງານ
    public function Store_Staff()
    {
        $updateId = $this->hiidenId_staff;

        if ($updateId > 0) {

            $this->validate([
                'fullname' => 'required',
                'phone' => 'required',
                'position_id' => 'required',
            ], [
                'fullname.required' => 'ກະລຸນາໃສ່ຊື່ພະນັກງານກ່ອນ!',
                'phone.required' => 'ກະລຸນາໃສ່ເບີໂທກ່ອນ!',
                'position_id.required' => 'ກະລຸນາເລືອກຕຳແໜ່ງກ່ອນ!',
            ]);
            try {

                $update_employee = TbEmployee::find($updateId);
                $update_employee->fullname = $this->fullname;
                $update_employee->phone = $this->phone;
                $update_employee->position_id = $this->position_id;

                $update_employee->update();
                $this->resetFiledStaff();
                $this->dispatch('edit');
            } catch (\Exception $e) {
                $this->dispatch('something_went_wrong');
            }
        } else {

            $this->validate([
                'fullname' => 'required',
                'phone' => 'required',
                'position_id' => 'required',
            ], [
                'fullname.required' => 'ກະລຸນາໃສ່ຊື່ພະນັກງານກ່ອນ!',
                'phone.required' => 'ກະລຸນາໃສ່ເບີໂທກ່ອນ!',
                'position_id.required' => 'ກະລຸນາເລືອກຕຳແໜ່ງກ່ອນ!',
            ]);
            try {
                $add_Employee = new TbEmployee();
                if ($this->fullname) {
                    $add_Employee->fullname = $this->fullname;
                }
                if ($this->phone) {
                    $add_Employee->phone = $this->phone;
                }
                if ($this->position_id) {
                    $add_Employee->position_id = $this->position_id;
                }

                $add_Employee->save();
                $this->resetFiledStaff();
                $this->dispatch('add');
            } catch (\Exception $ex) {
                $this->dispatch('something_went_wrong');
            }
        }
    }
    // <!-- show-Edit ຂໍ້ມູນພະນັກງານ -->
    public function showEditEmplyee($ids)
    {
        $show_Edit_employee = TbEmployee::find($ids);
        $this->hiidenId_staff = $ids;
        $this->fullname = $show_Edit_employee->fullname;
        $this->phone = $show_Edit_employee->phone;
        $this->position_id = $show_Edit_employee->position_id;
    }
    // <!-- show-delete ຂໍ້ມູນພະນັກງານ -->
    public function showDetory_emplyee($ids)
    {
        $this->dispatch('hide-modal-data-staff');
        $this->dispatch('show-modal-data-staff-delete');
        $show_delete = TbEmployee::find($ids);
        $this->hiidenId_staff = $ids;
    }
    // <!-- delete ຂໍ້ມູນພະນັກງານ -->
    public function delete_Employee()
    {
        $ids = $this->hiidenId_staff;
        $delete_Employee = TbEmployee::find($ids);
        $delete_Employee->delete();
        $this->resetFiled_position();
        $this->dispatch('delete');
        $this->dispatch('hide-modal-data-staff-delete');
        $this->dispatch('show-modal-data-staff');
    }
    public function get_backEmployee()
    {
        $this->dispatch('show-modal-data-staff');
        $this->dispatch('hide-modal-data-staff-delete');
    }
     // -- ========= end staff employee ========== -- //

     // -- ========= add custoomer-branch ========== -- //
    public function show_DataBranch_regularCustomer()
    {
        $this->dispatch('show-modal-data-branch-regular-customer');
    }
     public function resetFiledBranches()
    {
        $this->hiidenId_branch = '';
        $this->fullname_branch = '';
        $this->phone_branch = '';
        $this->price_id = '';
        $this->details_branch = '';
    }
    // add-edit ຂໍ້ມູນພະນັກງານ
    public function Store_Branches()
    {
        $updateId = $this->hiidenId_branch;

        if ($updateId > 0) {

            $this->validate([
                'fullname_branch' => 'required',
                'phone_branch' => 'required',
                'price_id' => 'required',
                // 'details_branch' => 'required',
            ], [
                'fullname_branch.required' => 'ກະລຸນາໃສ່ຊື່ພະນັກງານກ່ອນ!',
                'phone_branch.required' => 'ກະລຸນາໃສ່ເບີໂທກ່ອນ!',
                'price_id.required' => 'ກະລຸນາເລືອກຕຳແໜ່ງກ່ອນ!',
                // 'details_branch.required' => 'ກະລຸນາໃສ່ລາຍລະອຽດກ່ອນ!',
            ]);
            try {

                $update_branch = TbBranch::find($updateId);
                $update_branch->fullname = $this->fullname_branch;
                $update_branch->phone= $this->phone_branch;
                $update_branch->price_id = $this->price_id;
                $update_branch->detail = $this->details_branch;

                $update_branch->update();
                $this->resetFiledBranches();
                $this->dispatch('edit');
            } catch (\Exception $e) {
                $this->dispatch('something_went_wrong');
            }
        } else {

            $this->validate([
                'fullname_branch' => 'required',
                'phone_branch' => 'required',
                'price_id' => 'required',
                // 'details_branch' => 'required',
            ], [
                'fullname_branch.required' => 'ກະລຸນາໃສ່ຊື່ພະນັກງານກ່ອນ!',
                'phone_branch.required' => 'ກະລຸນາໃສ່ເບີໂທກ່ອນ!',
                'price_id.required' => 'ກະລຸນາເລືອກຕຳແໜ່ງກ່ອນ!',
                // 'details_branch.required' => 'ກະລຸນາໃສ່ລາຍລະອຽດກ່ອນ!',
            ]);
            try {
                $add_Branches = new TbBranch();
                if ($this->fullname_branch) {
                    $add_Branches->fullname = $this->fullname_branch;
                }
                if ($this->phone_branch) {
                    $add_Branches->phone = $this->phone_branch;
                }
                if ($this->price_id) {
                    $add_Branches->price_id = $this->price_id;
                }
                if ($this->details_branch) {
                    $add_Branches->detail = $this->details_branch;
                }

                $add_Branches->save();
                $this->resetFiledBranches();
                $this->dispatch('add');
            } catch (\Exception $ex) {
                $this->dispatch('something_went_wrong');
            }
        }
    }
    // <!-- show-Edit ຂໍ້ມູນພະນັກງານ -->
    public function showEditbranches($ids)
    {
        $show_Edit_branch = TbBranch::find($ids);
        $this->hiidenId_branch = $ids;
        $this->fullname_branch = $show_Edit_branch->fullname;
        $this->phone_branch = $show_Edit_branch->phone;
        $this->price_id = $show_Edit_branch->price_id;
        $this->details_branch = $show_Edit_branch->detail;
    }
    // <!-- show-delete ຂໍ້ມູນພະນັກງານ -->
    public function showDetory_branches($ids)
    {
        $this->dispatch('hide-modal-data-staff');
        $this->dispatch('show-modal-data-staff-delete');
        $show_delete = TbBranch::find($ids);
        $this->hiidenId_branch = $ids;
    }
    // <!-- delete ຂໍ້ມູນພະນັກງານ -->
    public function delete_Branches()
    {
        $ids = $this->hiidenId_branch;
        $delete_Branches = TbBranch::find($ids);
        $delete_Branches->delete();
        $this->resetFiled_position();
        $this->dispatch('delete');
        $this->dispatch('hide-modal-data-staff-delete');
        $this->dispatch('show-modal-data-staff');
    }
    public function get_backBranches()
    {
        $this->dispatch('show-modal-data-staff');
        $this->dispatch('hide-modal-data-staff-delete');
    }
     // -- ========= end customer-branch ========== -- //

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
