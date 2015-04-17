<?php
if (isset($pages))
{
	$pages = (array) $pages;
}
$id = isset($pages['id']) ? $pages['id'] : '';
?>
<?php
$validation_errors = validation_errors();
if ($validation_errors) :
?>
<div class="alert alert-block alert-danger fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading"><?php echo lang('pages_judul_message');?></h4>
	<?php echo $validation_errors; ?>
</div>
<?php
endif;
?>

<div class="admin-box">


<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#indonesia" data-toggle="tab">Bahasa Indonesia</a></li>
  <li><a href="#english" data-toggle="tab">Bahasa Inggris</a></li>
</ul>  
 
<div class="tab-content" style="padding-top:10px;">
  <div class="tab-pane active" id="indonesia">
<div class="form-group <?php echo form_error('pages_judul') ? 'error' : ''; ?>">
<div class='controls'>
<input name="pages_judul" required class="form-control" type="text"  value="<?php echo set_value('pages_judul', isset($pages["judul"]) ? $pages["judul"] : ''); ?>" 
 placeholder="Masukan Judul" />
  <span class='error'><?php echo form_error('pages_judul'); ?></span>
</div>
</div>     

<div class="form-group <?php echo form_error('pages_isi') ? 'error' : ''; ?>">
<div class='controls'>
<textarea id="editor1" cols="" rows="" name="pages_isi"><?php echo set_value('pages_isi',isset($pages["isi"]) ? $pages["isi"] : '')?></textarea>
  <span class='error'><?php echo form_error('pages_isi'); ?></span>
</div>
</div>
</div>
  <div class="tab-pane" id="english">
<div class="form-group <?php echo form_error('pages_judul_english') ? 'error' : ''; ?>">
<div class='controls'>
<input name="pages_judul_english"  class="form-control" type="text"  value="<?php echo set_value("pages_judul_english",isset($pages["judul_english"]) ? $pages["judul_english"] : '')?>" 
placeholder="Judul bahasa Inggris" />
  <span class='error'><?php echo form_error('pages_judul_english'); ?></span>
</div>
</div>     

<div class="form-group <?php echo form_error('pages_isi_english') ? 'error' : ''; ?>">
<div class='controls'>
<textarea id="editor2" cols="" rows="" name="pages_isi_english"><?php echo set_value("pages_isi_english",isset($pages["isi_english"]) ? $pages["isi_english"] : '')?></textarea>
<span class='help-inline'><?php echo form_error('pages_isi_english'); ?></span>
</div>
</div>

 </div>         


</div> 
  



</div> 



















