<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo isset($page_title) ? $page_title .' : ' : ''; ?> <?php if (class_exists('Settings_lib')) e(settings_item('site.title')); else echo 'Medinatryout'; ?></title>
		
	<link rel="stylesheet" href="<?php echo Template::theme_url("themes/medina.min.css");?>" />
	<link rel="stylesheet" href="<?php echo Template::theme_url("themes/jquery.mobile.icons.min.css");?>" />
	<link rel="stylesheet" href="<?php echo Template::theme_url("themes/jquery.mobile.structure-1.4.5.min.css");?>" />
	<script src="<?php echo Template::theme_url("themes/jquery-1.11.1.min.js");?>"></script>
	<script src="<?php echo Template::theme_url("themes/jquery.mobile-1.4.5.min.js");?>"></script>
        <script src="<?php echo Template::theme_url("js/jquery.form.min.js");?>"></script>
        <link rel="stylesheet" href="<?php echo Template::theme_url("themes/style.css");?>" />
	<link rel="stylesheet" href="<?php echo Template::theme_url("css/flipclock_mobile.css");?>" />
<script src="<?php echo Template::theme_url("js/flipclock.js");?>"></script>
</head>
<body>
    