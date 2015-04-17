
 <div class="panel panel-default">
     <div class="panel-body" style="padding-left:50px;padding-right:50px;">
         
         
 <h1>Konfirmasi Pembayaran</h1>

 <p>
 Terima kasih atas pembayaran yang telah dilakukan. 
 Mohon mengisi data ini untuk proses pemeriksaan pembayaran dan pengiriman pesanan Anda. 
 Tanpa konfirmasi ini, kami tidak dapat mengetahui pembayaran Anda. <strong>Cantumkan Nama Ujian di Catatan Anda.</strong>
 </p>
 
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal" data-ajax="false" '); ?>    

 <input type="hidden" class="form-control" required id="" value="<?php echo @$nama_konfirm;?>" name="nama" placeholder="Nama">
 <input type="hidden" class="form-control" required id="" value="<?php echo @$email_konfirm;?>" name="email" placeholder="Email">
    
      <div class="form-group">
    <label for="" class="col-xs-2 control-label">Nilai Transfer *</label>
    <div class="col-xs-3">
      <input type="text" class="form-control" required id="" onkeypress="return harusangka(event)" value="<?php echo set_value("nilai");?>" name="nilai" placeholder="Nilai Transfer">
    </div>
  </div>
  
        <div class="form-group">
    <label for="" class="col-xs-2 control-label">Asal Bank *</label>
    <div class="col-xs-3">
     <select name="asal_bank" class="form-control" required>
	 <option value="">--Pilih Asal Bank--</option>
	 <option value="BANK BCA">BANK BCA</option>
	 <option value="BANK MANDIRI">BANK MANDIRI</option>
	 <option value="BANK BRI">BANK BRI</option>
	 <option value="BANK BNI">BANK BNI</option>
	 </select>
    </div>
  </div>
  
    <div class="form-group">
    <label for="" class="col-xs-2 control-label">Tujuan Bank *</label>
    <div class="col-xs-3">
     <select name="asal_bank" class="form-control" required>
	 <option value="">--Pilih Tujuan Bank--</option>
	 <option value="BANK BCA">BANK BCA</option>
	 <option value="BANK MANDIRI">BANK MANDIRI</option>
	 <option value="BANK BRI">BANK BRI</option>
	 <option value="BANK BNI">BANK BNI</option>
	 </select>
    </div>
  </div>
  
        <div class="form-group">
    <label for="" class="col-xs-2 control-label">Catatan</label>
    <div class="col-xs-5">
      <textarea name="catatan" class="form-control"><?php echo isset($_POST["catatan"])?$_POST["catatan"]:"";?></textarea>
	 
    </div>
  </div>
  
       <div class="form-group">
	   <label for="" class="col-xs-2 control-label"></label>
 <div class="col-xs-3">
      <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />   
      Ketikan Kode di bawah ini:
      <?php echo $captchaHtml;  ?>
      <input type="text" class="form-control" value="<?php echo set_value("CaptchaCode");?>" required name="CaptchaCode" id="CaptchaCode" />  
</div>
</div>
  
  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-5">
      <button type="submit" name="kirim" class="btn btn-default">Kirim</button>
    </div>
  </div>
<?php echo form_close();?>    
 
 <p>* Wajib diisi
Jika Anda menemui kesulitan atau membutuhkan informasi tambahan, silakan menghubungi <?php echo @$getSosmed->telp;?> di hari kerja.
</p>
<p>
Salam dan Semoga Sukses,
 
 </p>
   </div>
     </div>