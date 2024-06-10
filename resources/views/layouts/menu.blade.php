<div>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4" style="background-color: dodgerblue;" <!-- Brand Logo -->
        <a href="#" class="brand-link">
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
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link">
                            <i class="nav-icon fa fa-home text-white"></i>
                            <p class="text-white">
                                ໜ້າຫັຼກ
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.manage_basic_formation') }}" class="nav-link">
                            <i class="nav-icon fa fa-address-card text-white"></i>
                            <p class="text-white">
                                ຈັກການຂໍ້ມູນພື້ນຖານ
                            </p>
                        </a>
                    </li>

                    <!-- <li class="nav-header">EXAMPLES</li> -->

                    <li class="nav-item">
                        <a href="{{ route('admin.burk_pay_water_payment') }}" class="nav-link">
                            <i class="nav-icon fa fa-shower text-white"></i>
                            <p class="text-white">
                                ເບີກຈ່າຍນໍ້າ ແລະ ຊຳລະເງີນ
                                <!-- <span class="badge badge-info right">2</span> -->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.sell_factory_page') }}" class="nav-link">
                            <i class="nav-icon fa fa-shopping-bag text-white"></i>
                            <p class="text-white">
                                ຂາຍໜ້າໂຮງງານ
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.expense') }}" class="nav-link">
                            <i class="nav-icon fa fa-clipboard text-white" aria-hidden="true"></i>
                            <p class="text-white">
                                ບັນທືກລາຍຈ່າຍ
                            </p>
                        </a>
                    </li>

                    <!-- ຕັ້ງຄ່າລະບົບ -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-cog text-white"></i>
                            <p class="text-white">
                                ຕັ້ງຄ່າລະບົບ
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.manage_user_page') }}" class="nav-link">
                                    <i class="fa fa-id-card text-white" aria-hidden="true"></i>
                                    <p class="text-white">ຈັດການໜ້າທີ່ຜູ້ໃຊ້</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.manage_rigth') }}" class="nav-link">
                                    <i class="fa fa-id-card text-white" aria-hidden="true"></i>
                                    <p class="text-white">ຈັດການສິດທີ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.user') }}" class="nav-link">
                                    <i class="fa fa-users text-white" aria-hidden="true"></i>
                                    <p class="text-white">ຂໍ້ມູນຜູ້ໃຊ້ລະບົບ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.define_user_right') }}" class="nav-link">
                                    <i class="fa fa-id-card text-white" aria-hidden="true"></i>
                                    <p class="text-white">ກຳນົດສິດທີໃຫ້ຜູ້ໃຊ້</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-info text-white"></i>
                            <p class="text-white">
                                ລາຍງານ
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.login') }}" class="nav-link">
                            <i class="fa fa-sign-out text-white" aria-hidden="true"></i>
                            <p class="text-white">
                                ອອກຈາກລະບົບ
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            <!-- <div class="card-footer">
                <button class="btn btn-light btn-block">Logout</button>
             </div> -->
        </div>
        <!-- /.sidebar -->
    </aside>
</div>