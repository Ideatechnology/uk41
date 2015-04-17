<?php

if (isset($kategori))
{
	$kategori = (array) $kategori;
}
$id = isset($kategori['id']) ? $kategori['id'] : '';

?>
<div class="admin-box">

	<?php echo form_open($this->uri->uri_string(), 'class="form-vertical"'); ?>
		<fieldset>

			<div class="form-group <?php echo form_error('kategori_kategori') ? 'error' : ''; ?>">
				<?php echo form_label(lang('kategori_form_field_kategori')." [ Bahasa Indonesia ] ". lang('bf_form_label_required'), 'kategori_kategori', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='kategori_kategori' class="form-control" type='text' name='kategori_kategori' maxlength="50" value="<?php echo set_value('kategori_kategori', isset($kategori['kategori']) ? $kategori['kategori'] : ''); ?>" />
					<span class='hash-error'><?php echo form_error('kategori_kategori'); ?></span>
				</div>
			</div>
            
            <div class="form-group <?php echo form_error('kategori_kategori_english') ? 'error' : ''; ?>">
				<?php echo form_label(lang('kategori_form_field_kategori')." [ Bahasa Inggris ] ". lang('bf_form_label_required'), 'kategori_kategori_english', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='kategori_kategori_english' class="form-control" type='text' name='kategori_kategori_english' maxlength="50" value="<?php echo set_value('kategori_kategori_english', isset($kategori['kategori_english']) ? $kategori['kategori_english'] : ''); ?>" />
					<span class='hash-error'><?php echo form_error('kategori_kategori_english'); ?></span>
				</div>
			</div>

			<div class="form-group <?php echo form_error('kategori_ket') ? 'error' : ''; ?>">
				<?php echo form_label(lang('kategori_form_field_keterangan')." [ Bahasa Indonesia ] ", 'kategori_ket', array('class' => 'control-label') ); ?>
				<div class='controls'>
                <textarea id='kategori_ket' class="form-control" name='kategori_ket' maxlength="255" style="height:100px;"><?php echo set_value('kategori_ket', isset($kategori['ket']) ? $kategori['ket'] : ''); ?></textarea>
					<span class='hash-error'><?php echo form_error('kategori_ket'); ?></span>
				</div>
			</div>
            
            <div class="form-group <?php echo form_error('kategori_ket_english') ? 'error' : ''; ?>">
				<?php echo form_label(lang('kategori_form_field_keterangan')." [ Bahasa Inggris ] ", 'kategori_ket_english', array('class' => 'control-label') ); ?>
				<div class='controls'>
                <textarea id='kategori_ket_english' class="form-control"  name='kategori_ket_english' maxlength="255" style="height:100px;"><?php echo set_value('kategori_ket_english', isset($kategori['ket_english']) ? $kategori['ket_english'] : ''); ?></textarea>
					<span class='hash-error'><?php echo form_error('kategori_ket_english'); ?></span>
				</div>
			</div>

				<input type="hidden" name="kategori_type_kategori" value="post">

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('kategori_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/post/kategori', lang('kategori_cancel'), 'class="btn btn-warning"'); ?>
			
            <?php if($id!=''): ?>	
			<?php if ($this->auth->has_permission('Kategori.Content.Delete')) : ?>
				<?php echo lang('bf_or'); ?>
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('kategori_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('kategori_delete_record'); ?>
				</button>
			<?php endif; ?>
            <?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>