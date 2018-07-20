<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!doctype html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bikin - HTML Bootstrap Template</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/overwrite.css">
  <link href="<?php echo base_url() ?>assets/css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" />
  <!-- =======================================================
    Theme Name: Bikin
    Theme URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

  <header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <a class="navbar-brand" href="<?php echo base_url()?>home">Ekspedisi</a>
        </div>
         <div class="collapse navbar-collapse navbar-right" color="white">
          <ul class="nav navbar-nav">
         <ul>
                    <?php if($this->session->userdata('logged_in')) : ?>                        
                        <li><a href="<?php echo base_url()?>user/logout" >LOGOUT</a></li>
                    </ul>
                     <div class="btn-group" role="group" aria-label="Data baru">
                      
          <?php echo anchor('user/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
        </div>
      <?php endif; ?>
            </div>
            
        </div>
    </nav>

                <?php if(!$this->session->userdata('logged_in')) : ?>

                    <div class="btn-group" role="group" aria-label="Data baru">
                        <?php echo anchor('user/register', 'Register', array('class' => 'btn btn-outline-light')); ?>
                        <?php echo anchor('user/login', 'Login', array('class' => 'btn btn-outline-light')); ?>

                    </div>

                <?php endif; ?>

                <?php if($this->session->userdata('logged_in')) : ?>
                    <div class="btn-group" role="group" aria-label="Data baru">

                        <?php echo anchor('view_barang/create', 'Barang Baru', array('class' => 'btn btn-outline-light')); ?>
                        <?php echo anchor('view_pengiriman/create', 'Pengiriman Baru', array('class' => 'btn btn-outline-light')); ?>
                        <?php echo anchor('User/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
                    </div>
                <?php endif; ?>

            </div>
        </nav>
        <br>
        <br>

        <?php if($this->session->flashdata('user_registered')): ?>
          <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('login_failed')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'</div>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
        <?php endif; ?>

         <?php if($this->session->flashdata('user_loggedout')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
        <?php endif; ?>
        

        <!-- akhir Header -->
          </ul>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>