<?php

namespace App\Livewire\Admin\ManageBasic;

use App\Models\TbBranch;
use App\Models\TbCustomer;
use App\Models\TbDistrict;
use App\Models\TbEmployee;
use App\Models\TbPosition;
use App\Models\TbPrice;
use App\Models\TbProduct;
use App\Models\TbProvince;
use App\Models\TbUnit;
use App\Models\TbUserWaterline;
use App\Models\TbVillage;
use App\Models\TbWaterLine;
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
    public $price_product_id, $price_name, $productId_price, $hiidenId_price;
    public $cus_name, $cus_alley, $cus_villId, $cus_h_number, $cus_phone,
        $cus_b_amount, $cus_priceId, $cus_lat, $cus_lng, $cus_user_waterlineId,
        $cus_remark, $hiidenId_customer, $search_waterlineId;
    public $waterline_name, $hiddenId_waterline;
    public $userwaterline_employeeId, $waterline_waterlineId, $search_UwateremployeeId, $hiddenId_userwaterline;
    public $province_name, $hiddenId_province;
    public $district_name, $Dis_proId, $hiddenId_district;
    public $village_name, $Vill_disId,$selectDistrict,$selectVillage, $vill_proId, $hiddenId_village;
    public function render()
    {
        $search = $this->search;

        $selectUnits = TbUnit::orderBy('id', 'desc')->get();
        $selectPositons = TbPosition::orderBy('id', 'desc')->get();
        $data_price = TbPrice::orderBy('id', 'desc')->get();
        $data_product = TbProduct::orderBy('id', 'desc')->get();
        $data_userswaterlines = TbUserWaterline::orderBy('id', 'desc')->get();
        $data_waterlines = TbWaterLine::orderBy('id', 'desc')->get();
        $data_employees = TbEmployee::orderBy('id', 'desc')->get();
        $data_provinces = TbProvince::orderBy('id', 'desc')->get();
        $data_districts = TbDistrict::orderBy('id', 'desc')->get();

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

        $prices = TbPrice::orderBy('id', 'desc')->where(function ($q) {
            $q->where('price', 'like', '%' . $this->search . '%');
            // ->orwhere('', 'like', '%' . $this->search . '%');
        });

        if ($this->productId_price) {
            $prices = $prices->where('product_id', $this->productId_price);
        }
        if (!empty($prices)) {
            $prices = $prices->paginate(8);
        } else {
            $prices = [];
        }

        $customers = TbCustomer::orderBy('id', 'desc')->where(function ($q) {
            $q->where('customer_name', 'like', '%' . $this->search . '%')
                ->orwhere('phone', 'like', '%' . $this->search . '%')
                ->where('alley', 'like', '%' . $this->search . '%')
                ->where('code', 'like', '%' . $this->search . '%');
        });

        if ($this->search_waterlineId) {
            $customers = $customers->where('user_waterline_id', $this->search_waterlineId);
        }

        if (!empty($customers)) {
            $customers = $customers->paginate(8);
        } else {
            $customers = [];
        }

        $waterlines = TbWaterLine::orderBy('id', 'desc')->where(function ($q) {
            $q->where('name', 'like', '%' . $this->search . '%');
        })->paginate(8);

        $userwaterlines = TbUserWaterline::orderBy('id', 'desc');

        if ($this->search_UwateremployeeId) {
            $userwaterlines = $userwaterlines->where('employee_id', $this->search_UwateremployeeId);
        }
        if (!empty($userwaterlines)) {
            $userwaterlines = $userwaterlines->paginate(8);
        } else {
            $userwaterlines = [];
        }

        $provinces = TbProvince::orderBy('id', 'desc')->where(function ($q) {
            $q->where('province_name', 'like', '%' . $this->search . '%');
        })->paginate(8);

        $districts = TbDistrict::orderBy('id', 'desc')
            ->whereIn('province_id', function ($q) {
                $q->select('id')->from(with(new TbProvince())->getTable())->where('province_name', 'like', '%' . $this->search . '%');
            })
            ->orwhere('district_name', 'like', '%' . $this->search . '%')
            ->paginate(8);

        $villages  = TbVillage::orderBy('id', 'desc')->get();
        if (!empty($this->vill_proId)) {
            $this->selectDistrict = TbDistrict::orderBy('id', 'desc')->where('province_id', $this->vill_proId)->get();
        }
        // if (!empty($this->Vill_disId)) {
        //     $this->selectVillage = TbVillage::orderBy('id', 'desc')->where('district_id', $this->Vill_disId)->get();
        // }
        return view('livewire.admin.manage-basic.manage-basic-infromat-component', compact(
            'units',
            'selectUnits',
            'products',
            'positions',
            'selectPositons',
            'employees',
            'data_price',
            'branches',
            'prices',
            'data_product',
            'customers',
            'data_userswaterlines',
            'waterlines',
            'data_waterlines',
            'data_employees',
            'userwaterlines',
            'provinces',
            'data_provinces',
            'districts',
            'data_districts',
        ))->layout('layouts.base');
    }

    // public function hydrate()
    // {
    //     $this->emit('productId_price');
    // }

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
                $update_branch->phone = $this->phone_branch;
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
        $this->dispatch('hide-modal-data-branch-regular-customer');
        $this->dispatch('show-modal-data-branch-regular-customer-delete');
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
        $this->dispatch('hide-modal-data-branch-regular-customer-delete');
        $this->dispatch('show-modal-data-branch-regular-customer');
    }
    public function get_backBranches()
    {
        $this->dispatch('show-modal-data-branch-regular-customer');
        $this->dispatch('hide-modal-data-branch-regular-customer-delete');
    }
    // -- ========= end customer-branch ========== -- //

    // -- ========= add prices ========== -- //
    public function show_DataPrice()
    {
        $this->dispatch('show-modal-data-price');
    }
    public function resetFiledPrice()
    {
        $this->hiidenId_price = '';
        $this->price_product_id = '';
        $this->price_name = '';
    }
    // add-edit price
    public function Store_Price()
    {
        $updateId = $this->hiidenId_price;

        if ($updateId > 0) {

            $this->validate([
                'price_name' => 'required',
                'price_product_id' => 'required',
                // 'details_branch' => 'required',
            ], [
                'price_name.required' => 'ກະລຸນາໃສ່ລາຄາກ່ອນ!',
                'price_product_id.required' => 'ກະລຸນາເລືອກສິນຄ້າກ່ອນ!',
                // 'details_branch.required' => 'ກະລຸນາໃສ່ລາຍລະອຽດກ່ອນ!',
            ]);
            try {

                $update_price = TbPrice::find($updateId);
                $update_price->price = str_replace(',', '', $this->price_name);
                $update_price->product_id = $this->price_product_id;

                $update_price->update();
                $this->resetFiledPrice();
                $this->dispatch('edit');
            } catch (\Exception $e) {
                $this->dispatch('something_went_wrong');
            }
        } else {

            $this->validate([
                'price_name' => 'required',
                'price_product_id' => 'required',
                // 'details_branch' => 'required',
            ], [
                'price_name.required' => 'ກະລຸນາໃສ່ລາຄາກ່ອນ!',
                'price_product_id.required' => 'ກະລຸນາເລືອກສິນຄ້າກ່ອນ!',
                // 'details_branch.required' => 'ກະລຸນາໃສ່ລາຍລະອຽດກ່ອນ!',
            ]);
            try {
                $add_Prices = new TbPrice();
                if (str_replace(',', '', $this->price_name)) {
                    $add_Prices->price = str_replace(',', '', $this->price_name);
                }
                if ($this->price_product_id) {
                    $add_Prices->product_id = $this->price_product_id;
                }

                $add_Prices->save();
                $this->resetFiledPrice();
                $this->dispatch('add');
            } catch (\Exception $ex) {
                $this->dispatch('something_went_wrong');
            }
        }
    }
    // <!-- show-Edit price -->
    public function showEditPrices($ids)
    {
        $show_Edit_price = TbPrice::find($ids);
        $this->hiidenId_price = $ids;
        $this->price_name = $show_Edit_price->price;
        $this->price_product_id = $show_Edit_price->product_id;
    }
    // <!-- show-delete price -->
    public function showDetory_Prices($ids)
    {
        $this->dispatch('hide-modal-data-price');
        $this->dispatch('show-modal-data-price-delete');
        $show_delete = TbPrice::find($ids);
        $this->hiidenId_price = $ids;
    }
    // <!-- delete price -->
    public function delete_Prices()
    {
        $ids = $this->hiidenId_price;
        $delete_prices = TbPrice::find($ids);
        $delete_prices->delete();
        $this->resetFiledPrice();
        $this->dispatch('delete');
        $this->dispatch('hide-modal-data-price-delete');
        $this->dispatch('show-modal-data-price');
    }
    public function get_backPrices()
    {
        $this->dispatch('show-modal-data-price');
        $this->dispatch('hide-modal-data-price-delete');
    }
    // -- ========= end price ========== -- //

    // -- ========= add customers ========== -- //
    public function show_DataCustomer()
    {
        $this->dispatch('show-modal-data-customer');
    }
    public function showAddCustomers()
    {
        $this->resetFiledCustomers();
        $this->dispatch('show-modal-data-customer-add');
        $this->dispatch('hide-modal-data-customer');
    }
    public function getbackAddCustomers()
    {
        $this->resetFiledCustomers();
        $this->dispatch('hide-modal-data-customer-add');
        $this->dispatch('show-modal-data-customer');
    }
    public function resetFiledCustomers()
    {
        $this->hiidenId_customer = '';
        $this->cus_name = '';
        $this->cus_alley = '';
        $this->cus_villId = '';
        $this->cus_h_number = '';
        $this->cus_phone = '';
        $this->cus_b_amount = '';
        $this->cus_priceId = '';
        $this->cus_lat = '';
        $this->cus_lng = '';
        $this->cus_user_waterlineId = '';
        $this->cus_remark = '';
    }
    // add-edit ຂໍ້ມູນພະນັກງານ
    public function Store_Customers()
    {

        $this->validate([
            'cus_phone' => 'required',
            'cus_name' => 'required',
            'cus_b_amount' => 'required',
        ], [
            'cus_phone.required' => 'ກະລຸນາໃສ່ລາຄາກ່ອນ!',
            'cus_name.required' => 'ກະລຸນາເລືອກສິນຄ້າກ່ອນ!',
            'cus_b_amount.required' => 'ກະລຸນາໃສ່ຈຳນວນຕຸກກ່ອນ!',
            // 'details_branch.required' => 'ກະລຸນາໃສ່ລາຍລະອຽດກ່ອນ!',
        ]);
        try {
            $count_mxe = TbCustomer::count('id');
            $count = $count_mxe + 1;
            $add_Customer = new TbCustomer();
            if (!empty($count_mxe)) {
                $add_Customer->code = 'C000' . $count;
            } else {
                $add_Customer->code = 'C0001';
            }
            if ($this->cus_name) {
                $add_Customer->customer_name = $this->cus_name;
            }
            if ($this->cus_phone) {
                $add_Customer->phone = $this->cus_phone;
            }
            if ($this->cus_alley) {
                $add_Customer->alley = $this->cus_alley;
            }
            if ($this->cus_villId) {
                $add_Customer->village_id = $this->cus_villId;
            }
            if ($this->cus_h_number) {
                $add_Customer->h_number = $this->cus_h_number;
            }
            if ($this->cus_b_amount) {
                $add_Customer->b_amount = $this->cus_b_amount;
            }
            if ($this->cus_priceId) {
                $add_Customer->price_id = $this->cus_priceId;
            }
            if ($this->cus_lat) {
                $add_Customer->lat = $this->cus_lat;
            }
            if ($this->cus_lng) {
                $add_Customer->lng = $this->cus_lng;
            }
            if ($this->cus_user_waterlineId) {
                $add_Customer->user_waterline_id = $this->cus_user_waterlineId;
            }
            if ($this->cus_remark) {
                $add_Customer->remark = $this->cus_remark;
            }

            $add_Customer->save();
            $this->resetFiledCustomers();
            $this->dispatch('add');
            $this->dispatch('hide-modal-data-customer-add');
            $this->dispatch('show-modal-data-customer');
        } catch (\Exception $ex) {
            $this->dispatch('something_went_wrong');
        }
    }
    // <!-- show-Edit ຂໍ້ມູນພະນັກງານ -->
    public function showEditCustomers($ids)
    {
        $this->dispatch('show-modal-data-customer-add');
        $this->dispatch('hide-modal-data-customer');
        $show_Edit_customer = TbCustomer::find($ids);
        $this->hiidenId_customer = $ids;
        $this->cus_name = $show_Edit_customer->customer_name;
        $this->cus_phone = $show_Edit_customer->phone;
        $this->cus_alley = $show_Edit_customer->alley;
        $this->cus_h_number = $show_Edit_customer->h_number;
        $this->cus_b_amount = $show_Edit_customer->b_amount;
        $this->cus_villId = $show_Edit_customer->village_id;
        $this->cus_priceId = $show_Edit_customer->price_id;
        $this->cus_lat = $show_Edit_customer->lat;
        $this->cus_lng = $show_Edit_customer->lng;
        $this->cus_user_waterlineId = $show_Edit_customer->user_waterline_id;
        $this->cus_remark = $show_Edit_customer->remark;
    }
    public function EditData_Customers()
    {
        $ids = $this->hiidenId_customer;

        $this->validate([
            'cus_phone' => 'required',
            'cus_name' => 'required',
            'cus_b_amount' => 'required',
            // 'details_branch' => 'required',
        ], [
            'cus_phone.required' => 'ກະລຸນາໃສ່ເບີໂທກ່ອນ!',
            'cus_name.required' => 'ກະລຸນາໃສ່ຊື່ກ່ອນ!',
            'cus_b_amount.required' => 'ກະລຸນາໃສ່ຈຳນວນຕຸກກ່ອນ!',
        ]);
        try {

            $update_customer = TbCustomer::find($ids);
            $update_customer->customer_name = $this->cus_name;
            $update_customer->phone = $this->cus_phone;
            $update_customer->alley = $this->cus_alley;
            $update_customer->village_id = $this->cus_villId;
            $update_customer->h_number = $this->cus_h_number;
            $update_customer->b_amount = $this->cus_b_amount;
            $update_customer->price_id  = $this->cus_priceId;
            $update_customer->lat = $this->cus_lat;
            $update_customer->lng = $this->cus_lng;
            $update_customer->user_waterline_id  = $this->cus_user_waterlineId;
            $update_customer->remark  = $this->cus_remark;

            $update_customer->update();
            $this->resetFiledCustomers();
            $this->dispatch('edit');
            $this->dispatch('hide-modal-data-customer-add');
            $this->dispatch('show-modal-data-customer');
        } catch (\Exception $e) {
            $this->dispatch('something_went_wrong');
        }
    }
    // <!-- show-delete ຂໍ້ມູນພະນັກງານ -->
    public function showDetory_Customers($ids)
    {
        $this->dispatch('hide-modal-data-customer');
        $this->dispatch('show-modal-data-customer-delete');
        $show_delete = TbCustomer::find($ids);
        $this->hiidenId_customer = $ids;
    }
    // <!-- delete ຂໍ້ມູນພະນັກງານ -->
    public function delete_Customers()
    {
        $ids = $this->hiidenId_customer;
        $delete_prices = TbCustomer::find($ids);
        $delete_prices->delete();
        $this->resetFiledCustomers();
        $this->dispatch('delete');
        $this->dispatch('hide-modal-data-customer-delete');
        $this->dispatch('show-modal-data-customer');
    }
    public function get_backCustomers()
    {
        $this->dispatch('show-modal-data-customer');
        $this->dispatch('hide-modal-data-customer-delete');
    }
    // -- ========= end customer ========== -- //

    // <!-- show ຂໍ້ມູນສາຍນໍ້າ -->
    public function show_DataWater()
    {
        $this->dispatch('show-modal-data-water');
    }
    public function resetFiledWaterline()
    {
        $this->hiddenId_waterline = '';
        $this->waterline_name = '';
    }
    // add-edit price
    public function Store_Waterline()
    {
        $updateId = $this->hiddenId_waterline;

        if ($updateId > 0) {

            $this->validate([
                'waterline_name' => 'required',
            ], [
                'waterline_name.required' => 'ກະລຸນາໃສ່ຊື່ກ່ອນ!',
            ]);
            try {

                $update_waterline = TbWaterLine::find($updateId);
                $update_waterline->name = $this->waterline_name;

                $update_waterline->update();
                $this->resetFiledWaterline();
                $this->dispatch('edit');
            } catch (\Exception $e) {
                $this->dispatch('something_went_wrong');
            }
        } else {

            $this->validate([
                'waterline_name' => 'required',
            ], [
                'waterline_name.required' => 'ກະລຸນາໃສ່ຊື່ກ່ອນ!',
            ]);
            try {
                $add_Waterline = new TbWaterLine();
                if ($this->waterline_name) {
                    $add_Waterline->name = $this->waterline_name;
                }

                $add_Waterline->save();
                $this->resetFiledWaterline();
                $this->dispatch('add');
            } catch (\Exception $ex) {
                $this->dispatch('something_went_wrong');
            }
        }
    }
    // <!-- show-Edit price -->
    public function showEditWaterline($ids)
    {
        $show_Edit_waterline = TbWaterLine::find($ids);
        $this->hiddenId_waterline = $ids;
        $this->waterline_name = $show_Edit_waterline->name;
    }
    // <!-- show-delete price -->
    public function showDetory_Waterline($ids)
    {
        $this->dispatch('hide-modal-data-water');
        $this->dispatch('show-modal-data-water-delete');
        $show_delete = TbWaterLine::find($ids);
        $this->hiddenId_waterline = $ids;
    }
    // <!-- delete price -->
    public function delete_Waterline()
    {
        $ids = $this->hiddenId_waterline;
        $delete_waterline = TbWaterLine::find($ids);
        $delete_waterline->delete();
        $this->resetFiledPrice();
        $this->dispatch('delete');
        $this->dispatch('hide-modal-data-water-delete');
        $this->dispatch('show-modal-data-water');
    }
    public function get_backWaterline()
    {
        $this->dispatch('show-modal-data-water');
        $this->dispatch('hide-modal-data-water-delete');
    }
    // -- ========= end ຂໍ້ມູນສາຍນໍ້າ ========== -- //

    // <!-- show ຂໍ້ມູນທີມສົ່ງນໍ້າ -->
    public function show_DataUserwaterline()
    {
        $this->dispatch('show-modal-data-user-waterline');
    }
    public function resetFiledUserwaterline()
    {
        $this->hiddenId_userwaterline = '';
        $this->userwaterline_employeeId = '';
        $this->waterline_waterlineId = '';
    }
    // add-edit price
    public function Store_Userwaterline()
    {
        $updateId = $this->hiddenId_userwaterline;

        if ($updateId > 0) {

            $this->validate([
                'userwaterline_employeeId' => 'required',
                'waterline_waterlineId' => 'required',
            ], [
                'userwaterline_employeeId.required' => 'ກະລຸນາເລືອກພະນັກງານກ່ອນ!',
                'waterline_waterlineId.required' => 'ກະລຸນາເລືອກສາຍນໍ້າກ່ອນ!',
            ]);

            try {

                $update_user_waterline = TbUserWaterline::find($updateId);
                $update_user_waterline->employee_id = $this->userwaterline_employeeId;
                $update_user_waterline->waterline_id = $this->waterline_waterlineId;

                $update_user_waterline->update();
                $this->resetFiledUserwaterline();
                $this->dispatch('edit');
            } catch (\Exception $e) {
                $this->dispatch('something_went_wrong');
            }
        } else {

            $this->validate([
                'userwaterline_employeeId' => 'required',
                'waterline_waterlineId' => 'required',
            ], [
                'userwaterline_employeeId.required' => 'ກະລຸນາເລືອກພະນັກງານກ່ອນ!',
                'waterline_waterlineId.required' => 'ກະລຸນາເລືອກສາຍນໍ້າກ່ອນ!',
            ]);

            try {
                $add_user_Waterline = new TbUserWaterline();
                if ($this->userwaterline_employeeId) {
                    $add_user_Waterline->employee_id = $this->userwaterline_employeeId;
                }
                if ($this->waterline_waterlineId) {
                    $add_user_Waterline->waterline_id = $this->waterline_waterlineId;
                }

                $add_user_Waterline->save();
                $this->resetFiledUserwaterline();
                $this->dispatch('add');
            } catch (\Exception $ex) {
                $this->dispatch('something_went_wrong');
            }
        }
    }
    // <!-- show-Edit price -->
    public function showEditUserWaterline($ids)
    {
        $show_Edit_user_waterline = TbUserWaterline::find($ids);
        $this->hiddenId_userwaterline = $ids;
        $this->userwaterline_employeeId = $show_Edit_user_waterline->employee_id;
        $this->waterline_waterlineId = $show_Edit_user_waterline->waterline_id;
    }
    // <!-- show-delete price -->
    public function showDetory_UserWaterline($ids)
    {
        $this->dispatch('hide-modal-data-user-waterline');
        $this->dispatch('show-modal-data-user-waterline-delete');
        $show_delete = TbUserWaterline::find($ids);
        $this->hiddenId_userwaterline = $ids;
    }
    // <!-- delete price -->
    public function delete_UserWaterline()
    {
        $ids = $this->hiddenId_userwaterline;
        $delete_user_waterline = TbUserWaterline::find($ids);
        $delete_user_waterline->delete();
        $this->resetFiledPrice();
        $this->dispatch('delete');
        $this->dispatch('hide-modal-data-user-waterline-delete');
        $this->dispatch('show-modal-data-user-waterline');
    }
    public function get_backUserWaterline()
    {
        $this->dispatch('show-modal-data-user-waterline');
        $this->dispatch('hide-modal-data-user-waterline-delete');
    }

    // <!-- show ຂໍ້ມູນບ້ານ -->
    public function show_DataVillage()
    {
        $this->dispatch('show-modal-village');
    }
    public function resetFiledVillage()
    {
        $this->village_name = '';
        // $this->vill_proId = '';
        $this->Vill_disId = '';
        $this->hiddenId_village = '';
    }
    public function Store_Village()
    {
        $updateProId = $this->hiddenId_village;

        if ($updateProId > 0) {

            $this->validate([
                'village_name' => 'required',
                // 'vill_proId' => 'required',
                'Vill_disId' => 'required',
            ], [
                'village_name.required' => 'ກະລຸນາໃສ່ຊື່ເມືອງກ່ອນ!',
                // 'vill_proId.required' => 'ກະລຸນາເລືອກແຂວງກ່ອນ!',
                'Vill_disId.required' => 'ກະລຸນາເລືອກເມືອງກ່ອນ!',
            ]);

            try {

                $update_Village = TbVillage::find($updateProId);
                $update_Village->village_name = $this->village_name;
                $update_Village->district_id = $this->Vill_disId;

                $update_Village->update();
                $this->resetFiledVillage();
                $this->dispatch('edit');
            } catch (\Exception $e) {
                $this->dispatch('something_went_wrong');
            }
        } else {

            $this->validate([
                'village_name' => 'required',
                'Vill_disId' => 'required',
            ], [
                'village_name.required' => 'ກະລຸນາໃສ່ຊື່ເມືອງກ່ອນ!',
                'Vill_disId.required' => 'ກະລຸນາເລືອກເມືອງກ່ອນ!',
            ]);

            try {
                $add_Village = new TbVillage();
                if ($this->village_name) {
                    $add_Village->village_name = $this->village_name;
                }
                if ($this->Vill_disId) {
                    $add_Village->district_id = $this->Vill_disId;
                }
                $add_Village->save();
                $this->resetFiledVillage();
                $this->dispatch('add');
            } catch (\Exception $ex) {
                $this->dispatch('something_went_wrong');
            }
        }
    }
    // <!-- show-Edit price -->
    public function showEditVillage($ids)
    {
        $show_Edit_Village = TbVillage::find($ids);
        $this->hiddenId_village = $ids;
        $this->village_name = $show_Edit_Village->village_name;
        $this->vill_proId = $show_Edit_Village->district_id;
    }
    // <!-- show-delete price -->
    public function showDetory_Village($ids)
    {
        $this->dispatch('hide-modal-village');
        $this->dispatch('show-modal-village-delete');
        $show_delete = TbVillage::find($ids);
        $this->hiddenId_village = $ids;
    }
    // <!-- delete price -->
    public function delete_Village()
    {
        $ids = $this->hiddenId_village;
        $delete_Village = TbVillage::find($ids);
        $delete_Village->delete();
        $this->resetFiledVillage();
        $this->dispatch('delete');
        $this->dispatch('hide-modal-village-delete');
        $this->dispatch('show-modal-village');
    }
    public function get_backVillage()
    {
        $this->dispatch('show-modal-village');
        $this->dispatch('hide-modal-village-delete');
    }
    // -- ========= end ຂໍ້ມູນເມືອງ ========== -- //

    // <!-- show ຂໍ້ມູນເມືອງ -->
    public function show_DataDistrict()
    {
        $this->dispatch('show-modal-district');
    }
    public function resetFiledDistrict()
    {
        $this->district_name = '';
        $this->Dis_proId = '';
        $this->hiddenId_district = '';
    }
    public function Store_District()
    {
        $updateDisId = $this->hiddenId_district;

        if ($updateDisId > 0) {

            $this->validate([
                'district_name' => 'required',
                'Dis_proId' => 'required',
            ], [
                'district_name.required' => 'ກະລຸນາໃສ່ຊື່ເມືອງກ່ອນ!',
                'Dis_proId.required' => 'ກະລຸນາເລືອກແຂວງກ່ອນ!',
            ]);

            try {

                $update_District = TbDistrict::find($updateDisId);
                $update_District->district_name = $this->district_name;
                $update_District->province_id = $this->Dis_proId;

                $update_District->update();
                $this->resetFiledDistrict();
                $this->dispatch('edit');
            } catch (\Exception $e) {
                $this->dispatch('something_went_wrong');
            }
        } else {

            $this->validate([
                'district_name' => 'required',
                'Dis_proId' => 'required',
            ], [
                'district_name.required' => 'ກະລຸນາໃສ່ຊື່ເມືອງກ່ອນ!',
                'Dis_proId.required' => 'ກະລຸນາເລືອກແຂວງກ່ອນ!',
            ]);

            try {
                $add_District = new TbDistrict();
                if ($this->district_name) {
                    $add_District->district_name = $this->district_name;
                }
                if ($this->Dis_proId) {
                    $add_District->province_id = $this->Dis_proId;
                }
                $add_District->save();
                $this->resetFiledDistrict();
                $this->dispatch('add');
            } catch (\Exception $ex) {
                $this->dispatch('something_went_wrong');
            }
        }
    }
    // <!-- show-Edit price -->
    public function showEditDistrict($ids)
    {
        $show_Edit_District = TbDistrict::find($ids);
        $this->hiddenId_district = $ids;
        $this->district_name = $show_Edit_District->district_name;
        $this->Dis_proId = $show_Edit_District->province_id;
    }
    // <!-- show-delete price -->
    public function showDetory_District($ids)
    {
        $this->dispatch('hide-modal-district');
        $this->dispatch('show-modal-district-delete');
        $show_delete = TbDistrict::find($ids);
        $this->hiddenId_district = $ids;
    }
    // <!-- delete price -->
    public function delete_District()
    {
        $ids = $this->hiddenId_district;
        $delete_District = TbDistrict::find($ids);
        $delete_District->delete();
        $this->resetFiledDistrict();
        $this->dispatch('delete');
        $this->dispatch('hide-modal-district-delete');
        $this->dispatch('show-modal-district');
    }
    public function get_backDistrict()
    {
        $this->dispatch('show-modal-district');
        $this->dispatch('hide-modal-district-delete');
    }
    // -- ========= end ຂໍ້ມູນເມືອງ ========== -- //

    // <!-- show ຂໍ້ມູນແຂວງ -->
    public function show_DataProvince()
    {
        $this->dispatch('show-modal-province');
    }
    public function resetFiledProvince()
    {
        $this->province_name = '';
        $this->hiddenId_province = '';
    }
    public function Store_Province()
    {
        $updateProId = $this->hiddenId_province;

        if ($updateProId > 0) {

            $this->validate([
                'province_name' => 'required',
            ], [
                'province_name.required' => 'ກະລຸນາໃສ່ຊື່ແຂວງກ່ອນ!',
            ]);

            try {

                $update_province = TbProvince::find($updateProId);
                $update_province->province_name = $this->province_name;

                $update_province->update();
                $this->resetFiledProvince();
                $this->dispatch('edit');
            } catch (\Exception $e) {
                $this->dispatch('something_went_wrong');
            }
        } else {

            $this->validate([
                'province_name' => 'required',
            ], [
                'province_name.required' => 'ກະລຸນາໃສ່ຊື່ແຂວງກ່ອນ!',
            ]);

            try {
                $add_Province = new TbProvince();
                if ($this->province_name) {
                    $add_Province->province_name = $this->province_name;
                }
                $add_Province->save();
                $this->resetFiledProvince();
                $this->dispatch('add');
            } catch (\Exception $ex) {
                $this->dispatch('something_went_wrong');
            }
        }
    }
    // <!-- show-Edit price -->
    public function showEditProvince($ids)
    {
        $show_Edit_province = TbProvince::find($ids);
        $this->hiddenId_province = $ids;
        $this->province_name = $show_Edit_province->province_name;
    }
    // <!-- show-delete price -->
    public function showDetory_Province($ids)
    {
        $this->dispatch('hide-modal-province');
        $this->dispatch('show-modal-province-delete');
        $show_delete = TbProvince::find($ids);
        $this->hiddenId_province = $ids;
    }
    // <!-- delete price -->
    public function delete_Province()
    {
        $ids = $this->hiddenId_province;
        $delete_Province = TbProvince::find($ids);
        $delete_Province->delete();
        $this->resetFiledProvince();
        $this->dispatch('delete');
        $this->dispatch('hide-modal-province-delete');
        $this->dispatch('show-modal-province');
    }
    public function get_backProvince()
    {
        $this->dispatch('show-modal-province');
        $this->dispatch('hide-modal-province-delete');
    }
    // -- ========= end ຂໍ້ມູນແຂວງ ========== -- //

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
