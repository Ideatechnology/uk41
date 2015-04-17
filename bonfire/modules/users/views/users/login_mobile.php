<?php
	$site_open = $this->settings_lib->item('auth.allow_register');
?>

<div id="login">


	<?php echo Template::message(); ?>

	<?php
		if (validation_errors()) :
	?>
	<div class="row-fluid">
		<div class="col-xs-12">
			<div class="alert alert-error fade in">
			  
				<?php echo validation_errors(); ?>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<?php echo form_open('login', array('class'=>'form-signin',"data-ajax"=>"false")); ?>
 <div class="">
 <h2>Silakan Untuk Login</h2><hr />
		<div class="form-group <?php echo iif( form_error('login') , 'error') ;?>">
			
				<input style="width: 95%" class="form-control" type="text" name="login" id="login_value" value="<?php echo set_value('login'); ?>" tabindex="1" placeholder="<?php echo $this->settings_lib->item('auth.login_type') == 'both' ? lang('bf_username') .'/'. lang('bf_email') : ucwords($this->settings_lib->item('auth.login_type')) ?>" />
			
		</div>

		<div class="form-group <?php echo iif( form_error('password') , 'hash-error') ;?>">
				<input style="width: 95%" type="password" class="form-control" name="password" id="password" value="" tabindex="2" placeholder="<?php echo lang('bf_password'); ?>" />
		</div>

		<?php if ($this->settings_lib->item('auth.allow_remember')) : ?>
			
			<div class="checkbox">
    <label>
      	<input type="checkbox" name="remember_me" id="remember_me" value="1" tabindex="3" /> <?php echo lang('us_remember_note'); ?>
    </label>
  </div>
			
		<?php endif; ?>


		<div class="form-group">
		
				<input class="ui-btn ui-btn-c" type="submit" name="log-me-in" id="submit" value="<?php e(lang('us_let_me_in')); ?>" tabindex="5" />
		</div>
		
	</div>
	<?php echo form_close(); ?>

	<?php // show for Email Activation (1) only
		if ($this->settings_lib->item('auth.user_activation_method') == 1) : ?>
	<!-- Activation Block -->
			
	<?php endif; ?>

	<p style="text-align: center">
		<?php if ( $site_open ) : ?>
			<?php echo anchor('/register', lang('us_sign_up')); ?>
		<?php endif; ?>

		<br/><?php echo anchor('/forgot_password', lang('us_forgot_your_password')); ?>
	</p>

</div>