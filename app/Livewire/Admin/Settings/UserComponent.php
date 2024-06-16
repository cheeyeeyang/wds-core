<?php

namespace App\Livewire\Admin\Settings;

use App\Models\TbEmployee;
use App\Models\TbRole;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $username, $password, $emoplyeeId, $roleId, $car_sign, $hiddenId;
    public $search;
    public function render()
    {
        // $search = $this->search;
        $employees = TbEmployee::orderBy('id', 'desc')->get();
        $roles = TbRole::orderBy('id', 'desc')->get();

        $users = User::orderBy('id', 'desc')->where(function ($q) {
            $q->where('username', 'like', '%' . $this->search . '%')
                ->orwhere('car_sign', 'like', '%' . $this->search . '%');
        })->paginate(8);
        return view('livewire.admin.settings.user-component', compact('users', 'employees', 'roles'))->layout('layouts.base');
    }
    public function resetFiledUser()
    {
        $this->username = '';
        $this->password = '';
        $this->emoplyeeId = '';
        $this->roleId = '';
        $this->car_sign = '';
        $this->hiddenId = '';
    }

    public function creat_Store()
    {
        $updateId = $this->hiddenId;

        if ($updateId > 0) {

            $this->validate([
                'username' => 'required',
                'password' => 'required|min:6',
                'emoplyeeId' => 'required',
                'roleId' => 'required',
            ], [
                'username.required' => 'ກະລຸນາໃສ່ ຊື່ຜູ້ໃຊ້ກ່ອນ!',
                'password.required' => 'ກະລຸນາໃສ່ ລະຫັດຜ່ານກ່ອນ!',
                'password.min' => 'ລະຫັດຜ່ານຕ້ອງຍາວຢ່າງນ້ອຍ 6 ຕົວອັກສອນ ຫືຼ 6 ຕົວເລກ!',
                'emoplyeeId.required' => 'ກະລຸນາເລືອກ ພະນັກງານກ່ອນ!',
                'roleId.required' => 'ກະລຸນາເລືອກ ສິດກ່ອນ!',
            ]);

            try {

                $update_User = User::find($updateId);

                $update_User->username = $this->username;
                $update_User->employee_id = $this->emoplyeeId;
                $update_User->role_id = $this->roleId;
                $update_User->car_sign = $this->car_sign;
                $update_User->password = bcrypt($this->password);

                $update_User->update();
                $this->resetFiledUser();
                $this->dispatch('edit');
            } catch (\Exception $ex) {
                $this->dispatch('something_went_wrong');
            }
        } else {

            $this->validate([
                'username' => 'required',
                'password' => 'required|min:6',
                'emoplyeeId' => 'required',
                'roleId' => 'required',
            ], [
                'username.required' => 'ກະລຸນາໃສ່ ຊື່ຜູ້ໃຊ້ກ່ອນ!',
                'password.required' => 'ກະລຸນາໃສ່ ລະຫັດຜ່ານກ່ອນ!',
                'password.min' => 'ລະຫັດຜ່ານຕ້ອງຍາວຢ່າງນ້ອຍ 6 ຕົວອັກສອນ ຫືຼ 6 ຕົວເລກ!',
                'emoplyeeId.required' => 'ກະລຸນາເລືອກ ພະນັກງານກ່ອນ!',
                'roleId.required' => 'ກະລຸນາເລືອກ ສິດກ່ອນ!',
            ]);

            try {

                $add_user = new User();
                if ($this->username) {
                    $add_user->username = $this->username;
                }
                if ($this->emoplyeeId) {
                    $add_user->employee_id = $this->emoplyeeId;
                }
                if ($this->roleId) {
                    $add_user->role_id  = $this->roleId;
                }
                if ($this->car_sign) {
                    $add_user->car_sign = $this->car_sign;
                }
                $add_user->password = bcrypt($this->car_sign);

                $add_user->save();
                $this->resetFiledUser();
                $this->dispatch('add');
            } catch (\Exception $e) {
                $this->dispatch('something_went_wrong');
            }
        }
    }
    public function show_edit($id)
    {
        $edit = User::find($id);
        $this->hiddenId = $id;
        $this->username = $edit->username;
        $this->emoplyeeId = $edit->employee_id;
        $this->roleId = $edit->role_id;
        $this->car_sign = $edit->car_sign;
    }

    public function show_detory($id)
    {
        $this->dispatch('show-modal-delete');
        $show_user = User::find($id);
        $this->hiddenId = $id;
    }

    public function create_Detory()
    {
        $id = $this->hiddenId;

        $data = User::find($id);
        $data->delete();
        $this->dispatch('delete');
        $this->dispatch('hide-modal-delete');
    }
}
