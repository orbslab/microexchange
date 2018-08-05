<?php
  include 'core/controller.php';

  session_start();
  if($_SESSION["user"] != NULL) {
    header("Location: User/account");
  }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TrafficMacro</title>
  <!--================================================= 
  CSS Style 
  =====================================================-->
  <link rel="stylesheet" href="Theme/css/style.css">
  <link rel="stylesheet" href="Theme/font/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Theme/css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Theme/font/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- =================================================
  Script 
  ======================================================-->
  <script src="Theme/js/jquery-3.3.1.min.js"></script>
  <script src="Theme/js/main.js"></script>
  <script src="Theme/css/bootstrap/js/bootstrap.min.js"></script>
</head>

<body class="points_table_scrollbar" style="overflow-x: hidden;">
    <section class="top-nav">
      <nav class="navbar navbar-expand-md navbar-color navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="index">TrafficMacro</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse">
              <span><i class="fa fa-th"></i></span>
          </button>
          <div class="collapse navbar-collapse text-center clear" id="collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="support" class="nav-link"><span class="modtitle">Support</span></a>
              </li>
              <li class="nav-item">
                <a href="about" class="nav-link">
                  <span class="modtitle">About</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="sign" class="nav-link">
                  <span class="modtitle">Login</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>