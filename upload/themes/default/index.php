<?php echo theme_view('_header'); ?>

<?php echo theme_view('_sitenav'); ?>
    

 <!-- sidebar -->
            <div class="column col-sm-3 col-xs-1 sidebar-offcanvas" id="sidebar">
            	<?php echo theme_view('_sidebar'); ?>
            </div>
 <!-- /sidebar -->
    
	 <!-- main right col -->
            <div class="column col-sm-9 col-xs-11" id="main">
	
    
     <div class="padding">
                    <div class="full col-sm-9">
                      
                        <!-- content -->                      
                      	<div class="row">
                          
                         <!-- main col left --> 
                         <?php
       					 echo isset($content) ? $content : Template::content();
    					?>
                       </div><!--/row-->
                      
                        
                      <hr />
                        <div class="row" id="footer">    
                          <div class="col-sm-12">
                            
                             <a href="#" class="pull-right"><?php if (class_exists('Settings_lib')) e(settings_item('site.title')); else echo 'Medinatryout'; ?> &copy; Copyright All Reserved</a>
                          </div>
                          
                        </div>
                      
                      
                        
                      
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
    
    
    </div>
            <!-- /main -->

    

<?php echo theme_view('_footer'); ?>