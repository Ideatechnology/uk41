
  <?php if (has_permission('Ujian.Content.Registration')):?>
    	<li <?php echo $this->uri->segment(4) == 'registration' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/ujian/registration') ?>" id="create_new">Registration</a>
	</li>
    <?php endif;?>

	<?php if (has_permission('Ujian.Content.Create')):?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/ujian/create') ?>">Create</a>
	</li>
       
    <?php endif;?>
   
    <?php if (has_permission('Ujian.Content.View')):?>
    	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/ujian') ?>" id="create_new">Manage</a>
	</li>
    <?php endif;?>

      
    
