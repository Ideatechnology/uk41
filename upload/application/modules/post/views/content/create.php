<script>
function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}

</script>
<?php

$validation_errors = validation_errors();

if ($validation_errors) :
?>
<div class="alert alert-block alert-danger fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading">Please fix the following errors:</h4>
	<?php echo $validation_errors; ?>
</div>
<?php
endif;

if (isset($post))
{
	$post = (array) $post;
}
$id = isset($post['id']) ? $post['id'] : '';

?>



<div class="admin-box">

<fieldset>

<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#indonesia" data-toggle="tab">Bahasa Indonesia</a></li>
  <li><a href="#english" data-toggle="tab">Bahasa Inggris</a></li>
</ul>  

<div class="tab-content" style="padding-top:10px;">

 <div class="tab-pane active" id="indonesia">
 <div class="form-group <?php echo form_error('post_judul') ? 'error' : ''; ?>">
      <div class='controls'>
          <input id='post_judul' type='text' required name='post_judul' maxlength="255" value="<?php echo set_value('post_judul', isset($post['judul']) ? $post['judul'] : ''); ?>" placeholder="Masukan Judul Bahasa Indonesia" class="form-control" />
          <span class='help-inline'><?php echo form_error('post_judul'); ?></span>
      </div>
  </div>

<div class="form-group <?php echo form_error('post_isi') ? 'error' : ''; ?>">
    <div class='controls'>
        <?php echo form_textarea( array( 'name' => 'post_isi', 'id' => 'editor1', 'rows' => '5', 'cols' => '80', 'value' => set_value('post_isi', isset($post['isi']) ? $post['isi'] : '') ) ); ?>
        <span class='help-inline'><?php echo form_error('post_isi'); ?></span>
    </div>
</div>



<div class="form-group <?php echo form_error('post_slug_judul') ? 'error' : ''; ?>">
    <?php echo form_label(lang("post_form_slug_judul")." Bahasa Indonesia". lang('bf_form_label_required'), 'post_slug_judul', array('class' => 'control-label') ); ?>
   <?php
       $limitslug= isset($post['slug_judul']) ? (700-strlen($post['slug_judul'])): '700';
   ?>
	<div class='controls'>
<textarea  required onKeyDown="limitText(this.form.post_slug_judul,this.form.countdown2,700);" 
onKeyUp="limitText(this.form.post_slug_judul,this.form.countdown2,700);" maxlength="700" name='post_slug_judul'  style="height:90px" class="field form-control" id="post_slug_judul" rows="6" placeholder="<?php echo lang("post_form_slug_judul_desc")?>"><?php echo strip_tags(set_value('post_slug_judul', isset($post['slug_judul']) ? $post['slug_judul'] : '')); ?></textarea>
      		<br />You have <input readonly type="text" style="width:50px;" name="countdown2" size="3" value="<?php echo $limitslug;?>"> characters left.</font>
        <span class='help-inline'><?php echo form_error('post_slug_judul'); ?></span>
    </div>
</div>
</div>
<!--UNTUK BAHASA INGGRIS-->
<div class="tab-pane" id="english">
 <div class="form-group <?php echo form_error('post_judul_english') ? 'error' : ''; ?>">
      <div class='controls'>
          <input id='post_judul_english' type='text' required name='post_judul_english' maxlength="255" value="<?php echo set_value('post_judul_english', isset($post['judul_english']) ? $post['judul_english'] : ''); ?>" placeholder="Masukan Judul Bahasa Inggris" class="form-control" />
          <span class='help-inline'><?php echo form_error('post_judul_english'); ?></span>
      </div>
  </div>

<div class="form-group <?php echo form_error('post_isi_english') ? 'error' : ''; ?>">
    <div class='controls'>
        <?php echo form_textarea( array( 'name' => 'post_isi_english', 'id' => 'editor2', 'rows' => '5', 'cols' => '80', 'value' => set_value('post_isi_english', isset($post['isi_english']) ? $post['isi_english'] : '') ) ); ?>
        <span class='help-inline'><?php echo form_error('post_isi_english'); ?></span>
    </div>
</div>

<div class="form-group <?php echo form_error('post_slug_judul_english') ? 'error' : ''; ?>">
    <?php echo form_label(lang("post_form_slug_judul")." Bahasa Inggris". lang('bf_form_label_required'), 'post_slug_judul_english', array('class' => 'control-label') ); ?>

	<div class='controls'>
	 <?php
   $limitslug2= isset($post['slug_judul_english']) ? (700-strlen($post['slug_judul_english'])): '700';
   ?>
<textarea required onKeyDown="limitText(this.form.post_slug_judul_english,this.form.countdown,700);" 
onKeyUp="limitText(this.form.post_slug_judul_english,this.form.countdown,700);" maxlength="700" name='post_slug_judul_english'  style="height:90px" class="field form-control" id="post_slug_judul_english" rows="6" placeholder="<?php echo lang("post_form_slug_judul_desc")?>"><?php echo  strip_tags(set_value('post_slug_judul_english', isset($post['slug_judul_english']) ? $post['slug_judul_english'] : '')); ?></textarea>
		<br />
		You have <input readonly type="text" name="countdown" style="width:100px;" value="<?php echo  $limitslug2;?>"> characters left.</font>
		<span class='help-inline'><?php echo form_error('post_slug_judul_english'); ?></span>
    </div>
</div>
</div>     
  </div>     

  
  	<div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo lang("post_form_comment");?></h3>
      </div>
      <div class="panel-body" >

	  <div class="form-group <?php echo form_error('post_flag_comments') ? 'error' : ''; ?>">
  <?php echo form_label('<span class="help-inline">'.lang('post_form_comment_desc').'</span>', 'post_flag_comments', array('class' => 'control-label') ); ?>
  <div class='controls'>
       <span class="help-inline"><?php echo lang("post_form_comment");?></span>  &nbsp;
       <input id='post_flag_comments' name="post_flag_comments" 
       type="checkbox" value="1"  
       <?php echo (isset($post['flag_comments']) && $post['flag_comments'] == 1) ? 'checked="checked"' : set_checkbox('post_flag_comments', 1); ?>
	    />  
      
      <span class='help-inline'><?php echo form_error('post_flag_comments'); ?></span>
  </div>
</div> 
	  
	        </div>
    </div>
  

</fieldset>



</div>





