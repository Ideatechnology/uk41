<script>
   $(document).ready(function(){
$('#formupload').ajaxForm({
		beforeSubmit: function() {	
			count = 0;
			val = $.trim( $('#images').val() );

			if( val == '' ){
				count= 1;
				$( '#images' ).next('span').html( 'Please select your images' );
			}

			if(count == 0){
				for (var i = 0; i < $('#images').get(0).files.length; ++i) {
			    	img = $('#images').get(0).files[i].name;
			    	var extension = img.split('.').pop().toUpperCase();
			    	if(extension!='PNG' && extension!='JPG' && extension!='GIF' && extension!='JPEG'){
			    		count= count+ 1
			    	}
			    }
				if( count> 0) $( '#images' ).next('span').html( 'Please select valid images' );
			}

		    if( count> 0){
		    	return false;
		    } else {
		    	$( '#images' ).next('span').html( '' );
		    }

	    },

		beforeSend:function(){
		   $('#loader').show();
		   $('#image_upload').hide();
		},
	    success: function(msg) {
	    },
		complete: function(xhr) {
			$('#loader').hide();
			$('#image_upload').show();

			$('#images').val('');
			$('#error_div').html('');
			result = xhr.responseText;
			result = $.parseJSON(result);
			base_path = $('#base_path').val();

			if( result.success ){
				name = result.success;
				html = '';
				html+= '<image style=\"width:100px;height:100px;\" src=\"'+name+'\">';
				$('#uploaded_images #success_div').html( html );
			} else if( result.error ){
				error = result.error
				html = '';
				html+='<p>'+error+'</p>';
				$('#uploaded_images #error_div').append( html );
			}

			$('#error_div').delay(5000).fadeOut('slow');

		}
	}); 

});
   </script>

<?php

$validation_errors = validation_errors();
$errorClass = ' has-error';
$controlClass = 'form-control';
$fieldData = array(
    'errorClass'    => $errorClass,
    'controlClass'  => $controlClass,
);

?>
<!-- main col right -->
<div class="col-sm-5">
     <div class="panel panel-default">
         
         <div class="panel-heading"><h2>Foto Anda</h2></div>
         
             <center>
                 <br />
                 <div id="uploaded_images" class="uploaded-images">
			<div id="error_div">
			</div>
			<div id="success_div">
                             <img style="width:100px;height:100px;" 
                      src="<?php echo base_url()."application/modules/member/foto/cop_".$user->foto;?>">
     
			</div>
		</div>
                        <br />
             <?php echo form_open_multipart(site_url("/member/uploadfoto"), array('class' => 'form-vertical',"id"=>"formupload")); ?> 
             <input type="file"  name="images" id="images" placeholder="Please choose your image"><br />
              <input type="submit" value="Upload" name="image_upload" id="image_upload" class="btn btn-primary">
            <div id="loader" style="display: none;">
					Please wait image uploading to server....
				</div>    
               <?php echo form_close();?>   
             </center><br />
             
             
            

     </div>
    
</div>
<div class="col-sm-7">
 <div class="panel panel-default">
       <div class="panel-heading">
<section id="profile">

<?php echo Template::message(); ?>

	<h2 ><?php echo lang('us_edit_profile'); ?></h2>
    <?php if ($validation_errors) : ?>
    <div class="alert alert-error">
        <?php echo $validation_errors; ?>
    </div>
    <?php endif; ?>
    <?php if (isset($user) && $user->role_name == 'Banned') : ?>
    <div data-dismiss="alert" class="alert alert-error">
        <?php echo lang('us_banned_admin_note'); ?>
    </div>
    <?php endif; ?>
	
   


            <?php echo form_open($this->uri->uri_string(), array('class' => 'form-vertical', 'data-ajax' => 'false')); ?>
                <?php Template::block('user_fields', 'user_fields', $fieldData); ?>
                <?php
                // Allow modules to render custom fields
                Events::trigger('render_user_form', $user );
                ?>
                <!-- Start User Meta -->
                <?php $this->load->view('users/user_meta', array('frontend_only' => true));?>
                <!-- End of User Meta -->
                
				<div class="form-group">
   
                    <input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('bf_action_save') . ' ' . lang('bf_user'); ?>" />
                   </div>
       
</section>


 </div>
     </div>
     
     
     </div>