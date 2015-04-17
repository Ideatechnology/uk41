<?php /* /bonfire/modules/users/views/user_fields.php */

$currentMethod = $this->router->fetch_method();

$errorClass     = empty($errorClass) ? ' has-error' : $errorClass;
$controlClass   = empty($controlClass) ? 'form-control' : $controlClass;
$registerClass  = $currentMethod == 'register' ? ' required' : '';
$editSettings   = $currentMethod == 'edit';

$defaultLanguage = isset($user->language) ? $user->language : strtolower(settings_item('language'));
$defaultTimezone = isset($current_user) ? $current_user->timezone : strtoupper(settings_item('site.default_user_timezone'));

?>
<div class="form-group <?php echo iif(form_error('email'), $errorClass); ?>">
   
        <input required="required" class="<?php echo $controlClass; ?>" placeholder="Email" type="text" id="email" name="email" value="<?php echo set_value('email', isset($user) ? $user->email : ''); ?>" />
        <span class="help-block"><?php echo form_error('email'); ?></span>
   </div>
<div class="form-group <?php echo iif(form_error('display_name'), $errorClass); ?>">
   
    <input required="required" placeholder="<?php echo lang('bf_display_name'); ?>" class="<?php echo $controlClass; ?>" type="text" id="display_name" name="display_name" value="<?php echo set_value('display_name', isset($user) ? $user->display_name : ''); ?>" />
        <span class="help-block"><?php echo form_error('display_name'); ?></span>
   
</div>

<?php if (settings_item('auth.login_type') !== 'email' OR settings_item('auth.use_usernames')) : ?>
<div class="form-group <?php echo iif(form_error('username'), $errorClass); ?>">
    
        <input required="required" placeholder="<?php echo lang('bf_username'); ?>" class="<?php echo $controlClass; ?>" type="text" id="username" name="username" value="<?php echo set_value('username', isset($user) ? $user->username : ''); ?>" />
        <span class="help-block"><?php echo form_error('username'); ?></span>
    
</div>
<?php endif; ?>

<?php if($this->uri->segment(2)!="profile"){ ?>
<div class="form-group <?php echo iif(form_error('password'), $errorClass); ?>">
    
        <input required="required" placeholder="<?php echo lang('bf_password'); ?>" class="<?php echo $controlClass; ?>" type="password" id="password" name="password" value="" />
        <span class="help-block"><?php echo form_error('password'); ?></span>
       
</div>
<div class="form-group <?php echo iif(form_error('pass_confirm'), $errorClass); ?>">
        <input required="required" placeholder="<?php echo lang('bf_password_confirm'); ?>" class="<?php echo $controlClass; ?>" type="password" id="pass_confirm" name="pass_confirm" value="" />
        <span class="help-block"><?php echo form_error('pass_confirm'); ?></span>
   
</div>
<?php }else{ ?>
 <input class="<?php echo $controlClass; ?>" type="hidden" id="password" name="password" value="" />
 <input class="<?php echo $controlClass; ?>" type="hidden" id="pass_confirm" name="pass_confirm" value="" />
        
<?php } ?>
<?php if ($editSettings) : ?>
<div class="form-group <?php echo iif(form_error('force_password_reset'), $errorClass); ?>">
     <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label class="checkbox" for="force_password_reset">
            <input type="checkbox" id="force_password_reset" name="force_password_reset" value="1" <?php echo set_checkbox('force_password_reset', empty($user->force_password_reset)); ?> />
            <?php echo lang('us_force_password_reset'); ?>
        </label>
		 </div>
    </div>
</div>
<?php endif;

?>


<input type="hidden" id="language" name="language" value="english" />
<input type="hidden" id="timezones" name="timezones" value="<?php echo isset($user) ? $user->timezone : $defaultTimezone; ?>" />
