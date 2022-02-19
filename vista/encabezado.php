    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>AMI Guarico</title>
        <link href="assets/css/style.css" rel="stylesheet" />
        <link href="assets/css/styles.css" rel="stylesheet" />
        <link href="assets/css/styleami.css" rel="stylesheet"/>
        <script src="assets/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-ami">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="?c=inicio">Sistema AMI Guarico</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

            <!-- Navbar-->
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Alberto Jose <i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        <li><a class="dropdown-item" href="?c=login">Cerrar Sesión</a></li>
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

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#empleados" aria-expanded="false" aria-controls="empleados">
                                <div class="sb-nav-link-icon" href="#"><i class="fas fa-user-md"></i></div>
                                Empleados
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="empleados" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="?c=regempleado">Registro de Empleados</a>
                                            <a class="nav-link" href="#">Consulta</a>
                                        </nav>                               
                                </nav>
                            </div>

                                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Titulares" aria-expanded="false" aria-controls="Titulares">
                                <div class="sb-nav-link-icon" href="#"><i class="fas fa-address-card"></i></div>
                                Titulares
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Titulares" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="?c=regtitular">Registro de Titulares</a>
                                            <a class="nav-link" href="#">Consulta</a>
                                        </nav>                               
                                </nav>
                            </div>



                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Plan" aria-expanded="false" aria-controls="Plan">
                                <div class="sb-nav-link-icon" href="#"><i class="fas fa-heartbeat"></i></div>
                                Planes de Salud
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Plan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="?c=regplanes">Registro de Planes</a>
                                            <a class="nav-link" href="#">Consulta</a>
                                        </nav>                               
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Contratos" aria-expanded="false" aria-controls="Contratos">
                                <div class="sb-nav-link-icon" href="#"><i class="fas fa-scroll"></i></div>
                                Contratos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Contratos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="?c=regcontratos">Registro de Contratos</a>
                                            <a class="nav-link" href="#">Consulta</a>
                                        </nav>                               
                                </nav>
                            </div>



                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Atencion" aria-expanded="false" aria-controls="Atencion">
                                <div class="sb-nav-link-icon" href="#"><i class="fas fa-hand-holding-medical"></i></div>
                                Atención Médica
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Atencion" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="?c=regatencion">Registro de Atención</a>
                                            <a class="nav-link" href="#">Consulta</a>
                                        </nav>                               
                                </nav>
                            </div>

                                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Pagos" aria-expanded="false" aria-controls="Pagos">
                                <div class="sb-nav-link-icon" href="#"><i class="fas fa-cash-register"></i></div>
                                Pagos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Pagos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="?c=regpagos">Registro de Pagos</a>
                                            <a class="nav-link" href="#">Consulta</a>
                                        </nav>                               
                                </nav>
                            </div>

                                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Servicios" aria-expanded="false" aria-controls="Servicios">
                                <div class="sb-nav-link-icon" href="#"><i class="fas fa-first-aid"></i></div>
                                Servicios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Servicios" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="?c=regservicios">Registro de Servicios</a>
                                            <a class="nav-link" href="#">Consulta</a>
                                        </nav>                               
                                </nav>
                            </div>

                                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Serxplan" aria-expanded="false" aria-controls="Serxplan">
                                <div class="sb-nav-link-icon" href="#"><i class="fas fa-ambulance"></i></div>
                                Servicios por plan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Serxplan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="?c=regservxplan">Registro de Servicios por Plan</a>
                                            <a class="nav-link" href="#">Consulta</a>
                                        </nav>                               
                                </nav>
                            </div>



                                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Insumos" aria-expanded="false" aria-controls="Insumos">
                                <div class="sb-nav-link-icon" href="#"><i class="fas fa-box"></i></div>
                                Insumos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Insumos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="?c=reginsumos">Registro de Insumos</a>
                                            <a class="nav-link" href="#">Consulta</a>
                                        </nav>                               
                                </nav>
                            </div>

                                                                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Insumxaten" aria-expanded="false" aria-controls="Insumxaten">
                                <div class="sb-nav-link-icon" href="#"><i class="fas fa-syringe"></i></div>
                                Insumos por Atención
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Insumxaten" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="?c=reginsumxaten">Registro de Insumos por Atención</a>
                                            <a class="nav-link" href="#">Consulta</a>
                                        </nav>                               
                                </nav>
                            </div>


                              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Reportes" aria-expanded="false" aria-controls="Reportes">
                                <div class="sb-nav-link-icon" href="#"><i class="fas fa-download"></i></div>
                                Reportes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Reportes" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="?c=reportcontrato">Generar Reporte de Contratos</a>
                                            <a class="nav-link" href="?c=reportplanes">Generar Reporte de Planes de Salud</a>
                                            <a class="nav-link" href="?c=reportservicios">Generar Reporte de Servicios</a>
                                             <a class="nav-link" href="?c=reportatencion">Generar Reporte de Atención Médica</a>
                                             <a class="nav-link" href="?c=reportinsumos">Generar Reporte de Insumos Médicos</a>
                                             <a class="nav-link" href="?c=reportpagos">Generar Reporte de Pagos</a>
                                             <a class="nav-link" href="?c=reportempleados">Generar Reporte de Empleados</a>
                                        </nav>                               
                                </nav>
                            </div>




                            


                        
                        </a>
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Sesión iniciada como: </div>
                Alberto Jose
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">