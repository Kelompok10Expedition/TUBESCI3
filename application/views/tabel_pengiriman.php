
 
<br><br>
<br><br><br>


  <div class="container">
    <?php $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">','</div>'); ?>
     <?php echo validation_errors(); ?>
      <?php
        echo form_open('view_pengiriman/tambah', array('enctype'=>'multipart/form-data')); 
       ?>
      <table>
        <tr>
          <td>Id User</td>
          <td>:</td>
          <td><input type="number" name="input_user" value="<?php echo set_value('input_user'); ?>"></td>
        </tr>
        <tr>
          <td>Id Type</td>
          <td>:</td>
          <td><input type="number" name="input_type" value="<?php echo set_value('input_type'); ?>"></td>
        </tr>
        <tr>
          <label>Id Barang</label>
          <select name="id_barang" class="form-control" required>
            <option value="">Pilih Kategori</option>
            <?php foreach ($barang as $br):?> 
              <option value="<?php echo $br->id_barang; ?>"><?php echo $br->id_barang; ?></option>
            <?php endforeach; ?>
            </select>
          </tr>
        <tr>
          <td>Nama Penerima</td>
          <td>:</td>
          <td><input type="text" name="input_penerima" value="<?php echo set_value('input_penerima'); ?>"></td>
        </tr>
        <tr>
          <td>Alamat Tujuan</td>
          <td>:</td>
          <td><input type="text" name="input_tujuan" value="<?php echo set_value('input_tujuan'); ?>" ></td>
        </tr>
        <tr>
          <td>Tanggal Pengiriman</td>
          <td>:</td>
          <td><input type="date" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>" ></td>
        </tr>
        <tr>
          <td>Status</td>
          <td>:</td>
          <td><input type="text" name="input_status" value="<?php echo set_value('input_status'); ?>" ></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    </div>
