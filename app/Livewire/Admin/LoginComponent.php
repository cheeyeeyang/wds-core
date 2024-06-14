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
    protected $rules = [
        'username' => 'required',
        'password' => 'required',
    ];
    protected $messages = [
        'username.required' => 'ໃສ່ຊື່ຜູ້ໃຊ້ກ່ອນ!',
        'password.required' => 'ໃສ່ລະຫັດຜ່ານກ່ອນ!',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function login()
    {
        $this->validate();
        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            $this->username = "";
            $this->password = "";
            $this->dispatch('success');
            return redirect()->route('admin.dashboard');
        } else {
            $this->dispatch('wrong_password');
        }
    }
    public function logout()
    {
        Auth::logout();
        $this->dispatch('success');
        return redirect()->route('admin.login');
    }
}
