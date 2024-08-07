<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Página Inicial</title>

    <!-- Custom fonts for this template-->
    <link href={{ asset("admin_assets/vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">
    <link
        href={{ asset("https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i")}}
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href={{ asset("admin_assets/css/sb-admin-2.min.css")}} rel="stylesheet">
    <link rel="stylesheet" href={{ asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css")}}>
    <link href={{ asset("admin_assets/css/style.css")}} type="text/css" rel="stylesheet" />

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon">
                    <img src={{ asset("admin_assets/img/ginastica.png")}} style="width: 50px;" alt="Logo da academia">
                </div>
                <div class="sidebar-brand-text mx-3">SysFit</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Página Inicial</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Utilidades
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="/agendacadastro">
                    <i class="fas fa-fw  fa-calendar-o"></i>
                    <span>Agendamento</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/avaliacao">
                    {{-- <i class="fas fa-fw fa-running"></i> --}}
                    <i class="fas fa-fw fa-bar-chart"></i>
                    <span>Avaliação</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/relatoriotreinos">
                    <i class="fas fa-fw fa-running"></i>
                    <span>Relatório de Treinos</span></a>
            </li>

         

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Parametrização
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Cadastros</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Cadastros:</h6>
                        <a class="collapse-item" href="/clientefornecedor">Cliente/Fornecedor</a>
                        <a class="collapse-item" href="/colaborador">Colaboradores</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseParam"
                    aria-expanded="true" aria-controls="collapseParam">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Parametrizações</span>
                </a>
                <div id="collapseParam" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Parametrização:</h6>
                        <a class="collapse-item" href="/acessorios">Acessório</a>
                        <a class="collapse-item" href="/aparelhos">Aparelho</a>
                        <a class="collapse-item" href="/tipotreino">Tipos de Treino</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    @if (Auth::check())
                                        {{ Auth::user()->TXT_NOME }} <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        </p>
                                    @endif

                                </span>

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/logout">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright Marcelo M Ferreira &copy;  2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Aviso!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="result"></div>
                </div>
                <div class="modal-footer" id="botoesModal">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src={{ asset("admin_assets/vendor/jquery/jquery.min.js")}}></script>
    <script src={{ asset("admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>

    <!-- Core plugin JavaScript-->
    <script src={{ asset("admin_assets/vendor/jquery-easing/jquery.easing.min.js")}}></script>

    <!-- Custom scripts for all pages-->
    <script src={{ asset("admin_assets/js/sb-admin-2.min.js")}}></script>

    <!-- Page level plugins -->
    <script src={{ asset("admin_assets/vendor/chart.js/Chart.min.js")}}></script>

    <!-- Page level custom scripts -->
    <script src={{ asset("admin_assets/js/demo/chart-area-demo.js")}}></script>
    <script src={{ asset("admin_assets/js/demo/chart-pie-demo.js")}}></script>

</body>

</html>
