<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DDKOIN DPOS CRYPTO CURRENCY</title>

    <!-- Bootstrap core CSS-->

    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin.css" rel="stylesheet">

    <link href="/css/toast.style.min.css" rel="stylesheet">
    <style>
        .slidefade-enter-active, .slidefade-leave-active {
            transition: all .5s ease;
            transform: translateY(0px);
        }
        .slidefade-enter, .slidefade-leave-to /* .fade-leave-active below version 2.1.8 */ {
            transition: all .5s ease;
            opacity: 0;
            transform: translateY(-50px);
        }
        a:hover{
            cursor:hand;
            cursor:pointer;
        }
        .toast-item-wrapper{
            right:10px;
            top:10px;
            bottom:auto !important;
            height:auto;
        }
        .btn-xs{
            padding:5px;
            width:auto;
            height:auto;
            font-size:12px;
        }
        span.fas{
            margin-right:10px;
        }
        button span.fas{
            margin-right:0;
        }
    </style>
  </head>

  <body id="page-top" >
    <div id="app">
            <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

            <a class="navbar-brand mr-1" @click="$router.push('/admin')" ><img width="80px" src="/img/logo.png"></a>

            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle">
                <span class="fas fa-bars"></span>
            </button>

            <!-- Navbar Search -->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                
            </form>

            <!-- Navbar -->
            <ul class="navbar-nav ml-auto ml-md-0 ">
                <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="fas fa-user-circle fa-fw"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" href="/logout">Logout</a> --}}
                    <a class="dropdown-item" href="/logout">Logout</a>
                </div>
                </li>
            </ul>

            </nav>

            <div id="wrapper">
            <!-- Sidebar -->
            <ul class="sidebar navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" @click="$router.push('/admin')"><span class="fas fa-fw fa-tachometer-alt"></span> {{ __('Banner') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @click="$router.push('/admin/about')"><span class="fas fa-fw fa-info-circle"></span> {{ __('About') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @click="$router.push('/admin/roadmap')"><span class="fas fa-fw fa-road" ></span> {{ __('Roadmap') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @click="$router.push('/admin/tokensale')"><span class="fas fa-fw fa-chart-pie"></span> {{ __('Token Sale') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @click="$router.push('/admin/team')"><span class="fas fa-fw fa-users" ></span> {{ __('Team') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @click="$router.push('/admin/contact')"><span class="fas fa-fw fa-phone" ></span> {{ __('Contact') }}</a>
                </li>
            </ul>

            <div id="content-wrapper">

                <div class="container-fluid">

                <!-- Breadcrumbs-->
                
                <transition mode="out-in" name="slidefade" appear>
                    <router-view></router-view>
                </transition>
                

                </div>
                <!-- /.container-fluid -->

                <!-- Sticky Footer -->
                <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Copyright © DDK Admin Panel 2018</span>
                    </div>
                </div>
                </footer>

            </div>
            <!-- /.content-wrapper -->

            </div>
            <!-- /#wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
            <span class="fas fa-angle-up"></span>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
                </div>
            </div>
            </div>
    </div>
    <!-- Custom scripts for all pages-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/js/toast.script.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/sb-admin.js"></script>
  </body>

</html>
