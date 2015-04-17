
	<h2><?php echo lang('us_activate'); ?></h2>

<?php if (validation_errors()) { ?>
		<div class="alert alert-error fade in">
		  <a data-dismiss="alert" class="close">&times;</a>
			<?php echo validation_errors(); ?>
		</div>
<?php } else { ?>

		<div class="well shallow-well">
			<?php echo lang('us_user_activate_note'); ?>
		</div>
<?php } ?>

<?php echo Template::message(); ?>

	<?php echo form_open($this->uri->uri_string(), array('class' => "form-vertical", 'data-ajax' => 'false')); ?>

	<div class="form-group <?php echo iif( form_error('code') , 'error') ;?>">
			<input class="form-control" placeholder="<?php echo lang('us_activate_code'); ?>" type="text" id="code" name="code" value="<?php echo set_value('code') ?>" />
	</div>

	<div class="form-group">
			<input class="btn btn-primary" type="submit" name="activate" value="<?php echo lang('us_confirm_activate_code') ?>"  />
	</div>

	<?php echo form_close(); ?>

 <p>
              <?php echo lang('us_already_registered'); ?>
                <?php echo anchor('/login', lang('bf_action_login')); ?>
                </p>
