<?php

$validation_errors = validation_errors();
$errorClass = ' hash-error';
$controlClass = 'form-control';
$fieldData = array(
    'errorClass'    => $errorClass,
    'controlClass'  => $controlClass,
);



?>

  

<section id="register">

            <?php echo form_open('register', array('class' => "form-signin","data-ajax"=>"false")); ?>
			
            <h2>Buat Akun Anda</h2><hr />
            	
				<?php Template::block('user_fields', 'user_fields', $fieldData); ?>
                
				<?php
                // Allow modules to render custom fields
                Events::trigger('render_user_form');
                ?>
                <!-- Start of User Meta -->
                <?php $this->load->view('users/user_meta', array('frontend_only' => true)); ?>
                <!-- End of User Meta -->
					<div class="form-group">
 
                    <input type="submit" name="register" class="btn btn-lg btn-primary btn-block" value="<?php echo lang('us_register') ; ?>" />
                    
                </div>
				
            <?php echo form_close(); ?>
          <p style="text-align: center">
              <?php echo lang('us_already_registered'); ?>
                <?php echo anchor('/login', lang('bf_action_login')); ?>
                </p>
           
</section>