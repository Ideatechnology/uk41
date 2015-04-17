<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to CodeIgniter : CodeIgniter User Guide</title>

<style type='text/css' media='all'>@import url('<?php echo Template::theme_url('userguide.css');?>');</style>
<link rel='stylesheet' type='text/css' media='all' href='<?php echo Template::theme_url('userguide.css');?>' />


<script>
function create_menu(basepath)
{
	var base = (basepath == 'null') ? '' : basepath;

	document.write(
		'<table cellpadding="0" cellspaceing="0" border="0" style="width:98%"><tr>' +
		'<td class="td" valign="top">' +

		'<ul>' +
		'<li><a href="'+base+'index">User Guide Home</a></li>' +
		'<li><a href="'+base+'toc">Table of Contents Page</a></li>' +
		'</ul>' +

		'<h3>Basic Info</h3>' +
		'<ul>' +
			'<li><a href="'+base+'requirements">Server Requirements</a></li>' +
			'<li><a href="'+base+'license">License Agreement</a></li>' +
			'<li><a href="'+base+'changelog">Change Log</a></li>' +
			'<li><a href="'+base+'credits">Credits</a></li>' +
		'</ul>' +

		'<h3>Installation</h3>' +
		'<ul>' +
			'<li><a href="'+base+'downloads">Downloading CodeIgniter</a></li>' +
			'<li><a href="'+base+'installation">Installation Instructions</a></li>' +
			'<li><a href="'+base+'upgrading">Upgrading from a Previous Version</a></li>' +
			'<li><a href="'+base+'troubleshooting">Troubleshooting</a></li>' +
		'</ul>' +

		'<h3>Introduction</h3>' +
		'<ul>' +
			'<li><a href="'+base+'getting_started">Getting Started</a></li>' +
			'<li><a href="'+base+'at_a_glance">CodeIgniter at a Glance</a></li>' +
			'<li><a href="'+base+'cheatsheets">CodeIgniter Cheatsheets</a></li>' +
			'<li><a href="'+base+'features">Supported Features</a></li>' +
			'<li><a href="'+base+'appflow">Application Flow Chart</a></li>' +
			'<li><a href="'+base+'mvc">Model-View-Controller</a></li>' +
			'<li><a href="'+base+'goals">Architectural Goals</a></li>' +
		'</ul>' +
		
		'<h3>Tutorial</h3>' +
		'<ul>' +
			'<li><a href="'+base+'tutorial">Introduction</a></li>' +
			'<li><a href="'+base+'static_pages">Static pages</a></li>' +
			'<li><a href="'+base+'news_section">News section</a></li>' +
			'<li><a href="'+base+'create_news_items">Create news items</a></li>' +
			'<li><a href="'+base+'conclusion">Conclusion</a></li>' +
		'</ul>' +
		
		'</td><td class="td_sep" valign="top">' +

		'<h3>General Topics</h3>' +
		'<ul>' +
			'<li><a href="'+base+'urls">CodeIgniter URLs</a></li>' +
			'<li><a href="'+base+'controllers">Controllers</a></li>' +
			'<li><a href="'+base+'reserved_names">Reserved Names</a></li>' +
			'<li><a href="'+base+'views">Views</a></li>' +
			'<li><a href="'+base+'models">Models</a></li>' +
			'<li><a href="'+base+'helpers">Helpers</a></li>' +
			'<li><a href="'+base+'libraries">Using CodeIgniter Libraries</a></li>' +
			'<li><a href="'+base+'creating_libraries">Creating Your Own Libraries</a></li>' +
			'<li><a href="'+base+'drivers">Using CodeIgniter Drivers</a></li>' +
			'<li><a href="'+base+'creating_drivers">Creating Your Own Drivers</a></li>' +
			'<li><a href="'+base+'core_classes">Creating Core Classes</a></li>' +
			'<li><a href="'+base+'hooks">Hooks - Extending the Core</a></li>' +
			'<li><a href="'+base+'autoloader">Auto-loading Resources</a></li>' +
			'<li><a href="'+base+'common_functions">Common Functions</a></li>' +
			'<li><a href="'+base+'routing">URI Routing</a></li>' +
			'<li><a href="'+base+'errors">Error Handling</a></li>' +
			'<li><a href="'+base+'caching">Caching</a></li>' +
			'<li><a href="'+base+'profiling">Profiling Your Application</a></li>' +
			'<li><a href="'+base+'cli">Running via the CLI</a></li>' +
			'<li><a href="'+base+'managing_apps">Managing Applications</a></li>' +
			'<li><a href="'+base+'environments">Handling Multiple Environments</a></li>' +
			'<li><a href="'+base+'alternative_php">Alternative PHP Syntax</a></li>' +
			'<li><a href="'+base+'security">Security</a></li>' +
			'<li><a href="'+base+'styleguide">PHP Style Guide</a></li>' +
			'<li><a href="'+base+'doc_style">Writing Documentation</a></li>' +
		'</ul>' +

		'<h3>Additional Resources</h3>' +
		'<ul>' +
		'<li><a href="http://codeigniter.com/forums/">Community Forums</a></li>' +
		'<li><a href="http://codeigniter.com/wiki/">Community Wiki</a></li>' +
		'</ul>' +

		'</td><td class="td_sep" valign="top">' +

		'<h3>Class Reference</h3>' +
		'<ul>' +
		'<li><a href="'+base+'benchmark">Benchmarking Class</a></li>' +
		'<li><a href="'+base+'calendar">Calendar Class</a></li>' +
		'<li><a href="'+base+'cart">Cart Class</a></li>' +
		'<li><a href="'+base+'config">Config Class</a></li>' +
		'<li><a href="'+base+'email">Email Class</a></li>' +
		'<li><a href="'+base+'encryption">Encryption Class</a></li>' +
		'<li><a href="'+base+'file_uploading">File Uploading Class</a></li>' +
		'<li><a href="'+base+'form_validation">Form Validation Class</a></li>' +
		'<li><a href="'+base+'ftp">FTP Class</a></li>' +
		'<li><a href="'+base+'table">HTML Table Class</a></li>' +
		'<li><a href="'+base+'image_lib">Image Manipulation Class</a></li>' +
		'<li><a href="'+base+'input">Input Class</a></li>' +
		'<li><a href="'+base+'javascript">Javascript Class</a></li>' +
		'<li><a href="'+base+'loader">Loader Class</a></li>' +
		'<li><a href="'+base+'language">Language Class</a></li>' +
		'<li><a href="'+base+'migration">Migration Class</a></li>' +
		'<li><a href="'+base+'output">Output Class</a></li>' +
		'<li><a href="'+base+'pagination">Pagination Class</a></li>' +
		'<li><a href="'+base+'security">Security Class</a></li>' +
		'<li><a href="'+base+'sessions">Session Class</a></li>' +
		'<li><a href="'+base+'trackback">Trackback Class</a></li>' +
		'<li><a href="'+base+'parser">Template Parser Class</a></li>' +
		'<li><a href="'+base+'typography">Typography Class</a></li>' +
		'<li><a href="'+base+'unit_testing">Unit Testing Class</a></li>' +
		'<li><a href="'+base+'uri">URI Class</a></li>' +
		'<li><a href="'+base+'user_agent">User Agent Class</a></li>' +
		'<li><a href="'+base+'xmlrpc">XML-RPC Class</a></li>' +
		'<li><a href="'+base+'zip">Zip Encoding Class</a></li>' +
		'</ul>' +

		'</td><td class="td_sep" valign="top">' +

		'<h3>Driver Reference</h3>' +
		'<ul>' +
		'<li><a href="'+base+'caching">Caching Class</a></li>' +
		'<li><a href="'+base+'database">Database Class</a></li>' +
		'<li><a href="'+base+'javascript">Javascript Class</a></li>' +
		'</ul>' +

		'<h3>Helper Reference</h3>' +
		'<ul>' +
		'<li><a href="'+base+'array_helper">Array Helper</a></li>' +
		'<li><a href="'+base+'captcha_helper">CAPTCHA Helper</a></li>' +
		'<li><a href="'+base+'cookie_helper">Cookie Helper</a></li>' +
		'<li><a href="'+base+'date_helper">Date Helper</a></li>' +
		'<li><a href="'+base+'directory_helper">Directory Helper</a></li>' +
		'<li><a href="'+base+'download_helper">Download Helper</a></li>' +
		'<li><a href="'+base+'email_helper">Email Helper</a></li>' +
		'<li><a href="'+base+'file_helper">File Helper</a></li>' +
		'<li><a href="'+base+'form_helper">Form Helper</a></li>' +
		'<li><a href="'+base+'html_helper">HTML Helper</a></li>' +
		'<li><a href="'+base+'inflector_helper">Inflector Helper</a></li>' +
		'<li><a href="'+base+'language_helper">Language Helper</a></li>' +
		'<li><a href="'+base+'number_helper">Number Helper</a></li>' +
		'<li><a href="'+base+'path_helper">Path Helper</a></li>' +
		'<li><a href="'+base+'security_helper">Security Helper</a></li>' +
		'<li><a href="'+base+'smiley_helper">Smiley Helper</a></li>' +
		'<li><a href="'+base+'string_helper">String Helper</a></li>' +
		'<li><a href="'+base+'text_helper">Text Helper</a></li>' +
		'<li><a href="'+base+'typography_helper">Typography Helper</a></li>' +
		'<li><a href="'+base+'url_helper">URL Helper</a></li>' +
		'<li><a href="'+base+'xml_helper">XML Helper</a></li>' +
		'</ul>' +

		'</td></tr></table>');
}
</script>

<script type="text/javascript" src="<?php echo Template::theme_url('nav/prototype.lite.js');?>"></script>
<script type="text/javascript" src="<?php echo Template::theme_url('nav/moo.fx.js');?>"></script>
<script type="text/javascript" src="<?php echo Template::theme_url('nav/jquery-1.7.2.js');?>"></script>
<script type="text/javascript">

$(document).ready(function(){

  $("#nav2").click(function(){

    $("#nav").slideToggle(500);

  });

});

</script>

<meta http-equiv='expires' content='-1' />
<meta http-equiv= 'pragma' content='no-cache' />
<meta name='robots' content='all' />
<meta name='author' content='ExpressionEngine Dev Team' />
<meta name='description' content='CodeIgniter User Guide' />

</head>
<body>


<!-- START NAVIGATION -->
<div id="nav" style="display:none"><div id="nav_inner"><script type="text/javascript">create_menu('<?php echo site_url("docs_codeigniter");?>/');</script></div></div>
<div id="nav2"><a name="top"></a><a href="javascript:void(0);" onclick="myHeight.toggle();"><img src="<?php echo Template::theme_url('images/nav_toggle_darker.jpg');?>" width="154" height="43" border="0" title="Toggle Table of Contents" alt="Toggle Table of Contents" /></a></div>
<div id="masthead">
<table cellpadding="0" cellspacing="0" border="0" style="width:100%">
<tr>
<td><h1>CodeIgniter User Guide Version 2.1.4</h1></td>
<td id="breadcrumb_right"><a href="toc">Table of Contents Page</a></td>
</tr>
</table>
</div>
<!-- END NAVIGATION -->


<table cellpadding="0" cellspacing="0" border="0" style="width:100%">
<tr>
<td id="breadcrumb"> 
<?php echo isset($breadcumb)?breadcrumb($breadcumb):breadcrumb(); ?>
</td>
<td id="searchbox"><form method="get" action="http://www.google.com/search"><input type="hidden" name="as_sitesearch" id="as_sitesearch" value="ellislab.com/codeigniter/user-guide/" />Search User Guide&nbsp; <input type="text" class="input" style="width:200px;" name="q" id="q" size="31" maxlength="255" value="" />&nbsp;<input type="submit" class="submit" name="sa" value="Go" /></form></td>
</tr>
</table>



<br clear="all" />

<div class="center"><img src="<?php echo Template::theme_url('images/ci_logo_flame.jpg');?>" width="150" height="164" border="0" alt="CodeIgniter" /></div>


<!-- START CONTENT -->
<div id="content">

<?php echo Template::content(); ?>


</div>
<!-- END CONTENT -->


<div id="footer">
<p><a href="#top">Top of Page</a></p>
<p><a href="http://codeigniter.com">CodeIgniter</a> &nbsp;&middot;&nbsp; Copyright &#169; 2006 - 2012 &nbsp;&middot;&nbsp; <a href="http://ellislab.com/">EllisLab, Inc.</a></p>
</div>



</body>
</html>