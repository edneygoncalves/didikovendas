<!DOCTYPE html>
<html lang="en">

@include('admin-side.layout.header')

<body class="sidebar-mini">
    <div class="wrapper">


        <nav class="main-header navbar navbar-expand navbar-white navbar-light">


            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#">
                        <i class="fas fa-bars"></i>
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                </li>
            </ul>

        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="http://laradock.didiko.com/home" class="brand-link ">
                <img src="http://laradock.didiko.com/vendor/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE"
                    class="brand-image img-circle elevation-3" style="opacity:.8">
                <span class="brand-text font-weight-light ">
                    <b>Didiko</b>Vendas
                </span>
            </a>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu">
                        <li class="nav-header ">
                            Comércio
                        </li>
                        @if (\App\Models\Viagem::next())
                            <li class="nav-item">
                                <a class="nav-link  " href="{{ route('viagens.index') }}">
                                    <i class="far fa-fw fa-file "></i>
                                    <p>
                                        Viagens
                                        <span class="badge badge-danger right">
                                            {{ \App\Models\Viagem::next()->count() }}
                                        </span>
                                    </p>
                                </a>
                            </li>

                        @endif
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ route('vendas.index') }}">
                                <i class="far fa-fw fa-file "></i>
                                <p>
                                    Vendas
                                    @if(\App\Models\Venda::count())
                                        <span class="badge badge-success right">
                                            {{ \App\Models\Venda::count() }}
                                        </span>
                                    @endif
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ route('encomendas.index') }}">
                                <i class="far fa-fw fa-file "></i>
                                <p>
                                    Encomendas
                                </p>
                            </a>
                        </li>

                        <li class="nav-header ">
                            Produtos
                        </li>
                        <li class="nav-item">

                            <a class="nav-link  " href="/admin/quadros">

                                <i class="far fa-fw fa-file "></i>

                                <p>
                                    Quadros

                                </p>

                            </a>

                        </li>
                        <li class="nav-item">

                            <a class="nav-link  " href="/admin/palhetas">

                                <i class="far fa-fw fa-file "></i>

                                <p>
                                    Palhetas

                                </p>

                            </a>

                        </li>


                        <li class="nav-header ">
                            Outros
                        </li>
                        <li class="nav-item">

                            <a class="nav-link  " href="{{ route('viagens.index') }}">

                                <i class="far fa-fw fa-file "></i>
                                <p>
                                    Viagens
                                </p>
                            </a>

                        </li>
                        <li class="nav-item">

                            <a class="nav-link  " href="{{ route('clientes.index') }}">

                                <i class="far fa-fw fa-file "></i>
                                <p>
                                    Clientes
                                </p>
                            </a>

                        </li>
                    </ul>
                </nav>
            </div>

        </aside>


        <div class="content-wrapper ">


            <div class="content-header">
                <div class="container-fluid">
                    @yield('content_header')
                </div>
            </div>


            <div class="content">
                <div class="container-fluid">

                    @yield('content')


                </div>
            </div>

        </div>





    </div>


    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>



    <script src="/vendor/adminlte/dist/js/adminlte.min.js"></script>
    <script src="{{asset('bower_components/bootstrap/js/modal.js')}}"></script>
    @yield('js')


</body>

</html>
