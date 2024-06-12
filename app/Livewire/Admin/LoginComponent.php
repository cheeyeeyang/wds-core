<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginComponent extends Component
{
    public $username, $password;
    public function render()
    {
        return view('livewire.admin.login-component')->layout('layouts.login');
    }

    public function login()
    {
        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            session()->flash('success', 'ເຂົ້າລະບົບສຳເລັດ');

            // Clear input values after successful login
            $this->username = "";
            $this->password = "";

            // Check for intended URL and redirect accordingly
            if (session()->has('url.intended')) {
                return redirect(session()->get('url.intended'));
            } else {
                return redirect()->route('admin.dashboard');
            }
        } else {
            $this->dispatch('something_went_wrong');
            session()->flash('error', 'ຊື່ຜູ້ໃຊ້ ຫຼື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ');

            // Clear input values after failed login attempt
            $this->username = "";
            $this->password = "";

            return redirect()->route('admin.login');
        }
    }
}
