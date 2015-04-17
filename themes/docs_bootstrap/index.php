<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Bootstrap, a sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development.">
<meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">


<!-- Bootstrap core CSS -->
<link href="<?php echo Template::theme_url('dist/css/bootstrap.min.css'); ?>" rel="stylesheet">

<!-- Documentation extras -->
<link href="<?php echo Template::theme_url('assets/css/docs.min.css');?>" rel="stylesheet">
<!--[if lt IE 9]><script src="<?php echo Template::theme_url('assets/js/ie8-responsive-file-warning.js');?>"></script><![endif]-->



<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Template::theme_url('assets/ico/apple-touch-icon-144-precomposed.png');?>">
                               <link rel="shortcut icon" href="<?php echo Template::theme_url('assets/ico/favicon.ico');?>">



    <title>Docs Bootstrap - <?php e($this->settings_lib->item('site.title')); ?></title>
 
</head>
  <body class="bs-docs-home">

<a class="sr-only" href="#content">Skip to main content</a>

    <!-- Docs master nav -->
    <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../" class="navbar-brand">Bootstrap</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="<?php echo site_url("docs_bootstrap/index");?>">Getting started</a>
        </li>
        <li>
         <a href="<?php echo site_url("docs_bootstrap/css");?>">CSS</a>
        </li>
        <li>
          <a href="<?php echo site_url("docs_bootstrap/component");?>">Components</a>
        </li>
        <li>
          <a href="<?php echo site_url("docs_bootstrap/javascript");?>">JavaScript</a>
        </li>
        <li>
          <a href="<?php echo site_url("docs_bootstrap/customize");?>">Customize</a>
        </li>
      </ul>
     
    </nav>
  </div>
</header>


          
				<?php echo Template::content(); ?>
       
  

    <!-- Footer
================================================== -->
<footer class="bs-docs-footer" role="contentinfo">
  <div class="container">
   
    <p>Designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
    <p>Maintained by the <a href="https://github.com/twbs?tab=members">core team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>
    <p>Code licensed under <a href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
    <ul class="bs-docs-footer-links muted">
      <li>Currently v</li>
      <li>&middot;</li>
      <li><a href="">GitHub</a></li>
      <li>&middot;</li>
      <li><a href="../getting-started/#examples">Examples</a></li>
      <li>&middot;</li>
      <li><a href="../2.3.2/">v2.3.2 docs</a></li>
      <li>&middot;</li>
      <li><a href="../about/">About</a></li>
      <li>&middot;</li>
      <li><a href="">Expo</a></li>
      <li>&middot;</li>
      <li><a href="">Blog</a></li>
      <li>&middot;</li>
      <li><a href="/issues?state=open">Issues</a></li>
      <li>&middot;</li>
      <li><a href="/releases">Releases</a></li>
    </ul>
  </div>
</footer>



   
 
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo Template::theme_url('assets/js/jquery.min.js');?>"></script>
<script src="<?php echo Template::theme_url('dist/js/bootstrap.min.js');?>"></script>
<script src="<?php echo Template::theme_url('assets/js/docs.min.js');?>"></script>

</body>
</html>
