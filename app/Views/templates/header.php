<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inventario JB</title>
        <link href="<?php echo base_url(); ?>/css/styles.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
        <script src="<?php echo base_url(); ?>/js/all.min.js"></script>
    </head>
    
    <body class="sb-nav-fixed">
        
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand"  href="<?php echo base_url('/inicio'); ?>">Inicio</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>

            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                </li>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#!">Settings</a>
                    <a class="dropdown-item" href="#!">Usuarios</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.php">Cerrar Sesión</a>
                </div>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        
                        <div class="nav">
                        
                                <h3>Inventario JB</h3>

                            <div class="sb-sidenav-menu-heading"></div>

                            <div class="sb-sidenav-menu-heading"></div>
                            <li>
                                <a href="<?php echo base_url('/visualizar_usuarios'); ?>" class="nav-link text-white">
                                    <svg class="bi me-2" width="16" height="40"><use xlink:href="#table"></use></svg>
                                    Ver Usuarios
                                </a>
                            </li>
                            <div class="sb-sidenav-menu-heading"></div>
                            <li>
                                <a href="<?php echo base_url('/bodega'); ?>" class="nav-link text-white">
                                    <svg class="bi me-2" width="16" height="40"><use xlink:href="#table"></use></svg>
                                    Bodega
                                </a>
                            </li>
                            <div class="sb-sidenav-menu-heading"></div>
                            <li>
                                <a href="<?php echo base_url('/proyectos'); ?>" class="nav-link text-white">
                                    <svg class="bi me-2" width="16" height="40"><use xlink:href="#grid"></use></svg>
                                    Proyectos
                            </a>
                            </li>
                            <div class="sb-sidenav-menu-heading"></div>
                            <li>
                                <a href="<?php echo base_url('/salir'); ?>" class="btn btn-danger col-12"><span class="sr-only"></span>
                                    <svg class="bi me-2" width="16" height="40"><use xlink:href="#grid"></use></svg>
                                    Cerrar Sesión
                            </a>
                            </li>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                        <a href="#" class="navbar-brand"><?php echo session('usuario'); ?></a>
                    </nav>

                    
                </nav>
            </div>