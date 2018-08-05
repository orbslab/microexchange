<?php
  include '../core/controller.php';

  session_start();
  if($_SESSION["user"] == NULL) {
    header("Location: ../index");
  }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Micro Exchange</title>
  <!--================================================= 
  CSS Style 
  =====================================================-->
  <link rel="stylesheet" href="../Theme/css/user.css">
  <link rel="stylesheet" href="../Theme/font/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../Theme/css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Theme/font/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- =================================================
  Script 
  ======================================================-->
  <script src="../Theme/js/jquery-3.3.1.min.js"></script>
  <script src="../Theme/css/bootstrap/js/bootstrap.min.js"></script>
</head>

<body class="points_table_scrollbar" style="overflow-x: hidden;">
    <section class="top-nav">
      <nav class="navbar navbar-expand-md navbar-color navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="account">TrafficMacro</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse">
              <span><i class="fa fa-th"></i></span>
          </button>
          <div class="collapse navbar-collapse text-center clear" id="collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <span class="nav-title">Hi, Azharul</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="logout" class="nav-link">
                  <span class="nav-title">Logout</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <section class="profile-nav">
      <div class="nav-side-menu">
        <div class="brand">Micro Exchange</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
          <ul id="menu-content" class="menu-content collapse out">
            <li class="pl-2 pt-2">
              <p>Hits Remaining:  <span class="big-white">0</span></p>
            </li>
            <li  data-toggle="collapse" data-target="#start" class="collapsed active">
              <a href="#">
                <i class="fa fa-rocket fa-lg"></i>User <span class="arrow"></span>
              </a>
            </li>
            <ul class="sub-menu collapse" id="start">
              <li>
                <a href="setting">
                  Setting
                </a>
              </li>
              <li>
                <a href="logout">
                  Logout
                </a>
              </li>
            </ul>
            <li class="collapsed">
              <a href="account"><i class="fa fa-user fa-lg"></i> Account </a>
            </li>
            <li class="collapsed">
              <a href="website"><i class="fa fa-window-maximize fa-lg"></i> My Website </a>
            </li>
            <li class="collapsed">
              <a href="earnpoints"><i class="fa fa-exchange fa-lg"></i> Earn Points </a>
            </li>
            <li class="collapsed">
              <a href="buypoints"><i class="fa fa-cart-arrow-down fa-lg"></i> Buy Trafic </a>
            </li>
            <li class="collapsed">
              <a href="referrals"><i class="fa fa-users fa-lg"></i> Referrals </a>
            </li>
            <li class="collapsed">
              <a href="contact"><i class="fa fa-handshake-o fa-lg"></i> Support & FAQ's </a>
            </li>
          </ul>
        </div>
      </div>
    </section>