<!DOCTYPE html>
<html lang="en">

<head>
    <!-- inicio del codigo -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Monitoreo</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <img src="dyl3.png" width="230" height="130"> 
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-1 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Filtrar por:
            </div>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span style="color: #ffffff;">Por especie</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header" style="color: #ffffff;">Por especie</h6>
                        <a class="collapse-item" style="color: #ffffff;">Vacuno</a>
                        <a class="collapse-item" style="color: #ffffff;">Ovino</a>
                        <a class="collapse-item" style="color: #ffffff;">Porcino</a>
                    </div>
                </div>
            </li>

             <!-- Nav Item - Utilities Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span style="color: #ffffff;">Por granja</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header" style="color: #ffffff;">Por granja</h6>
                        <a class="collapse-item" style="color: #ffffff;">Granja 1</a>
                        <a class="collapse-item" style="color: #ffffff;">Granja 2</a>
                        <a class="collapse-item" style="color: #ffffff;">Granja 3</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!--Boton de aplicar cambios-->
            <a class="btn btn-primary" href="login.html">Aplicar cambios </a>
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

                        <li class="nav-item navbar-brand">
 
                                <a class="nav-link dropdown-toggle" role="button" id="userDropdown" 
                                 href="index.php" style="color: #ffffff; font-size: large;">Dispositivos</a>
                                
                
                        </li>

                        <li class="nav-item navbar-brand">
                            <a class="nav-link dropdown-toggle" role="button" id="userDropdown" 
                            href="Ubicación.html" style="color: #ffffff; font-size: large;">Ubicación
                            </a>
                        </li>

                        <li class="nav-item navbar-brand">
                            <a class="nav-link dropdown-toggle" role="button" id="userDropdown" 
                            href="Monitoreo.php" style="color: #ffffff; font-size: large;">Monitoreo
                            </a>
                        </li>
                        <!-- Nav Item - Alerts -->
                            <div class="topbar-divider d-none d-sm-block"></div>
                      

                        <!-- Nav Item - User Information -->

                       
                        <li class="nav-item navbar-brand">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline small">Ganado Mexico SA de CV</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>

                            
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="perfil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesión
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->
                

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="card">
  <div class="card-header">
    Monitoreo de dispositivo
  </div>
  <div class="card-body">
    <h5 class="card-title">Valores para el dispositivo: C005</h5>
    <p class="card-text">Por favor seleccione un rango de fecha para poder mostrar los valores correspondientes.</p>
     <!--esta parte  pone el calendario-->
     <script  type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
                <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
                <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
                <input type="text" STYLE = "margin: 0px 0px 0px 500px" name="daterange" value="03/19/2021 - 03/22/202021" />

                <script>
                $(function() {
                $('input[name="daterange"]').daterangepicker({
                    opens: 'center'
                }, function(start, end, label) {
                    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                });
                });
                </script>
                </div>
                </div><br>
               
                <div class="row">

    <!-- Area Chart -->
    
  <div class="col-sm-6">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gráfico de Temperatura</font></font></h6>
        </div>
        <div class="card-body">
            <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="myAreaChart" width="657" height="400" class="chartjs-render-monitor" style="display: block; height: 320px; width: 446px;"></canvas>
            </div>
            <hr><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            Para agregar una nota a este registro de clic en agregar nota 
            <a href="#" style="margin-left: 10px" class="btn btn-primary">Agregar nota</a>
                           
             </font></font></div>
    </div>
</div>
    <!-- Bar Chart -->
    
  <div class="col-sm-6">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gráfico de Bateria</font></font></h6>
        </div>
        <div class="card-body">
            <div class="chart-bar"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="myBarChart" width="657" height="400" class="chartjs-render-monitor" style="display: block; height: 320px; width: 446px;"></canvas>
            </div>
            <hr><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            Para agregar una nota a este registro de clic en agregar nota 
            <a href="#" style="margin-left: 10px" class="btn btn-primary">Agregar nota</a>
               
              </font></font></div>
    </div>
</div>

<br>
<br>
                         
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Estas seguro que deseas cerrar esta sesión?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleciona el boton en la opcion salir para poder dar por terminada la sesión.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.php">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
</body>

</html>