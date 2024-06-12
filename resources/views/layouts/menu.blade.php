<div>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4" style="background: linear-gradient(to bottom,#226FB7, #0D9ADE);" <!-- Brand Logo -->
        <a href="{{ route('admin.dashboard') }}" class="brand-link">
            <img src="{{ asset('logo\LOGO.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 15">
            <span class="brand-text text-white">ໂຮງງານນໍ້າດື່ມ</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item @if(request()->segment(1) == 'dashboard') actives @endif">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link">
                            <i class="nav-icon fa fa-home"></i>
                            <p>
                                ໜ້າຫັຼກ
                            </p>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->segment(1) == 'manage-basic-information') actives @endif">
                        <a href="{{ route('admin.manage_basic_formation') }}" class="nav-link">
                            <i class="nav-icon fa fa-address-card"></i>
                            <p>
                                ຈັກການຂໍ້ມູນພື້ນຖານ
                            </p>
                        </a>
                    </li>

                    <!-- <li class="nav-header">EXAMPLES</li> -->

                    <li class="nav-item @if(request()->segment(1) == 'burk-pays-water-payment') actives @endif">
                        <a href="{{ route('admin.burk_pay_water_payment') }}" class="nav-link">
                            <i class="nav-icon fa fa-shower"></i>
                            <p>
                                ເບີກຈ່າຍນໍ້າ ແລະ ຊຳລະເງີນ
                                <!-- <span class="badge badge-info right">2</span> -->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->segment(1) == 'sell-factory-page') actives @endif">
                        <a href="{{ route('admin.sell_factory_page') }}" class="nav-link">
                            <i class="nav-icon fa fa-shopping-bag"></i>
                            <p>
                                ຂາຍໜ້າໂຮງງານ
                            </p>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->segment(1) == 'expenses') actives @endif">
                        <a href="{{ route('admin.expense') }}" class="nav-link">
                            <i class="nav-icon fa fa-clipboard" aria-hidden="true"></i>
                            <p>
                                ບັນທືກລາຍຈ່າຍ
                            </p>
                        </a>
                    </li>

                    <!-- ຕັ້ງຄ່າລະບົບ -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-cog"></i>
                            <p>
                                ຕັ້ງຄ່າລະບົບ
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item @if(request()->segment(1) == 'manage-user-page') actives @endif">
                                <a href="{{ route('admin.manage_user_page') }}" class="nav-link">
                                    <i class="fa fa-id-card" aria-hidden="true"></i>
                                    <p>ຈັດການໜ້າທີ່ຜູ້ໃຊ້</p>
                                </a>
                            </li>
                            <li class="nav-item @if(request()->segment(1) == 'manage-rigths') actives @endif">
                                <a href="{{ route('admin.manage_rigth') }}" class="nav-link">
                                    <i class="fa fa-id-card" aria-hidden="true"></i>
                                    <p>ຈັດການສິດທີ</p>
                                </a>
                            </li>
                            <li class="nav-item @if(request()->segment(1) == 'users') actives @endif">
                                <a href="{{ route('admin.user') }}" class="nav-link">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                    <p>ຂໍ້ມູນຜູ້ໃຊ້ລະບົບ</p>
                                </a>
                            </li>
                            <li class="nav-item @if(request()->segment(1) == 'define-user-right') actives @endif">
                                <a href="{{ route('admin.define_user_right') }}" class="nav-link">
                                    <i class="fa fa-id-card" aria-hidden="true"></i>
                                    <p>ກຳນົດສິດທີໃຫ້ຜູ້ໃຊ້</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-info"></i>
                            <p>
                                ລາຍງານ
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            <div style="margin-top:100%;">
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-info btn-block text-dark"><i class="fa fa-sign-out text-dark" aria-hidden="true"></i> ອອກຈາກລະບົບ</a>
            </div>
        </div>
        <!-- /.sidebar -->
    </aside>
</div>