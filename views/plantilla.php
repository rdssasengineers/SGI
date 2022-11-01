<?php
session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sistema de Gestión de Inventarios</title>
  <!-- <link rel="canonical" href="https://www.wrappixel.com/templates/adminpro/" /> -->
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="./views/assets/images/favicon.png" />
  <!-- iconos de boostrap 5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- this pagjs -->
  <link rel="stylesheet" href="./views/assets/libs/apexcharts/dist/apexcharts.css" />
  <link href="./views/assets/libs/jvectormap/jquery-jvectormap.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link href="./views/dist/css/style.min.css" rel="stylesheet" />
</head>

<body>
  <!-- -------------------------------------------------------------- -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- -------------------------------------------------------------- -->
  <div class="preloader">
    <svg class="tea lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z" stroke="#2962FF" stroke-width="2"></path>
      <path d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34" stroke="#2962FF" stroke-width="2"></path>
      <path id="teabag" fill="#2962FF" fill-rule="evenodd" clip-rule="evenodd" d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"></path>
      <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="#2962FF"></path>
      <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#2962FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
  </div>
  <!-- -------------------------------------------------------------- -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- -------------------------------------------------------------- -->
  <!-- Aqui va el contenido de la pagina -->
  <?php
  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") { ?>
    <div id="main-wrapper">
      <!-- Aquí va la cabezera -->
      <?php include "views/pages/cabezera.php"; ?>

      <!-- Aquí va el menú -->
      <?php include "views/pages/menu.php"; ?>
      <!-- -------------------------------------------------------------- -->
      <!-- Page wrapper  -->
      <!-- -------------------------------------------------------------- -->
      <div class="page-wrapper">
        <!-- Arbol de pages -->
        <div class="container-fluid">
          <div class="row page-titles">
            <div class="col-md-5 col-12 align-self-center">
              <h3 class="text-themecolor mb-0">Inicio</h3>
            </div>
            <div class="
                col-md-7 col-12
                align-self-center
                d-none d-md-flex
                justify-content-end
              ">
              <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item">
                  <a href="javascript:void(0)">Root</a>
                </li>
                <li class="breadcrumb-item active">Inicio</li>
              </ol>
            </div>
          </div>
        <?php
        // navegación por las paginas
        if (isset($_GET["page"])) {
          if (
            $_GET["page"] == "inicio" ||
            $_GET["page"] == "usuarios" ||
            $_GET["page"] == "categorias" ||
            $_GET["page"] == "productos" ||
            $_GET["page"] == "clientes" ||
            $_GET["page"] == "ventas" ||
            $_GET["page"] == "crear-venta" ||
            $_GET["page"] == "reportes" ||
            $_GET["page"] == "salir"
          ) {
            include "views/pages/" . $_GET["page"] . ".php";
          } else {
            include "views/pages/404.php";
          }
        } else {
          include "views/pages/inicio.php";
        }
      } else {
        include "views/pages/login.php";
      }
        ?>


        </div>

        <!-- Aquí va el footer -->
        <?php include_once "views/pages/footer.php"; ?>
      </div>
      <!-- -------------------------------------------------------------- -->
      <!-- End Page wrapper  -->
      <!-- -------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End Wrapper -->
    <!-- -------------------------------------------------------------- -->

    <!-- -------------------------------------------------------------- -->
    <!-- All Jquery -->
    <!-- -------------------------------------------------------------- -->
    <script src="./views/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./views/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <script src="./views/dist/js/app.min.js"></script>
    <script src="./views/dist/js/app.init.js"></script>
    <script src="./views/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./views/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="./views/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="./views/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="./views/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="./views/dist/js/feather.min.js"></script>
    <script src="./views/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="./views/assets/libs/moment/min/moment.min.js"></script>
    <script src="./views/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="./views/dist/js/pages/calendar/cal-init.js"></script>
    <!-- Vector map JavaScript -->
    <script src="./views/assets/libs/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="./views/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Chart JS -->
    <script src="./views/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="./views/dist/js/pages/dashboards/dashboard4.js"></script>
</body>

</html>