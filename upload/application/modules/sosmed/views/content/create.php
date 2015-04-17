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

if (isset($sosmed))
{
	$sosmed = (array) $sosmed;
}
$id = isset($sosmed['id']) ? $sosmed['id'] : '';

?>
	<?php echo form_open_multipart($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-twitter fa-fw"></i> Account Twitter
                        </div>
                        <div class="panel-body">
                            
								<div class="control-group <?php echo form_error('username_twitter') ? 'error' : ''; ?>">
				<?php echo form_label('Username Twitter'. lang('bf_form_label_required'), 'sosmed_username_twitter', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='sosmed_username_twitter' class="form-control" type='text' name='sosmed_username_twitter' maxlength="30" value="<?php echo set_value('sosmed_username_twitter', isset($sosmed['username_twitter']) ? $sosmed['username_twitter'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('username_twitter'); ?></span>
				</div>
			</div>
			
			

			<div class="control-group <?php echo form_error('name_twitter') ? 'error' : ''; ?>">
				<?php echo form_label('Name Twitter'. lang('bf_form_label_required'), 'sosmed_name_twitter', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='sosmed_name_twitter' class="form-control" type='text' name='sosmed_name_twitter' maxlength="40" value="<?php echo set_value('sosmed_name_twitter', isset($sosmed['name_twitter']) ? $sosmed['name_twitter'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('name_twitter'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('password_twitter') ? 'error' : ''; ?>">
				<?php echo form_label('Password Twitter'. lang('bf_form_label_required'), 'sosmed_password_twitter', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='sosmed_password_twitter' class="form-control" type='password' name='sosmed_password_twitter' maxlength="40" value="" />
					<span class='help-inline'><?php echo form_error('password_twitter'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('url_twitter') ? 'error' : ''; ?>">
				<?php echo form_label('Url Twitter'. lang('bf_form_label_required'), 'sosmed_url_twitter', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='sosmed_url_twitter' class="form-control" type='text' name='sosmed_url_twitter' maxlength="300" value="<?php echo set_value('sosmed_url_twitter', isset($sosmed['url_twitter']) ? $sosmed['url_twitter'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('url_twitter'); ?></span>
				</div>
			</div>
					<div class="control-group <?php echo form_error('token_twitter') ? 'error' : ''; ?>">
				<?php echo form_label('Token Twitter', 'sosmed_token_twitter', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<?php echo form_textarea( array( 'name' => 'sosmed_token_twitter', 'id' => 'sosmed_token_twitter', 'class'=>'form-control','style'=>"height:50px", 'value' => set_value('sosmed_token_twitter', isset($sosmed['token_twitter']) ? $sosmed['token_twitter'] : '') ) ); ?>
					<span class='help-inline'><?php echo form_error('token_twitter'); ?></span>
				</div>
			</div>

							
							</div>
                        <div class="panel-footer">
                           
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           <i class="fa fa-facebook fa-fw"></i>  Account Facebook
                        </div>
                        <div class="panel-body">
						

			<div class="control-group <?php echo form_error('username_fb') ? 'error' : ''; ?>">
				<?php echo form_label('Username Fb'. lang('bf_form_label_required'), 'sosmed_username_fb', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='sosmed_username_fb' class="form-control" type='text' name='sosmed_username_fb' maxlength="255" value="<?php echo set_value('sosmed_username_fb', isset($sosmed['username_fb']) ? $sosmed['username_fb'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('username_fb'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('name_fb') ? 'error' : ''; ?>">
				<?php echo form_label('Name Fb'. lang('bf_form_label_required'), 'sosmed_name_fb', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='sosmed_name_fb' class="form-control" type='text' name='sosmed_name_fb' maxlength="255" value="<?php echo set_value('sosmed_name_fb', isset($sosmed['name_fb']) ? $sosmed['name_fb'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('name_fb'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('password_fb') ? 'error' : ''; ?>">
				<?php echo form_label('Password Fb'. lang('bf_form_label_required'), 'sosmed_password_fb', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='sosmed_password_fb' class="form-control" type='password' name='sosmed_password_fb' maxlength="255" value="" />
					<span class='help-inline'><?php echo form_error('password_fb'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('url_fb') ? 'error' : ''; ?>">
				<?php echo form_label('Url Fb'. lang('bf_form_label_required'), 'sosmed_url_fb', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='sosmed_url_fb' class="form-control" type='text' name='sosmed_url_fb' maxlength="255" value="<?php echo set_value('sosmed_url_fb', isset($sosmed['url_fb']) ? $sosmed['url_fb'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('url_fb'); ?></span>
				</div>
			</div>
			
		
			<div class="control-group <?php echo form_error('token_fb') ? 'error' : ''; ?>">
				<?php echo form_label('Token Fb', 'sosmed_token_fb', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<?php echo form_textarea( array( 'name' => 'sosmed_token_fb', 'id' => 'sosmed_token_fb','class'=>'form-control','style'=>"height:50px", 'value' => set_value('sosmed_token_fb', isset($sosmed['token_fb']) ? $sosmed['token_fb'] : '') ) ); ?>
					<span class='help-inline'><?php echo form_error('token_fb'); ?></span>
				</div>
			</div>
			
			
				   </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
				      </div>
				  <div class="row">
				
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Rekening Bank & Kontak 
                        </div>
                        <div class="panel-body">
						
								
			<div class="control-group <?php echo form_error('bank_mandiri') ? 'error' : ''; ?>">
				<?php echo form_label('Bank Mandiri', 'bank_mandiri', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='bank_mandiri' class="form-control" type='text' name='bank_mandiri' value="<?php echo set_value('bank_mandiri', isset($sosmed['bank_mandiri']) ? $sosmed['bank_mandiri'] : ''); ?>" />
					<span class='hash-error'><?php echo form_error('bank_mandiri'); ?></span>
				</div>
			</div>
			
			<div class="control-group <?php echo form_error('an_bank_mandiri') ? 'error' : ''; ?>">
				<?php echo form_label('a/n Bank Mandiri', 'an_bank_mandiri', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='an_bank_mandiri' class="form-control" type='text' name='an_bank_mandiri' value="<?php echo set_value('an_bank_mandiri', isset($sosmed['an_bank_mandiri']) ? $sosmed['an_bank_mandiri'] : ''); ?>" />
					<span class='hash-error'><?php echo form_error('an_bank_mandiri'); ?></span>
				</div>
			</div>
			
			<div class="control-group <?php echo form_error('bank_bca') ? 'error' : ''; ?>">
				<?php echo form_label('Bank BCA', 'bank_bca', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='bank_bca' type='text' class="form-control" name='bank_bca' value="<?php echo set_value('bank_bca', isset($sosmed['bank_bca']) ? $sosmed['bank_bca'] : ''); ?>" />
					<span class='hash-error'><?php echo form_error('bank_bca'); ?></span>
				</div>
			</div>
			
			<div class="control-group <?php echo form_error('an_bank_bca') ? 'error' : ''; ?>">
				<?php echo form_label('a/n Bank BCA', 'bank_bca', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='an_bank_bca' type='text' class="form-control" name='an_bank_bca' value="<?php echo set_value('an_bank_bca', isset($sosmed['an_bank_bca']) ? $sosmed['an_bank_bca'] : ''); ?>" />
					<span class='hash-error'><?php echo form_error('an_bank_bca'); ?></span>
				</div>
			</div>
			
			<div class="control-group <?php echo form_error('bank_bni') ? 'error' : ''; ?>">
				<?php echo form_label('Bank BNI', 'Bank BNI', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='bank_bni' type='text' class="form-control" name='bank_bni'  value="<?php echo set_value('bank_bni', isset($sosmed['bank_bni']) ? $sosmed['bank_bni'] : ''); ?>" />
					<span class='hash-error'><?php echo form_error('bank_bni'); ?></span>
				</div>
			</div>
			
			<div class="control-group <?php echo form_error('an_bank_bni') ? 'error' : ''; ?>">
				<?php echo form_label('a/n Bank BNI', 'Bank BNI', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='an_bank_bni' type='text' class="form-control" name='an_bank_bni'  value="<?php echo set_value('an_bank_bni', isset($sosmed['an_bank_bni']) ? $sosmed['an_bank_bni'] : ''); ?>" />
					<span class='hash-error'><?php echo form_error('an_bank_bni'); ?></span>
				</div>
			</div>
			
			<div class="control-group <?php echo form_error('bank_bri') ? 'error' : ''; ?>">
				<?php echo form_label('Bank BRI', 'Bank BRI', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='bank_bri' class="form-control" type='text' name='bank_bri'  value="<?php echo set_value('bank_bri', isset($sosmed['bank_bri']) ? $sosmed['bank_bri'] : ''); ?>" />
					<span class='hash-error'><?php echo form_error('bank_bri'); ?></span>
				</div>
			</div>

				<div class="control-group <?php echo form_error('an_bank_bri') ? 'error' : ''; ?>">
				<?php echo form_label('a/n Bank BRI', 'Bank BRI', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='an_bank_bri' class="form-control" type='text' name='an_bank_bri'  value="<?php echo set_value('an_bank_bri', isset($sosmed['an_bank_bri']) ? $sosmed['an_bank_bri'] : ''); ?>" />
					<span class='hash-error'><?php echo form_error('an_bank_bri'); ?></span>
				</div>
			</div>
				
			<div class="control-group <?php echo form_error('paypal') ? 'error' : ''; ?>">
				<?php echo form_label('Paypal', 'paypal', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='paypal' class="form-control" type='text' name='paypal'  value="<?php echo set_value('paypal', isset($sosmed['paypal']) ? $sosmed['paypal'] : ''); ?>" />
					<span class='hash-error'><?php echo form_error('paypal'); ?></span>
				</div>
			</div>
			
				<div class="control-group <?php echo form_error('pin_bb') ? 'error' : ''; ?>">
				<?php echo form_label('Pin Bb', 'sosmed_pin_bb', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='sosmed_pin_bb' class="form-control" type='text' name='sosmed_pin_bb' maxlength="13" value="<?php echo set_value('sosmed_pin_bb', isset($sosmed['pin_bb']) ? $sosmed['pin_bb'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('pin_bb'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('whatapps') ? 'error' : ''; ?>">
				<?php echo form_label('Whatapps', 'sosmed_whatapps', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='sosmed_whatapps' class="form-control" type='text' name='sosmed_whatapps' maxlength="255" value="<?php echo set_value('sosmed_whatapps', isset($sosmed['whatapps']) ? $sosmed['whatapps'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('whatapps'); ?></span>
				</div>
			</div>
				
			<div class="control-group <?php echo form_error('google_plus_url') ? 'error' : ''; ?>">
				<?php echo form_label('Google +', 'google_plus_url', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='google_plus_url' class="form-control" type='text' name='google_plus_url' maxlength="255" value="<?php echo set_value('google_plus_url', isset($sosmed['google_plus_url']) ? $sosmed['google_plus_url'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('google_plus_url'); ?></span>
				</div>
			</div>	
			
			<div class="control-group <?php echo form_error('thumblr_url') ? 'error' : ''; ?>">
				<?php echo form_label('Thumblr', 'thumblr_url', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='thumblr_url' class="form-control" type='text' name='thumblr_url'  value="<?php echo set_value('thumblr_url', isset($sosmed['thumblr_url']) ? $sosmed['thumblr_url'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('thumblr_url'); ?></span>
				</div>
			</div>	
				
					<div class="control-group <?php echo form_error('pinterest_url') ? 'error' : ''; ?>">
				<?php echo form_label('Pinterest', 'pinterest_url', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='pinterest_url' class="form-control" type='text' name='pinterest_url'  value="<?php echo set_value('pinterest_url', isset($sosmed['pinterest_url']) ? $sosmed['pinterest_url'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('pinterest_url'); ?></span>
				</div>
			</div>	
			
				<div class="control-group <?php echo form_error('instagram_url') ? 'error' : ''; ?>">
				<?php echo form_label('Instagram', 'instagram_url', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='instagram_url' class="form-control" type='text' name='instagram_url'  value="<?php echo set_value('instagram_url', isset($sosmed['instagram_url']) ? $sosmed['instagram_url'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('instagram_url'); ?></span>
				</div>
			</div>	
			
				<div class="control-group <?php echo form_error('linkedin_url') ? 'error' : ''; ?>">
				<?php echo form_label('Linkedin', 'linkedin_url', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='linkedin_url' class="form-control" type='text' name='linkedin_url'  value="<?php echo set_value('linkedin_url', isset($sosmed['linkedin_url']) ? $sosmed['linkedin_url'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('linkedin_url'); ?></span>
				</div>
			</div>
						
                            </div>
                        <div class="panel-footer">
                           
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            
			     <div class="col-lg-6">
				 
				  <div class="panel panel-default">
                        <div class="panel-heading">
                           Info Company
                        </div>
                        <div class="panel-body">
                            
			
			<div class="control-group <?php echo form_error('nama_perusahaan') ? 'error' : ''; ?>">
				<?php echo form_label('Nama Perusahaan'. lang('bf_form_label_required'), 'sosmed_nama_perusahaan', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<?php echo form_textarea( array( 'name' => 'sosmed_nama_perusahaan', 'id' => 'sosmed_nama_perusahaan', 'class' => 'form-control', 'style' => 'height:50px;', 'value' => set_value('sosmed_nama_perusahaan', isset($sosmed['nama_perusahaan']) ? $sosmed['nama_perusahaan'] : '') ) ); ?>
					<span class='help-inline'><?php echo form_error('nama_perusahaan'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('alamat') ? 'error' : ''; ?>">
				<?php echo form_label('Alamat', 'sosmed_alamat', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<?php echo form_textarea( array( 'name' => 'sosmed_alamat', 'id' => 'sosmed_alamat',  'class' => 'form-control','style' => 'height:50px;', 'value' => set_value('sosmed_alamat', isset($sosmed['alamat']) ? $sosmed['alamat'] : '') ) ); ?>
					<span class='help-inline'><?php echo form_error('alamat'); ?></span>
				</div>
			</div>

			
			<div class="control-group <?php echo form_error('logo') ? 'error' : ''; ?>">
				<?php echo form_label('Logo', 'sosmed_logo', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='filebanner' type='file' name='sosmed_logo'  value="<?php echo set_value('sosmed_logo', isset($sosmed['logo']) ? $sosmed['logo'] : ''); ?>" />
								<br />
						<?php echo isset($sosmed['logo']) ?  img(array("src"=>$upload_path_image.$sosmed["logo"],"style"=>"width:64px")) : '<img 
		src="'.Template::theme_url('images/photo.png').'" alt="Nase vace rupo">'; ?>
					<span class='help-inline'><?php echo form_error('logo'); ?></span>
					<p>Type harus JPG dan Width Max 200px height Max 200px</p>
				</div>
			</div>

			
			<div class="control-group <?php echo form_error('favicon') ? 'error' : ''; ?>">
				<?php echo form_label('Favicon', 'favicon', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='favicon' type='file' name='sosmed_favicon'  value="<?php echo set_value('sosmed_favicon', isset($sosmed['favicon']) ? $sosmed['favicon'] : ''); ?>" />
								<br />
						<?php echo isset($sosmed['favicon']) ?  img(array("src"=>$upload_path_image.$sosmed["favicon"],"style"=>"")) : '<img 
		src="'.Template::theme_url('images/photo.png').'" alt="">'; ?>
					<span class='help-inline'><?php echo form_error('favicon'); ?></span>
					<p>Type harus JPG,PNG dan Width Max 200px height Max 200px</p>
				</div>
			</div>

			<div class="control-group <?php echo form_error('header') ? 'error' : ''; ?>">
				<?php echo form_label('Header', 'header', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='header' type='file' name='header'  value="<?php echo set_value('header', isset($sosmed['header']) ? $sosmed['header'] : ''); ?>" />
								<br />
						<?php echo isset($sosmed['favicon']) ?  img(array("src"=>$upload_path_image.$sosmed["header"],"style"=>"width:400px")) : '<img 
		src="'.Template::theme_url('images/photo.png').'" alt="">'; ?>
					<span class='help-inline'><?php echo form_error('header'); ?></span>
					<p>Type harus JPG,GIF,PNG dan Width Max 690px height Max 50px</p>
				</div>
			</div>

			<div class="control-group <?php echo form_error('google_map') ? 'error' : ''; ?>">
				<?php echo form_label('Google Map', 'sosmed_google_map', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<?php echo form_textarea( array( 'name' => 'sosmed_google_map', 'id' => 'sosmed_google_map', 'class' => 'form-control', 'style' => 'height:50px;', 'value' => set_value('sosmed_google_map', isset($sosmed['google_map']) ? $sosmed['google_map'] : '') ) ); ?>
					<span class='help-inline'><?php echo form_error('google_map'); ?></span>
				</div>
			</div>
			
				<div class="control-group <?php echo form_error('telp') ? 'error' : ''; ?>">
				<?php echo form_label('Telp', 'sosmed_telp', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='sosmed_telp' class="form-control" type='text' name='sosmed_telp' maxlength="12" value="<?php echo set_value('sosmed_telp', isset($sosmed['telp']) ? $sosmed['telp'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('telp'); ?></span>
				</div>
			</div>

		
			
			<div class="control-group <?php echo form_error('fax') ? 'error' : ''; ?>">
				<?php echo form_label('Fax', 'sosmed_fax', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='sosmed_fax' class="form-control" type='text' name='sosmed_fax' maxlength="14" value="<?php echo set_value('sosmed_fax', isset($sosmed['fax']) ? $sosmed['fax'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('fax'); ?></span>
				</div>
			</div>

	<div class="control-group <?php echo form_error('email') ? 'error' : ''; ?>">
				<?php echo form_label('Email', 'email', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='email' class="form-control" type='email' name='email'  value="<?php echo set_value('email', isset($sosmed['email']) ? $sosmed['email'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('email'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('hari_kerja') ? 'error' : ''; ?>">
				<?php echo form_label('Hari Kerja', 'hari_kerja', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='hari_kerja' class="form-control" type='text' name='hari_kerja'  value="<?php echo set_value('hari_kerja', isset($sosmed['hari_kerja']) ? $sosmed['hari_kerja'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('hari_kerja'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('tentang_perusahaan') ? 'error' : ''; ?>">
				<?php echo form_label('Tentang Perusahaan', 'tentang_perusahaan', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<textarea id='tentang_perusahaan' class="form-control" name="tentang_perusahaan"><?php echo set_value('tentang_perusahaan', isset($sosmed['tentang_perusahaan']) ? $sosmed['tentang_perusahaan'] : ''); ?></textarea>
					
					<span class='help-inline'><?php echo form_error('tentang_perusahaan'); ?></span>
				</div>
			</div>
			
			<div class="control-group <?php echo form_error('meta_description') ? 'error' : ''; ?>">
				<?php echo form_label('Meta Description', 'meta description', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<textarea id='meta_description' class="form-control" name="meta_description"><?php echo set_value('meta_description', isset($sosmed['meta_description']) ? $sosmed['meta_description'] : ''); ?></textarea>
					
					<span class='help-inline'><?php echo form_error('meta_description'); ?></span>
				</div>
			</div>
			
			<div class="control-group <?php echo form_error('meta_keyword') ? 'error' : ''; ?>">
				<?php echo form_label('Meta Keyword', 'meta_keyword', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<textarea id='meta_keyword' class="form-control" name="meta_keyword"><?php echo set_value('meta_keyword', isset($sosmed['meta_keyword']) ? $sosmed['meta_keyword'] : ''); ?></textarea>
					
					<span class='help-inline'><?php echo form_error('meta_keyword'); ?></span>
				</div>
			</div>
			
				<div class="control-group <?php echo form_error('meta_robots') ? 'error' : ''; ?>">
				<?php echo form_label('Meta Robots', 'meta_robots', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<textarea id='meta_robots' class="form-control" name="meta_robots"><?php echo set_value('meta_robots', isset($sosmed['meta_robots']) ? $sosmed['meta_robots'] : ''); ?></textarea>
					<p class="help-inline">Example : all, noindex, nofollow, none , noarchive</p>
					<span class='help-inline'><?php echo form_error('meta_robots'); ?></span>
				</div>
			</div>
			
			 </div>
			 
			   <div class="panel-footer">
                           
                        </div>
				 
				 </div>
			
			</div>
			</div>
            <!-- /.row -->






		<hr />
			<div class="form-actions">
				<input type="submit" id="save" name="save" class="btn btn-primary" value="<?php echo lang('sosmed_action_create'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/sosmed', lang('sosmed_cancel'), 'class="btn btn-warning"'); ?>
				
			</div>
	<br /><br /><br />
    <?php echo form_close(); ?>
