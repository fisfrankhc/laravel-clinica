@include('layouts.head')

<body class="hold-transition skin-blue sidebar-mini fixed">
    <div class="wrapper">

        @include('layouts.header')

        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    BIENVENIDO
                    <small>CLÍNICA HUANCAYO</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li><a href="#">Configuracion</a></li>
                    <li class="active">USUARIOS</li>
                </ol>
            </section>

            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">LISTA DE USUARIOS</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NOMBRE</th>
                                            <th>CORREO</th>
                                            <th>TEL&Eacute;FONO</th>
                                            <th>ROL</th>
                                            <th>SUCURSAL</th>
                                            <th>ESTADO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($listaDeUsuarios as $usuarioDato)
                                        <tr>
                                            <td>{{$usuarioDato->name}}</td>
                                            <td>{{$usuarioDato->email}}</td>
                                            <td>{{$usuarioDato->user_telefono}}</td>
                                            <td>{{$usuarioDato->rolDeUsuario->rol_name}}</td>
                                            <td>{{$usuarioDato->sucursalDeUsuario->suc_nombre}}</td>
                                            @if($usuarioDato->user_estado=='1')
                                                <td>ACTIVO</td>
                                            @endif
                                        </tr>
                                        @empty
                                            <td rowspan="5">SIN DATOS</td>
                                        @endforelse

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>NOMBRE</th>
                                            <th>CORREO</th>
                                            <th>TEL&Eacute;FONO</th>
                                            <th>ROL</th>
                                            <th>SUCURSAL_ID</th>
                                            <th>ESTADO</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>
    <!-- /.content-wrapper -->

    @include('layouts.footer')
    @include('layouts.scripts')

</body>

</html>
