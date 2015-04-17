                     
<!-- main col left --> 
<div class="col-sm-8">
 
    <div class="panel panel-default">
       <div class="panel-body">
       
       <?php if (validation_errors()) : ?>
	<div class="alert alert-danger fade in">
		<?php echo validation_errors(); ?>
	</div>
<?php endif; ?>

<?php echo Template::message(); ?>
       
        <h3 class="lead">Perbarui Kata Sandi Anda</h3>
      
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal" data-ajax="false"'); ?>

<input type="hidden" name="user_id" value="<?php echo $current_user->id;?>" />


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Sandi Baru</label>
    <div class="col-sm-7">
      <input type="password" class="form-control" name="password" id="password" placeholder="Sandi">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Ketik Ulang</label>
    <div class="col-sm-7">
      <input type="password" class="form-control" name="pass_confirm" id="pass_confirm" placeholder="Konfirmasi Sandi">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-7">
      <button type="submit" name="set_password" class="btn btn-primary">Ganti Sandi</button>
    </div>
  </div>
<?php echo form_close(); ?>
      
       
      </div>
    </div>
      
 
</div>