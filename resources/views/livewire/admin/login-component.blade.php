<div class="">
    <div class="login-box">
        <div class="card">
            <div class="card-body">
                <p class="login-box-msg">
                    <a href="#" class="brand-link">
                        <img src="{{ asset('logo/LOGO.jpg') }}" alt="AdminLTE Logo" class=" img-circle elevation-3" height="70">
                    </a>
                </p>
                <form wire:submit.prevent="login">
                    <label for="username">Username</label>
                    <div class="input-group mb-3">
                        <input wire:model="username" type="text" class="form-control" placeholder="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    @error('username') <span style="color: red" class="error">{{ $message }}</span> <br> @enderror
                    <label for="password">Password</label>
                    <div class="input-group mb-3">
                        <input wire:model="password" type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password') <span style="color: red" class="error">{{ $message }}</span> @enderror
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    ຈື່ລະຫັດຜ່ານ
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <button wire:click="login" class="btn btn-block btn-primary">
                        Sign in
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>