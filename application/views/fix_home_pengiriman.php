<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bikin - HTML Bootstrap Template</title>

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/overwrite.css">
  <link href="assets/css/animate.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet" />

  <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/jquery.dataTables.min.css'?>">

   <script src="<?php echo base_url() ?>assets/js/jquery-1.9.1.min.js"></script>
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


<div class="content-wrapper">
    <div class="container-fluid">
      
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Tabel Pengiriman</div>

      <?php
        echo anchor('view_pengiriman/tambah', 'TAMBAH ', array('class'=>'btn btn-primary'));
       ?>
       <br>
       <br>

      <table>
        <tr>
        </tr>
      </table>
    </div>        
    </div>
        <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <td> Id_pengirim </td>
                  <td> Id_User</td>
                  <td> Type</td>
                  <td> ID_barang</td>
                  <td> nama penerima</td>
                  <td> alamat tujuan</td>
                  <td> Tanggal kirim</td>
                  <td> Status</td>
                  <td> Aksi</td>
                </tr>
              </thead>

                <tbody>
                  <?php foreach($pengirim as $key) : ?>
                  <tr>
                  <td><?php echo $key->id_pengiriman; ?></td>
                    <td><?php echo $key->id_user; ?></td>
                    <td><?php echo $key->id_type; ?></td>
                    <td><?php echo $key->id_barang; ?></td>
                    <td><?php echo $key->nama_penerima; ?></td>
                    <td><?php echo $key->alamat_tujuan; ?></td>
                    <td><?php echo $key->tgl_kirim; ?></td>
                    <td><?php echo $key->status; ?></td>
                    <td><a href='view_pengiriman/edit/<?php echo $key->id_pengiriman?>' class='btn btn-sm btn-info'>Edit</a>
                      <a href='view_pengiriman/delete/<?php echo $key->id_pengiriman?>' class='btn btn-sm btn-danger'>HAPUS</a></td>
                  </tr>
                 <?php endforeach; ?>
              </tbody>

            </table>
          </div>
      </div>
    </div>
<br><br><br><br><br><br>




<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>

    <div class="social-icon">
      <div class="container">
        <div class="col-md-6 col-md-offset-3">
          <ul class="social-network">
            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
            <li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center">
      <div class="copyright">
        &copy; Bikin Theme. All Rights Reserved.
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bikin
          -->
          <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by BootstrapMade
        </div>
      </div>
    </div>
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="assets/js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/parallax.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="assets/js/fliplightbox.min.js"></script>
  <script src="assets/js/functions.js"></script>
  <script src="assets/contactform/contactform.js"></script>

</body>
</html>