<?php
    Assets::add_js( array('bootstrap.min.js','jquery.form.min.js','scripts.js') );
    Assets::add_css( array('bootstrap.min.css','flipclock.css'));

    $inline  = '$(".dropdown-toggle").dropdown();';
    $inline .= '$(".tooltips").tooltip();';

    Assets::add_js( $inline, 'inline' );
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title><?php echo isset($page_title) ? $page_title .' : ' : ''; ?> <?php if (class_exists('Settings_lib')) e(settings_item('site.title')); else echo 'Medinatryout'; ?></title>
		<meta content='<?php e($this->settings_lib->item('site.meta_description')) ?>' name='description'/>
<meta content='<?php e($this->settings_lib->item('site.meta_keyword')) ?>' name='keywords'/>
<meta name="robots" content="<?php e($this->settings_lib->item('site.meta_robot')) ?>">
	<meta name="author" content="<?php e($this->settings_lib->item('site.author')) ?>">
                <meta name="generator" content="Ideotechnology" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]--> 
		<?php echo Assets::css(); ?>
      <link rel="stylesheet" href="<?php echo Template::theme_url("fonts/font-awesome/css/font-awesome.min.css");?>" />
	
        <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
	</head>
	<body>
    
    <div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">

