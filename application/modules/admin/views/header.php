<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>Wishing Tree</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/admin_template.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/all.min.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  </head>

  <body>

  <nav class="navbar navbar-expand-md navbar-light fixed-top">
      <a class="navbar-brand abs" href="<?php echo base_url('/admin/dashboard'); ?>">Wishing Tree</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="collapsingNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <?php
                if($this->authentication->checkAdmin()){
              ?>
              <a class="nav-link<?php if($this->router->fetch_class()=="users"){ echo(" active"); }?>" href="<?php echo base_url('/admin/users'); ?>"><i class="fa fa-user-tie" aria-hidden="true"></i> Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?php if($this->router->fetch_class()=="words"){ echo(" active"); }?>" href="<?php echo base_url('/admin/words'); ?>"><i class="fa fa-font" aria-hidden="true"></i> Banned Words</a>
            </li>
              <?php
                }
              ?>
            <li class="nav-item">
              <a class="nav-link<?php if($this->router->fetch_class()=="attendees"){ echo(" active"); }?>" href="<?php echo base_url('/admin/attendees'); ?>"><i class="fa fa-image" aria-hidden="true"></i> Messages</a>
            </li>
              <?php
                if($this->authentication->checkAdmin()){
              ?>
            <li class="nav-item">
              <a class="nav-link<?php if($this->router->fetch_class()=="settings"){ echo(" active"); }?>" href="<?php echo base_url('/admin/settings'); ?>"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
            </li>
              <?php
                }
              ?>
          </ul>
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link mx-auto" href="<?php echo base_url('/admin/logout'); ?>"><i class="fa fa-sign-out-alt" aria-hidden="true"></i> Logout</a>
              </li>
          </ul>
      </div>
  </nav>

  <main role="main" class="container-fluid">