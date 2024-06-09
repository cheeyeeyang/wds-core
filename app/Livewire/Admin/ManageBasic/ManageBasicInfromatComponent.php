<?php

namespace App\Livewire\Admin\ManageBasic;

use Livewire\Component;

class ManageBasicInfromatComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.manage-basic.manage-basic-infromat-component')->layout('layouts.base');
    }

    // <!-- show ເພີ່ມຂໍ້ມູນ ສິນຄ້າ -->
    public function show_DataProducts()
    {
        $this->dispatch('show-modal-data-products');
    }

    // <!-- show ຂໍ້ມູນຫົວໜ່ອຍ -->
    public function show_DataUnits()
    {
        $this->dispatch('show-modal-data-units');
    }

    // <!-- show ຂໍ້ມູນຫົວໜ່ອຍ -->
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
