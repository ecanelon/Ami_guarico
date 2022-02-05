<?php
session_start();

if(!isset($_SESSION['id'])){
    header("Location: index.php");


}

$nombre = $_SESSION['nombre'];



?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Guarico</title>
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/styleami.css" rel="stylesheet" />
        <script src="js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-ami">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="principal.php">Sistema AMI Guarico</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

            <!-- Navbar-->
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <?php echo $nombre; ?> <i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        <li><a class="dropdown-item" href="logout.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">                            
                            <div class="sb-sidenav-menu-heading">Menú</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#administracion" aria-expanded="false" aria-controls="administracion">
                                <div class="sb-nav-link-icon"><i class="fas fa-id-card-alt"></i></div>
                                Administración
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="administracion" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Usuarios</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Empleados</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Servicios</a>
                                </nav>
                            </div>
                                                     </a>
                                                                                 <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#cobertura" aria-expanded="false" aria-controls="cobertura">
                                <div class="sb-nav-link-icon"><i class="fas fa-laptop-medical"></i></div>
                                Atención
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="cobertura" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Afiliación</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Plan de salud</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Servicios</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Insumos Médicos</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Deudas</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Pagos</a>   

                                </nav>
                            </div>
                                                     </a>
                           


                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Sesión iniciada como: </div>
                        <?php echo $nombre; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>

                    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-user-edit me-1"></i>
                                Consulta de usuarios
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Contraseña</th>
                                            <th>Cedula</th>
                                            <th>Rol</th>


                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Contraseña</th>
                                            <th>Cedula</th>
                                            <th>Rol</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Juan Pereira</td>
                                            <td>12345</td>
                                            <td>16089412</td>
                                            <td>Administrador</td>

                                        </tr>
                                        <tr>
                                            <td>Evelyn Pereira</td>
                                            <td>67890</td>
                                            <td>11262227</td>
                                            <td>Secretaria</td>

                                        </tr>
                                        


                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">


                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="js/Chart.min.js" crossorigin="anonymous"></script>
        <script src="js/simple-datatables@latest.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
