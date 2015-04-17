<?php echo theme_view('_header'); ?>
<style>
.box {
	background-color: #fff;
}
body{
	background-color: #fff;
}
#main{
	background-color: #fff;
}
</style>
 <!-- main right col -->
            <div class="column col-sm-12 col-xs-12" id="main">
            
            <!-- top nav -->
              	<div class="navbar navbar-blue navbar-static-top">  
                <div class="container">
                    <div class="navbar-header">
                      <a href="#" class="pull-left" style="margin-left:10px;margin-right:10px;margin-top:5px;">
                          <img  src="<?php echo base_url("application/modules/sosmed/files/")."/".@$this->sosmed_model->getSosmed()->logo;?>"
                       
                        </a>
                      <a href="<?php echo site_url();?>" class="navbar-brand" style="color:#FFF"><?php if (class_exists('Settings_lib')) e(settings_item('site.title')); else echo 'Medinatryout'; ?></a>
                 
                    
                    </div>
                     <nav class="collapse navbar-collapse" role="navigation">
                          <ul class="nav navbar-nav navbar-right" style="margin-right:30px;">
                  
                         <li><a href="<?php echo site_url('/') ?>"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>
                          </ul>     
                  </nav>
                  	</div>
                </div>
                <!-- /top nav -->
                
                <div class="padding">
                    <div class="full col-sm-12">
                      
                        <!-- content -->                      
                      	<div class="row">
                        <div class="container">
                          
                          <!-- main col right -->
							<div class="hidden-xs col-sm-7 bglogin ">
                            <h2>Selamat Datang di Medinatryout</h2>
                            
			    <p>Dengan mengikuti medinatryout anda akan sangat mudah menyelesaikan ujian UKDI, karena kelulusan anda adalah prioritas kami.
				<br/>salam smart and success. </p>
                            
                            <img src="<?php echo Template::theme_url("images/bg.png");?>" style="width:90%" />
                         
				<br/> <br/> Download Apps medinatryout di Smartphone Android Anda : <br/><br> 

 			    <a href ="https://play.google.com/store/apps/details?id=com.ideotechnology.medinatryout.medinatryout"><img src="<?php echo Template::theme_url("images/playstore.png");?>"  /></a>    
                           
			 </div>
			   
			
                            
                             <!-- main col right -->
							<div class="col-sm-4">
            
    <?php
        echo isset($content) ? $content : Template::content();
    ?>
    
    </div>
                        
                        </div>
                       </div><!--/row-->
                      
                        
                      <hr />
                        <div class="row" id="footer">    
                          
                          <div class="col-sm-12">
                          <p class="text-center">
                          
                          <a href="#" style="margin-right:10px"><?php if (class_exists('Settings_lib')) e(settings_item('site.title')); else echo 'Medinatryout'; ?> &copy; Copyright All Reserved  </a> 
      					</p>
                           </div>
                        </div>
                      </div>
                      
                        
                      
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->
          
        </div>
    </div>
</div>

<?php echo theme_view('_footer'); ?>