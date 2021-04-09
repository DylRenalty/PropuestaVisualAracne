<!DOCTYPE html>
<html lang="en">

<head>
    <!-- inicio del codigo -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cuenta</title>

    <!-- Custom fonts for this template-->

    <link href="http://ifightcrime.github.io/bootstrap-growl/jquery.bootstrap-growl.min.js">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js">
    
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body >

                   <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <img src="dyl3.png" width="230" height="130"> 

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
                                <a class="dropdown-item" href="#">
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
                

                <!-- a partir de aqui inicia el cuerpo de la pagina -->
                <div class="container-fluid">
                <h1 class="h3 mb-2 text-gray-800"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informacion del perfil</font></font></h1>
                <br>
                <div class="col-sm-8" STYLE = "margin-left: 265px">
    <div class="card text-center">
  <div class="card-header">
    ¿Deseas modificar alguno de los datos de tu cuenta?
  </div>
  <div class="card-body">
  <form method="POST" name="form work" action="">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="folioFolder" class="required">Nombre de la empresa</label>
                                <input type="text" name="EsFormato" id="folioFolder" class="form-control input-sm" placeholder="Ej. Ganado de Mexico S.A de C.V" required="">
                        </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="nombreFolder" class="required">Correo Electronico</label>
                                <input type="text" id="inputNombrePadre" class="form-control input-sm" placeholder="Ej. Granjas-Mex@gobiernoTlaxcala.mx" required=""></span>
                                </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="nombreFolder" class="required">Contraseña de acceso</label>
                                <input type="text" name="name" autofocus="" id="nombreFolder" class="form-control input-sm" placeholder="$GranjasMexico34" required="">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="required">si desea agregar un logo o foto representativa a su inicio de sesión puede hacerlo dando clic en seleccionar archivo</label>
                                </div>
                                <!--en esta parte insertamos la foto para que se pueda visualizar y guardar en la DB-->
                            <div class="form-group col-md-3" STYLE = "margin: 5px 0px 0px 20px">
                            <input type="file"  class="btn btn-secondary"></input>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="nombreFolder" class="required">Contraseña de acceso</label>
                                <input type="text" name="name" autofocus="" id="nombreFolder" class="form-control input-sm" placeholder="$GranjasMexico34" required="">
                            </div>
                        </div>
                
    <a href="index.php" type="button" class="btn btn-secondary">Cancelar</a>
    <button class="btn btn-primary">Guardar cambios</button><br><br>

    <!--uso de alertas para señalar algun hecho importante-->
    <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>¡Exito!</strong> Los datos se guardaron correctamente en tu registro.
</div> 
  </div>
</div>

<br>
<br>

      <!--Tipos de alertas para cualquiera de las siguientes situaciones
    <div class="alert alert-primary" role="alert">
  This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert alert-secondary" role="alert">
  This is a secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert alert-success" role="alert">
  This is a success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert alert-danger" role="alert">
  This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert alert-warning" role="alert">
  This is a warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert alert-info" role="alert">
  This is a info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert alert-light" role="alert">
  This is a light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert alert-dark" role="alert">
  This is a dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
    -->                    
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


</body>

</html>