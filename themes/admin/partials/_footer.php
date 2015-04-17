
</div>
    <!-- /#wrapper -->

	<div id="debug"><!-- Stores the Profiler Results --></div>

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script>window.jQuery || document.write('<script src="<?php echo js_path(); ?>jquery.min.js"><\/script>')</script>
	
   <script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
 <script src="<?php echo base_url(); ?>assets/ckfinder/ckfinder.js"></script>
	
  <?php
	Assets::add_js( array( 'bootstrap.min.js', 'jwerty.js','plugins/metisMenu/jquery.metisMenu.js','plugins/morris/raphael-2.1.0.min.js'
	,'plugins/dataTables/jquery.dataTables.js','plugins/dataTables/dataTables.bootstrap.js','sb-admin.js',
	'plugins/validation/validator.min.js','plugins/daterange/moment.min.js','plugins/daterange/daterangepicker.js',
	'plugins/money/jquery.bootstrap3-money-field.js','plugins/money/jquery.maskMoney.js','app.js',
	'plugins/amcharts/amcharts.js','plugins/amcharts/serial.js','angular.min.js','angular-animate.js','angular-animate.js','angular-touch.js'), 'external', true);
	
?>

  
	<?php echo Assets::js(); ?>
    <?php echo Assets::module_js();?>
    
<script>

</script>
    
</body>
</html>
