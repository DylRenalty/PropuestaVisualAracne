<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio Aracne</title>

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

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Control de Dispositivos</font></font></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
                                <div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>
                                <font style="vertical-align: inherit;"><font style="-ms-flex-align: center;">Mostrar numero de entradas </font></font>
                                <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font>
                                </option><option value="25"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></option>
                                <option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option>
                                <option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></option>
                                </select></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nombre: activar para ordenar la columna descendente" style="width: 75px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clave</font></font></th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Posición: activar para ordenar la columna ascendente" style="width: 117px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha de registro</font></font></th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Oficina: activar para ordenar la columna de forma ascendente" style="width: 53px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Codigo de especie</font></font></th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Edad: activar para ordenar la columna ascendente" style="width: 38px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Codigo de granja</font></font>
                                    </thead>
                                    <div class="row">
                            <div class="form-group col-md-8">
                            <br>
                                <label class="required">Para poder dar de alta un dispositivo nuevo dentro de la base de datos es necesario dar clic en el boton de nuevo dispositivo para proceder a la captura de datos</label>
                            </div>
                            <div class="form-group col-md-3" STYLE = "margin: 30px 0px 10px 100px">
                            <a href="NuevoRegistro.php" class="btn btn-primary">Agregar nuevo dispositivo</a>
                            </div>
                        </div>
                                    <tbody>

                                        
                                    <tr role="row" class="odd">
                                            <td class="sorting_1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">C001TLAX</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">07/10/2020</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33</font></font></td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">C002TLAX</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">04/11/2020</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">47</font></font></td>
                                            </tr><tr role="row" class="odd">
                                            <td class="sorting_1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">C003TLAX</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">08/02/2020</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">66</font></font></td>
                                             </tr><tr role="row" class="even">
                                            <td class="sorting_1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">C004TLAX</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">16/06/2020</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">41</font></font></td>
                                               </tr><tr role="row" class="odd">
                                            <td class="sorting_1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">C005TLAX</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21/10/2020</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28</font></font></td>
                                            </tr><tr role="row" class="even">
                                            <td class="sorting_1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">C006TLAX</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">07/05/2020</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">61</font></font></td>
                                              </tr><tr role="row" class="odd">
                                            <td class="sorting_1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">C007TLAX</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22/07/2020</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38</font></font></td>
                                             </tr><tr role="row" class="even">
                                            <td class="sorting_1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">C008TLAX</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">07/10/2020</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21</font></font></td>
                                            </tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total: 57 registros</font></font></div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anterior</font></font></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Próximo</font></font></a></li></ul></div></div></div></div>
                            </div>
                        </div>
                    </div>
                  
                      
                               
                               
                         
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
    <script src="vendor/jquery/jquery.min.js"></script>
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

</body>

</html>