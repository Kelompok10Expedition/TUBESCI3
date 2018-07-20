<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bikin - HTML Bootstrap Template</title>

  <!-- Bootstrap -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../assets/css/animate.css">
  <link rel="stylesheet" href="../../assets/css/overwrite.css">
  <link href="../../assets/css/animate.min.css" rel="stylesheet">
  <link href="../../assets/css/style.css" rel="stylesheet" />
  <!-- =======================================================
    Theme Name: Bikin
    Theme URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
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
        
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->
  


 
<br><br>
<br><br><br>


<form method="post" class="form-horizontal" enctype="multipart/form-data">
  <?php $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">','</div>'); ?>
     <?php echo validation_errors(); ?>
      <?php
        echo form_open('view_pengiriman/edit', array('enctype'=>'multipart/form-data')); 
       ?>
<table>
  <div class="form-group">

          ---<label>Id User</label>

            <input type="number" class="form-control" name="user_atk" value="-<?=isset($default['id_user'])? $default['id_user'] : ""?>">

          </div>

          ---<label>Id Type</label>

            <input type="number" class="form-control" name="type_atk" value="-<?=isset($default['id_type'])? $default['id_type'] : ""?>">

          </div>

          ---<label>Id Barang</label>

            <input type="number" class="form-control" name="barang_atk" value="-<?=isset($default['id_barang'])? $default['id_barang'] : ""?>">

          </div>

          <div class="form-group">
            ---<label>Nama Penerima</label>

            -<input type="text" class="form-control" name="penerima_atk" value="-<?=isset($default['nama_penerima'])? $default['nama_penerima'] : ""?>">

          </div>

          <div class="form-group">
            ---<label>Alamat Pengiriman</label>

            -<input type="text" class="form-control" name="tujuan_atk" value="-<?=isset($default['alamat_tujuan'])? $default['alamat_tujuan'] : ""?>">

          </div>

          <div class="form-group">
            ---<label>Tanggal Pengiriman</label>

            -<input type="date" class="form-control" name="tanggal_atk" value="-<?=isset($default['tgl_kirim'])? $default['tgl_kirim'] : ""?>">

          </div>

          <div class="form-group">
            ---<label>Status</label>

            -<input type="text" class="form-control" name="status_atk" value="-<?=isset($default['status'])? $default['status'] : ""?>">

          </div>
        
        
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
      </form>



<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../../assets/js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/parallax.min.js"></script>
  <script src="../../assets/js/wow.min.js"></script>
  <script src="../../assets/js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="../../assets/js/fliplightbox.min.js"></script>
  <script src="../../assets/js/functions.js"></script>
  <script src="../../assets/contactform/contactform.js"></script>

</body>
</html>