<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bikin - HTML Bootstrap Template</title>

  <!-- Bootstrap -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/animate.css">
  <link rel="stylesheet" href="../assets/css/overwrite.css">
  <link href="../assets/css/animate.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet" />
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
          <a class="navbar-brand" href="index.html">Ekspedisi</a>
        </div>
        
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->

<br><br>
<br><br><br>


  <div class="container">
     <?php echo validation_errors(); ?>
      <?php
        echo form_open('view_barang/tambah', array('enctype'=>'multipart/form-data'));?>
      <table>
        <tr>
          <td>Nama Barang</td>
          <td>:</td>
          <td><input type="text" name="input_nama" value="<?php echo set_value('nama_barang'); ?>"></td>
        </tr>
        <tr>
          <td>Berat Barang</td>
          <td>:</td>
          <td><input type="text" name="input_berat" value="<?php echo set_value('berat_barang'); ?>"></td>
        </tr>
        <tr>
          <td><font color="black">Gambar Barang</font></td>
          <td>:</td>
          <td><input type="file" name="input_gambar" value="<?php echo set_value('input_barang'); ?>"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="Tambah"></td>
        </tr>
      </table>
    </div>




  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../assets/js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/parallax.min.js"></script>
  <script src="../assets/js/wow.min.js"></script>
  <script src="../assets/js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="../assets/js/fliplightbox.min.js"></script>
  <script src="../assets/js/functions.js"></script>
  <script src="../assets/contactform/contactform.js"></script>

</body>
</html>