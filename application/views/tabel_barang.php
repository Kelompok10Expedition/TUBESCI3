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
          <a class="navbar-brand" href="<?php echo base_url()?>home/index2">Ekspedisi</a>
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
  <br><br><br><br><br>


  <div class="container">
     <?php echo validation_errors(); ?>
      <?php
        echo form_open('view_barang/tambah', array('enctype'=>'multipart/form-data'));?>
      <table>
        <div class="form-group">

            <label>Jenis Barang</label>

            <input type="text" class="form-control" name="input_nama" placeholder="Jenis Barang">

          </div>

          <div class="form-group">
            <label>Keterangan Barang</label>

            <input type="text" class="form-control" name="input_berat" placeholder="keterangan Barang">

          </div>
          
          <div class="form-group">
          <label>Gambar Barang</label>

            <input type="file" class="form-control" name="input_gambar" placeholder="Gambar Barang">

          </div>
       
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="Tambah"></td>
        </tr>
      </table>
    </div>


<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>
  <link rel="stylesheet" href="<?php echo base_url() ?>../assets/css/jquery.dataTables.min.css">
  <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.bootstrap4.min.js"></script>
  <script>
      jQuery(document).ready(function(){

          // Contoh inisialisasi Datatable tanpa konfigurasi apapun
          // #dt-basic adalah id html dari tabel yang diinisialisasi
          $('#dt-basic').DataTable();
      });

  </script>

  <script src="<?php echo base_url() ?>assets/js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/parallax.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/fliplightbox.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/functions.js"></script>
  <script src="<?php echo base_url() ?>assets/contactform/contactform.js"></script>