


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


