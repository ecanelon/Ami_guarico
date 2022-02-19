<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>AMI Guarico</title>
    <link href="assets/css/style.css" rel="stylesheet"/>
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/styleami.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-free-5.15.1-web/css/all.css">
    <script src="js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-ami">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3">Sistema AMI Guarico</a>
        <!-- Sidebar Toggle-->

        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Administrador <i class="fas fa-user fa-fw"></i></a>
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
                            Administracion
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>


                        <div class="collapse" id="administracion" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Usuario" aria-expanded="false" aria-controls="Usuario">
                                    Usuarios
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="Usuario" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="">Registro de usuarios</a>
                                        <a class="nav-link" href="">Consulta</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Empleados" aria-expanded="false" aria-controls="Empleados">
                                    Empleados
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="Empleados" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="?pagina=regempleado">Registro de Empleados</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Servicios" aria-expanded="false" aria-controls="Servicios">
                                    Servicios
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="Servicios" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="?pagina=serviciobuscar">Registro de Servicios</a>
                                        <a class="nav-link" href="?pagina=listar_servicio">Consulta</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Insumos" aria-expanded="false" aria-controls="Insumos">
                                    Insumos Medicos
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="Insumos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="?pagina=">Ingreso</a>
                                        <a class="nav-link" href="?pagina=">Salida</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>


                        <!--Aqui empieza el primer nivel del menu-->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#atencion" aria-expanded="false" aria-controls="atencion">
                            <div class="sb-nav-link-icon"><i class="fas fa-heartbeat"></i></div>
                            Atención
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="atencion" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Afiliación" aria-expanded="false" aria-controls="Afiliación">
                                    Afiliación
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="Afiliación" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="?pagina=afiliadoregistrar">Registro de Afiliados</a>
                                        <a class="nav-link" href="?pagina=listar_afiliado">Consulta</a>
                                    </nav>
                                </div>
                                <!--*****************OPCION de PLAn de Salud modificado por Lissette ********-->
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Plandesalud" aria-expanded="false" aria-controls="Plandesalud"> Plan de Salud
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>


                                <div class="collapse" id="Plandesalud" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="?pagina=planbuscar">Registro de Plan</a>
                                        <a class="nav-link" href="?pagina=listar_plan">Listar Planes de Salud</a>
                                    </nav>
                                </div>
                                <!--**************OPCION de PLAn de Salud *************-->


                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#clientes" aria-expanded="false" aria-controls="clientes">
                                    Clientes
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>


                                <div class="collapse" id="clientes" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="?pagina=">Registrar</a>
                                        <a class="nav-link" href="?pagina=">Modificar</a>
                                    </nav>
                                </div>


                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Cobranza" aria-expanded="false" aria-controls="Cobranza">
                                    Cobranza
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>


                                <div class="collapse" id="Cobranza" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="">Deudas</a>
                                        <a class="nav-link" href="">Pagos</a>
                                    </nav>
                                </div>


                            </nav>


        </nav>
    </div>
    <div id="layoutSidenav_content">
