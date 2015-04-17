
	<h2><?php echo lang('us_reset_password'); ?></h2>

<?php if (validation_errors()) : ?>
	<div class="alert alert-danger fade in">
		<?php echo validation_errors(); ?>
	</div>
<?php endif; ?>

<div class="alert alert-info fade in">
	<?php echo lang('us_reset_note'); ?>
</div>
<?php echo Template::message(); ?>

<?php echo form_open($this->uri->uri_string(), array('class' => "form-vertical", 'data-ajax' => 'false')); ?>

	<div class="form-group <?php echo iif( form_error('email') , 'error'); ?>">
			<input class="form-control" placeholder="Masukan <?php echo lang('bf_email'); ?>" type="text" name="email" id="email" value="<?php echo set_value('email') ?>" />
	</div>

<div class="form-group">
 
			<input class="btn btn-primary" type="submit" name="send" value="<?php e(lang('us_send_password')); ?>" />
	</div>

<?php echo form_close(); ?>

        <p>Klik <a href="<?php echo site_url("/login");?>">disini</a> untuk login.</p>

