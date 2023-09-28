<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <p style="font-size: 1rem">{{ Auth::user()->email }}</p>
                {{-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> --}}
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('configuracion/usuarios') }}">
                    <i class="fa fa-users"></i> <span>USUARIO</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-address-book"></i> <span>ROL</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-truck"></i> <span>SUCURSAL</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>