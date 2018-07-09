<?php if (!$this->session->userdata('logged_in')) {
  redirect('user/login');
} ?><!DOCTYPE html>
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
        <li><a href="<?php echo base_url()?>user/logout" >LOGOUT</a></li>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->
  


 
<br><br>
<br><br><br>

<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>



<main role="main">



  <section class="jumbotron text-center">

    <div class="container">

      <h1 class="jumbotron-heading">Blog DataTables(dt_view)</h1>

      

    </div>

    </section>

    

    <section class="py-5 bg-light">

        <div class="container">

            <div class="row">

                <table id="dt-basic" class="table table-striped table-bordered">
                  <?php
        echo anchor('view_pengiriman/tambah', 'TAMBAH ', array('class'=>'btn btn-primary'));
       ?>
       <br>
       <br>
                    <thead>

                        <tr>

                            <th>Id Pengirim</th>

                            <th>Id User</th>

                            <th>Type</th>

                            <th>Id barang</th>

                            <th>Nama Penerima</th>

                            <th>Alamat Tujuan</th>

                            <th>Tanggal Kirim</th>

                            <th>Status</th>

                            <th>Action</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach ($pengirim as $d) : ?>

                        <tr>

                            <td><?php echo $d->id_pengiriman ?></td>

                            <td><?php echo $d->id_user ?></td>

                            <td><?php echo $d->id_type ?></td>

                            <td><?php echo $d->id_barang ?></td>

                            <td><?php echo $d->nama_penerima ?></td>

                            <td><?php echo $d->alamat_tujuan ?></td>

                            <td><?php echo $d->tgl_kirim ?></td>

                            <td><?php echo $d->status ?></td>

                            <td>

                                <a href="<?php echo base_url('view_pengiriman/edit/') . $d->id_pengiriman ?>" class="btn btn-sm btn-outline-primary">Edit</a> 

                                <a href="<?php echo base_url('view_pengiriman/delete/') . $d->id_pengiriman ?>" class="btn btn-sm btn-outline-danger">Delete</a> 

                            </td>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </section>

  

</main>

<br><br>
<?php 


   if (isset($links)) {

     echo $links;

   } 

   ?>
<br><br>


<br><br><br>


  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">
  <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
      jQuery(document).ready(function(){

          // Contoh inisialisasi Datatable tanpa konfigurasi apapun
          // #dt-basic adalah id html dari tabel yang diinisialisasi
          $('#dt-basic').DataTable();
      });

  </script>

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

</body>
</html>