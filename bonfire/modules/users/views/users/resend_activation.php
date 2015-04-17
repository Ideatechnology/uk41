
	<h2><?php echo lang('us_activate_resend'); ?></h2>

<?php if (validation_errors()) { ?>
	<div class="alert alert-error fade in">
		<?php echo validation_errors(); ?>
	</div>
<?php } else { ?>

	<div class="well shallow-well">
		<?php echo lang('us_activate_resend_note'); ?>
	</div>
<?php } ?>

<?php echo Template::message(); ?>

<?php echo form_open($this->uri->uri_string(), array('class' => "form-vertical", 'autocomplete' => 'off')); ?>

	<div class="form-group <?php echo iif( form_error('email') , 'error') ;?>">
			<input placeholder="<?php echo lang('bf_email'); ?>" class="form-control" type="text" name="email" id="email" value="<?php echo set_value('email') ?>" />
	</div>

	<div class="form-group">
			<input class="btn btn-primary" type="submit" name="send" value="<?php echo lang('us_activate_code_send') ?>"  />
		
	</div>


 <p>
              <?php echo lang('us_already_registered'); ?>
                <?php echo anchor('/login', lang('bf_action_login')); ?>
                </p>


<?php echo form_close(); ?>


	
