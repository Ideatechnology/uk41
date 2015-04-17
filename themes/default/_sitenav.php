<!-- top nav -->
              	<div class="navbar navbar-blue navbar-static-top">  
                
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
          				<span class="icon-bar"></span>
          				<span class="icon-bar"></span>
                      </button>
                        
                        <a href="#" class="pull-left" style="margin-left:10px;">
                          <img  src="<?php echo base_url("application/modules/sosmed/files/")."/".@$this->sosmed_model->getSosmed()->logo;?>">
                       
                        </a>
                      <a href="<?php echo site_url();?>" class="navbar-brand logo">
                              <?php if (class_exists('Settings_lib')) e(settings_item('site.title')); else echo 'Medinatryout'; ?></a>
                  	</div>
                  	<nav class="collapse navbar-collapse" role="navigation">
                         <?php echo form_open("/ujian/index", array("class"=>"navbar-form navbar-left","method"=>"get")); ?>
      
                        <div class="input-group input-group-sm" style="width:360px;max-width:360px;">
                          <input type="text" class="form-control" placeholder="Cari Ujian" name="filter" value="<?php echo $this->input->get("filter");?>" id="srch-term">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                     <?php echo form_close(); ?>
                     
                    <ul class="nav navbar-nav navbar-right" style="margin-right:30px;">
 <li><a href="https://play.google.com/store/apps/details?id=com.ideotechnology.medinatryout.medinatryout"><i class="fa fa-android"></i> Download Versi Android</a></li>
                                           
 <?php 
                     // if the user is not logged in continue to show the login page
		if ($this->auth->is_logged_in() === TRUE)
		{
                    
                
                ?>
                    
                    <?php if(@$current_user->role_id==1 ||  @$current_user->role_id==6): ?>
                       <li>
                        <a href="<?php echo site_url(SITE_AREA);?>" target="_blank"><i class="glyphicon glyphicon-cog"></i> Administrator</a>
                      </li>
                      <?php endif; ?>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <?php echo (isset($current_user->display_name) && !empty($current_user->display_name)) ? ucfirst(@$current_user->display_name) : ($this->settings_lib->item('auth.use_usernames') ? ucfirst(@$current_user->username) : @$current_user->email); ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('/users/profile/sunting'); ?>">Profil Anda </a></li>
                          <li><a href="<?php echo site_url('/users/changepassword'); ?>">Ganti Password</a></li>
                          <li><a href="<?php echo site_url('/logout') ?>">Keluar</a></li>
                        </ul>
                      </li>
                      <?php }else{ ?>
                           <li><a href="<?php echo site_url('/login') ?>">Login</a></li>
                           <li><a href="<?php echo site_url('/register') ?>">Register</a></li>
                   
                      <?php } ?>
                    </ul>
                  	</nav>
                </div>
                <!-- /top nav -->