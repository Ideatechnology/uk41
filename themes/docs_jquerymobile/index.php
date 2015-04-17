<!DOCTYPE html>
<html>

<!-- Mirrored from demos.jquerymobile.com/1.4.2/ by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 10 Mar 2014 08:14:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet"  href="<?php echo Template::theme_url("css/themes/default/jquery.mobile-1.4.2.min.css");?>">
	<link rel="stylesheet" href="<?php echo Template::theme_url("_assets/css/jqm-demos.css");?>">

	<script src="<?php echo Template::theme_url("js/jquery.js");?>"></script>
	<script src="<?php echo Template::theme_url("_assets/js/index.js");?>"></script>
	<script src="<?php echo Template::theme_url("js/jquery.mobile-1.4.2.min.js");?>"></script>
	
	

	
</head>
<body>
<div data-role="page" class="jqm-demos jqm-home">

	<div data-role="header" class="jqm-header">
		<h2><img src="<?php echo Template::theme_url("_assets/img/jquery-logo.png");?>" alt="jQuery Mobile"></h2>
		<p>Version <span class="jqm-version"></span></p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->

	
	<div role="main" class="ui-content jqm-content">
	<?php echo Template::content(); ?>
	</div>
	
	
	
	
		    <div data-role="panel" class="jqm-navmenu-panel" data-position="left" data-display="overlay" data-theme="a">
	    	<ul class="jqm-list ui-alt-icon ui-nodisc-icon">

<li data-filtertext="introduction overview getting started">
<a href="<?php echo site_url("docs_jquerymobile/index");?>" data-ajax="false">Beranda</a>
</li>

<li data-filtertext="introduction overview getting started">
<a href="<?php echo site_url("docs_jquerymobile/intro");?>" data-ajax="false">Pengenalan</a>
</li>

<li data-filtertext="buttons button markup buttonmarkup method anchor link button element">
<a href="<?php echo site_url("docs_jquerymobile/button_markup");?>" data-ajax="false">Buttons</a>
</li>

<li data-filtertext="form button widget input button submit reset">
<a href="<?php echo site_url("docs_jquerymobile/button_widget");?>" data-ajax="false">Button widget</a>
</li>

<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Checkboxradio widget</h3>
	<ul>
		<li data-filtertext="form checkboxradio widget checkbox input checkboxes controlgroups">
		<a href="<?php echo site_url("docs_jquerymobile/checkbox");?>" data-ajax="false">Checkboxes</a>
		</li>
		<li data-filtertext="form checkboxradio widget radio input radio buttons controlgroups">
		<a href="<?php echo site_url("docs_jquerymobile/radiobutton");?>" data-ajax="false">Radio buttons</a>
		</li>
	</ul>
</li>

<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Collapsible (set) widget</h3>
	<ul>
		
		<li data-filtertext="collapsibles content formatting">
		<a href="<?php echo site_url("docs_jquerymobile/collapsible");?>" data-ajax="false">Collapsible</a>
		</li>
		
		<li data-filtertext="dynamic collapsible set accordion append expand">
		<a href="<?php echo site_url("docs_jquerymobile/collapsible_dynamic");?>" data-ajax="false">Dynamic collapsibles</a>
		</li>
		
		<li data-filtertext="accordions collapsible set widget content formatting grouped collapsibles">
		<a href="<?php echo site_url("docs_jquerymobile/collapsibleset");?>" data-ajax="false">Collapsible set</a>
		</li>
		
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Controlgroup widget</h3>
	<ul>
		<li data-filtertext="controlgroups selectmenu checkboxradio input grouped buttons horizontal vertical">
		<a href="<?php echo site_url("docs_jquerymobile/controlgroup");?>" data-ajax="false">Controlgroup</a>
		</li>
		<li data-filtertext="dynamic controlgroup dynamically add buttons">
		<a href="<?php echo site_url("docs_jquerymobile/controlgroup_dynamic");?>" data-ajax="false">Dynamic controlgroups</a>
		</li>
	</ul>
</li>
<li data-filtertext="form datepicker widget date input">
<a href="<?php echo site_url("docs_jquerymobile/datepicker");?>" data-ajax="false">Datepicker</a>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Events</h3>
	<ul>
		<li data-filtertext="swipe to delete list items listviews swipe events">
		<a href="<?php echo site_url("docs_jquerymobile/swipe_list");?>" data-ajax="false">Swipe list items</a>
		</li>
		<li data-filtertext="swipe to navigate swipe page navigation swipe events">
		<a href="<?php echo site_url("docs_jquerymobile/swipe_page");?>" data-ajax="false">Swipe page navigation</a>
		</li>
	</ul>
</li>

<li data-filtertext="filterable filter elements sorting searching listview table"><a href="http://demos.jquerymobile.com/filterable/" data-ajax="false">Filterable widget</a></li>
<li data-filtertext="form flipswitch widget flip toggle switch binary select checkbox input"><a href="http://demos.jquerymobile.com/flipswitch/" data-ajax="false">Flipswitch widget</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Forms</h3>
	<ul>
		<li data-filtertext="forms text checkbox radio range button submit reset inputs selects textarea slider flipswitch label form elements"><a href="http://demos.jquerymobile.com/forms/" data-ajax="false">Forms</a></li>
		<li data-filtertext="form hide labels hidden accessible ui-hidden-accessible forms"><a href="http://demos.jquerymobile.com/forms-label-hidden-accessible/" data-ajax="false">Hide labels</a></li>
		<li data-filtertext="form field containers fieldcontain ui-field-contain forms"><a href="http://demos.jquerymobile.com/forms-field-contain/" data-ajax="false">Field containers</a></li>
		<li data-filtertext="forms disabled form elements"><a href="http://demos.jquerymobile.com/forms-disabled/" data-ajax="false">Forms disabled</a></li>
		<li data-filtertext="forms gallery examples overview forms text checkbox radio range button submit reset inputs selects textarea slider flipswitch label form elements"><a href="http://demos.jquerymobile.com/forms-gallery/" data-ajax="false">Forms gallery</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Grids</h3>
	<ul>
		<li data-filtertext="grids columns blocks content formatting rwd responsive css framework"><a href="http://demos.jquerymobile.com/grids/" data-ajax="false">Grids</a></li>
		<li data-filtertext="buttons in grids css framework"><a href="http://demos.jquerymobile.com/grids-buttons/" data-ajax="false">Buttons in grids</a></li>
		<li data-filtertext="custom responsive grids rwd css framework"><a href="http://demos.jquerymobile.com/grids-custom-responsive/" data-ajax="false">Custom responsive grids</a></li>
	</ul>
</li>
<li data-filtertext="blocks content formatting sections heading"><a href="http://demos.jquerymobile.com/body-bar-classes/" data-ajax="false">Grouping and dividing content</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Icons</h3>
	<ul>
		<li data-filtertext="button icons svg disc alt custom icon position"><a href="http://demos.jquerymobile.com/icons/" data-ajax="false">Icons</a></li>
		<li data-filtertext=""><a href="http://demos.jquerymobile.com/icons-grunticon/" data-ajax="false">Grunticon loader</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Listview widget</h3>
	<ul>
		<li data-filtertext="listview widget thumbnails icons nested split button collapsible ul ol"><a href="http://demos.jquerymobile.com/listview/" data-ajax="false">Listview</a></li>
		<li data-filtertext="autocomplete filterable reveal listview filtertextbeforefilter placeholder"><a href="http://demos.jquerymobile.com/listview-autocomplete/" data-ajax="false">Listview autocomplete</a></li>
		<li data-filtertext="autocomplete filterable reveal listview remote data filtertextbeforefilter placeholder"><a href="http://demos.jquerymobile.com/listview-autocomplete-remote/" data-ajax="false">Listview autocomplete remote data</a></li>
		<li data-filtertext="autodividers anchor jump scroll linkbars listview lists ul ol"><a href="http://demos.jquerymobile.com/listview-autodividers-linkbar/" data-ajax="false">Listview autodividers linkbar</a></li>
		<li data-filtertext="listview autodividers selector autodividersselector lists ul ol"><a href="http://demos.jquerymobile.com/listview-autodividers-selector/" data-ajax="false">Listview autodividers selector</a></li>
		<li data-filtertext="listview nested list items"><a href="http://demos.jquerymobile.com/listview-nested-lists/" data-ajax="false">Listview Nested Listviews</a></li>
		<li data-filtertext="listview collapsible list items flat"><a href="http://demos.jquerymobile.com/listview-collapsible-item-flat/" data-ajax="false">Listview collapsible list items (flat)</a></li>
		<li data-filtertext="listview collapsible list indented"><a href="http://demos.jquerymobile.com/listview-collapsible-item-indented/" data-ajax="false">Listview collapsible list items (indented)</a></li>
		<li data-filtertext="grid listview responsive grids responsive listviews lists ul"><a href="http://demos.jquerymobile.com/listview-grid/" data-ajax="false">Listview responsive grid</a></li>
	</ul>
</li>
<li data-filtertext="loader widget page loading navigation overlay spinner"><a href="http://demos.jquerymobile.com/loader/" data-ajax="false">Loader widget</a></li>
<li data-filtertext="navbar widget navmenu toolbars header footer"><a href="http://demos.jquerymobile.com/navbar/" data-ajax="false">Navbar widget</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Navigation</h3>
	<ul>
		<li data-filtertext="ajax navigation navigate widget history event method"><a href="http://demos.jquerymobile.com/navigation/" data-ajax="false">Navigation</a></li>
		<li data-filtertext="linking pages page links navigation ajax prefetch cache"><a href="http://demos.jquerymobile.com/navigation-linking-pages/" data-ajax="false">Linking pages</a></li>
		<li data-filtertext="php redirect server redirection server-side navigation"><a href="http://demos.jquerymobile.com/navigation-php-redirect/" data-ajax="false">PHP redirect demo</a></li>
		<li data-filtertext="navigation redirection hash query"><a href="http://demos.jquerymobile.com/navigation-hash-processing/" data-ajax="false">Hash processing demo</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Pages</h3>
	<ul>
		<li data-filtertext="pages page widget ajax navigation"><a href="http://demos.jquerymobile.com/pages/" data-ajax="false">Pages</a></li>
		<li data-filtertext="single page"><a href="http://demos.jquerymobile.com/pages-single-page/" data-ajax="false">Single page</a></li>
		<li data-filtertext="multipage multi-page page"><a href="http://demos.jquerymobile.com/pages-multi-page/" data-ajax="false">Multi-page template</a></li>
		<li data-filtertext="dialog page widget modal popup"><a href="http://demos.jquerymobile.com/pages-dialog/" data-ajax="false">Dialog page</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Panel widget</h3>
	<ul>
		<li data-filtertext="panel widget sliding panels reveal push overlay responsive"><a href="http://demos.jquerymobile.com/panel/" data-ajax="false">Panel</a></li>
		<li data-filtertext=""><a href="http://demos.jquerymobile.com/panel-external/" data-ajax="false">External panels</a></li>
		<li data-filtertext="panel "><a href="http://demos.jquerymobile.com/panel-fixed/" data-ajax="false">Fixed panels</a></li>
		<li data-filtertext="panel slide panels sliding panels shadow rwd responsive breakpoint"><a href="http://demos.jquerymobile.com/panel-responsive/" data-ajax="false">Panels responsive</a></li>
		<li data-filtertext="panel custom style custom panel width reveal shadow listview panel styling page background wrapper"><a href="http://demos.jquerymobile.com/panel-styling/" data-ajax="false">Custom panel style</a></li>
		<li data-filtertext="panel open on swipe"><a href="http://demos.jquerymobile.com/panel-swipe-open/" data-ajax="false">Panel open on swipe</a></li>
		<li data-filtertext="panels outside page internal external toolbars"><a href="http://demos.jquerymobile.com/panel-external-internal/" data-ajax="false">Panel external and internal</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Popup widget</h3>
	<ul>
		<li data-filtertext="popup widget popups dialog modal transition tooltip lightbox form overlay screen flip pop fade transition"><a href="http://demos.jquerymobile.com/popup/" data-ajax="false">Popup</a></li>
		<li data-filtertext="popup alignment position"><a href="http://demos.jquerymobile.com/popup-alignment/" data-ajax="false">Popup alignment</a></li>
		<li data-filtertext="popup arrow size popups popover"><a href="http://demos.jquerymobile.com/popup-arrow-size/" data-ajax="false">Popup arrow size</a></li>
		<li data-filtertext="dynamic popups popup images lightbox"><a href="http://demos.jquerymobile.com/popup-dynamic/" data-ajax="false">Dynamic popups</a></li>
		<li data-filtertext="popups with iframes scaling"><a href="http://demos.jquerymobile.com/popup-iframe/" data-ajax="false">Popups with iframes</a></li>
		<li data-filtertext="popup image scaling"><a href="http://demos.jquerymobile.com/popup-image-scaling/" data-ajax="false">Popup image scaling</a></li>
		<li data-filtertext="external popup outside multi-page"><a href="http://demos.jquerymobile.com/popup-outside-multipage" data-ajax="false">Popup outside multi-page</a></li>
	</ul>
</li>
<li data-filtertext="form rangeslider widget dual sliders dual handle sliders range input"><a href="http://demos.jquerymobile.com/rangeslider/" data-ajax="false">Rangeslider widget</a></li>
<li data-filtertext="responsive web design rwd adaptive progressive enhancement PE accessible mobile breakpoints media query media queries"><a href="http://demos.jquerymobile.com/rwd/" data-ajax="false">Responsive Web Design</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Selectmenu widget</h3>
	<ul>
		<li data-filtertext="form selectmenu widget select input custom select menu selects"><a href="http://demos.jquerymobile.com/selectmenu/" data-ajax="false">Selectmenu</a></li>
		<li data-filtertext="form custom select menu selectmenu widget custom menu option optgroup multiple selects"><a href="http://demos.jquerymobile.com/selectmenu-custom/" data-ajax="false">Custom select menu</a></li>
		<li data-filtertext="filterable select filter popup dialog"><a href="http://demos.jquerymobile.com/selectmenu-custom-filter/" data-ajax="false">Custom select menu with filter</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Slider widget</h3>
	<ul>
		<li data-filtertext="form slider widget range input single sliders"><a href="http://demos.jquerymobile.com/slider/" data-ajax="false">Slider</a></li>
		<li data-filtertext="form slider widget flipswitch slider binary select flip toggle switch"><a href="http://demos.jquerymobile.com/slider-flipswitch/" data-ajax="false">Slider flip toggle switch</a></li>
		<li data-filtertext="form slider tooltip handle value input range sliders"><a href="http://demos.jquerymobile.com/slider-tooltip/" data-ajax="false">Slider tooltip</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Table widget</h3>
	<ul>
		<li data-filtertext="table widget reflow column toggle th td responsive tables rwd hide show tabular"><a href="http://demos.jquerymobile.com/table-column-toggle/" data-ajax="false">Table Column Toggle</a></li>
		<li data-filtertext="table column toggle phone comparison demo"><a href="http://demos.jquerymobile.com/table-column-toggle-example/" data-ajax="false">Table Column Toggle demo</a></li>
		<li data-filtertext="responsive tables table column toggle heading groups rwd breakpoint"><a href="http://demos.jquerymobile.com/table-column-toggle-heading-groups/" data-ajax="false">Table Column Toggle heading groups</a></li>
		<li data-filtertext="responsive tables table column toggle hide rwd breakpoint customization options"><a href="http://demos.jquerymobile.com/table-column-toggle-options/" data-ajax="false">Table Column Toggle options</a></li>
		<li data-filtertext="table reflow th td responsive rwd columns tabular"><a href="http://demos.jquerymobile.com/table-reflow/" data-ajax="false">Table Reflow</a></li>
		<li data-filtertext="responsive tables table reflow heading groups rwd breakpoint"><a href="http://demos.jquerymobile.com/table-reflow-heading-groups/" data-ajax="false">Table Reflow heading groups</a></li>
		<li data-filtertext="responsive tables table reflow stripes strokes table style"><a href="http://demos.jquerymobile.com/table-reflow-stripes-strokes/" data-ajax="false">Table Reflow stripes and strokes</a></li>
		<li data-filtertext="responsive tables table reflow stack custom styles"><a href="http://demos.jquerymobile.com/table-reflow-styling/" data-ajax="false">Table Reflow custom styles</a></li>
	</ul>
</li>
<li data-filtertext="ui tabs widget"><a href="http://demos.jquerymobile.com/tabs/" data-ajax="false">Tabs widget</a></li>
<li data-filtertext="form textinput widget text input textarea number date time tel email file color password"><a href="http://demos.jquerymobile.com/textinput/" data-ajax="false">Textinput widget</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Theming</h3>
	<ul>
		<li data-filtertext="default theme swatches theming style css"><a href="http://demos.jquerymobile.com/theme-default/" data-ajax="false">Default theme</a></li>
		<li data-filtertext="classic theme old theme swatches theming style css"><a href="http://demos.jquerymobile.com/theme-classic/" data-ajax="false">Classic theme</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Toolbar widget</h3>
	<ul>
		<li data-filtertext="toolbar widget header footer toolbars fixed fullscreen external sections"><a href="http://demos.jquerymobile.com/toolbar/" data-ajax="false">Toolbar</a></li>
		<li data-filtertext="dynamic toolbars dynamically add toolbar header footer"><a href="http://demos.jquerymobile.com/toolbar-dynamic/" data-ajax="false">Dynamic toolbars</a></li>
		<li data-filtertext="external toolbars header footer"><a href="http://demos.jquerymobile.com/toolbar-external/" data-ajax="false">External toolbars</a></li>
		<li data-filtertext="fixed toolbars header footer"><a href="http://demos.jquerymobile.com/toolbar-fixed/" data-ajax="false">Fixed toolbars</a></li>
		<li data-filtertext="fixed fullscreen toolbars header footer"><a href="http://demos.jquerymobile.com/toolbar-fixed-fullscreen/" data-ajax="false">Fullscreen toolbars</a></li>
		<li data-filtertext="external fixed toolbars header footer"><a href="http://demos.jquerymobile.com/toolbar-fixed-external/" data-ajax="false">Fixed external toolbars</a></li>
		<li data-filtertext="external persistent toolbars header footer navbar navmenu"><a href="http://demos.jquerymobile.com/toolbar-fixed-persistent/" data-ajax="false">Persistent toolbars</a></li>
		<li data-filtertext="external ajax optimized toolbars persistent toolbars header footer navbar"><a href="http://demos.jquerymobile.com/toolbar-fixed-persistent-optimized/" data-ajax="false">Ajax optimized toolbars</a></li>
		<li data-filtertext="form in toolbars header footer"><a href="http://demos.jquerymobile.com/toolbar-fixed-forms/" data-ajax="false">Form in toolbar</a></li>
	</ul>
</li>
<li data-filtertext="page transitions animated pages popup navigation flip slide fade pop"><a href="http://demos.jquerymobile.com/transitions/" data-ajax="false">Transitions</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>3rd party API demos</h3>
	<ul>
		<li data-filtertext="backbone requirejs navigation router"><a href="http://demos.jquerymobile.com/backbone-requirejs/" data-ajax="false">Backbone RequireJS</a></li>
		<li data-filtertext="google maps geolocation demo"><a href="http://demos.jquerymobile.com/map-geolocation/" data-ajax="false">Google Maps geolocation</a></li>
		<li data-filtertext="google maps hybrid"><a href="http://demos.jquerymobile.com/map-list-toggle/" data-ajax="false">Google Maps list toggle</a></li>
	</ul>
</li>



		     </ul>
		</div><!-- /panel -->
	
	
		<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>jQuery Mobile Demos version <span class="jqm-version"></span></p>
		<p>Copyright 2014 The jQuery Foundation</p>
	</div><!-- /footer -->
	<!-- TODO: This should become an external panel so we can add input to markup (unique ID) -->
    <div data-role="panel" class="jqm-search-panel" data-position="right" data-display="overlay" data-theme="a">
		<div class="jqm-search">
			<ul class="jqm-list" data-filter-placeholder="Search demos..." data-filter-reveal="true">
<li data-filtertext="demos homepage" data-icon="home"><a href="http://demos.jquerymobile.com/">Home</a></li>
<li data-filtertext="introduction overview getting started"><a href="http://demos.jquerymobile.com/intro/" data-ajax="false">Introduction</a></li>
<li data-filtertext="buttons button markup buttonmarkup method anchor link button element"><a href="http://demos.jquerymobile.com/button-markup/" data-ajax="false">Buttons</a></li>
<li data-filtertext="form button widget input button submit reset"><a href="http://demos.jquerymobile.com/button/" data-ajax="false">Button widget</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Checkboxradio widget</h3>
	<ul>
		<li data-filtertext="form checkboxradio widget checkbox input checkboxes controlgroups"><a href="http://demos.jquerymobile.com/checkboxradio-checkbox/" data-ajax="false">Checkboxes</a></li>
		<li data-filtertext="form checkboxradio widget radio input radio buttons controlgroups"><a href="http://demos.jquerymobile.com/checkboxradio-radio/" data-ajax="false">Radio buttons</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Collapsible (set) widget</h3>
	<ul>
		<li data-filtertext="collapsibles content formatting"><a href="http://demos.jquerymobile.com/collapsible/" data-ajax="false">Collapsible</a></li>
		<li data-filtertext="dynamic collapsible set accordion append expand"><a href="http://demos.jquerymobile.com/collapsible-dynamic/" data-ajax="false">Dynamic collapsibles</a></li>
		<li data-filtertext="accordions collapsible set widget content formatting grouped collapsibles"><a href="http://demos.jquerymobile.com/collapsibleset/" data-ajax="false">Collapsible set</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Controlgroup widget</h3>
	<ul>
		<li data-filtertext="controlgroups selectmenu checkboxradio input grouped buttons horizontal vertical"><a href="http://demos.jquerymobile.com/controlgroup/" data-ajax="false">Controlgroup</a></li>
		<li data-filtertext="dynamic controlgroup dynamically add buttons"><a href="http://demos.jquerymobile.com/controlgroup-dynamic/" data-ajax="false">Dynamic controlgroups</a></li>
	</ul>
</li>
<li data-filtertext="form datepicker widget date input"><a href="http://demos.jquerymobile.com/datepicker/" data-ajax="false">Datepicker</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Events</h3>
	<ul>
		<li data-filtertext="swipe to delete list items listviews swipe events"><a href="http://demos.jquerymobile.com/swipe-list/" data-ajax="false">Swipe list items</a></li>
		<li data-filtertext="swipe to navigate swipe page navigation swipe events"><a href="http://demos.jquerymobile.com/swipe-page/" data-ajax="false">Swipe page navigation</a></li>
	</ul>
</li>
<li data-filtertext="filterable filter elements sorting searching listview table"><a href="http://demos.jquerymobile.com/filterable/" data-ajax="false">Filterable widget</a></li>
<li data-filtertext="form flipswitch widget flip toggle switch binary select checkbox input"><a href="http://demos.jquerymobile.com/flipswitch/" data-ajax="false">Flipswitch widget</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Forms</h3>
	<ul>
		<li data-filtertext="forms text checkbox radio range button submit reset inputs selects textarea slider flipswitch label form elements"><a href="http://demos.jquerymobile.com/forms/" data-ajax="false">Forms</a></li>
		<li data-filtertext="form hide labels hidden accessible ui-hidden-accessible forms"><a href="http://demos.jquerymobile.com/forms-label-hidden-accessible/" data-ajax="false">Hide labels</a></li>
		<li data-filtertext="form field containers fieldcontain ui-field-contain forms"><a href="http://demos.jquerymobile.com/forms-field-contain/" data-ajax="false">Field containers</a></li>
		<li data-filtertext="forms disabled form elements"><a href="http://demos.jquerymobile.com/forms-disabled/" data-ajax="false">Forms disabled</a></li>
		<li data-filtertext="forms gallery examples overview forms text checkbox radio range button submit reset inputs selects textarea slider flipswitch label form elements"><a href="http://demos.jquerymobile.com/forms-gallery/" data-ajax="false">Forms gallery</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Grids</h3>
	<ul>
		<li data-filtertext="grids columns blocks content formatting rwd responsive css framework"><a href="http://demos.jquerymobile.com/grids/" data-ajax="false">Grids</a></li>
		<li data-filtertext="buttons in grids css framework"><a href="http://demos.jquerymobile.com/grids-buttons/" data-ajax="false">Buttons in grids</a></li>
		<li data-filtertext="custom responsive grids rwd css framework"><a href="http://demos.jquerymobile.com/grids-custom-responsive/" data-ajax="false">Custom responsive grids</a></li>
	</ul>
</li>
<li data-filtertext="blocks content formatting sections heading"><a href="http://demos.jquerymobile.com/body-bar-classes/" data-ajax="false">Grouping and dividing content</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Icons</h3>
	<ul>
		<li data-filtertext="button icons svg disc alt custom icon position"><a href="http://demos.jquerymobile.com/icons/" data-ajax="false">Icons</a></li>
		<li data-filtertext=""><a href="http://demos.jquerymobile.com/icons-grunticon/" data-ajax="false">Grunticon loader</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Listview widget</h3>
	<ul>
		<li data-filtertext="listview widget thumbnails icons nested split button collapsible ul ol"><a href="http://demos.jquerymobile.com/listview/" data-ajax="false">Listview</a></li>
		<li data-filtertext="autocomplete filterable reveal listview filtertextbeforefilter placeholder"><a href="http://demos.jquerymobile.com/listview-autocomplete/" data-ajax="false">Listview autocomplete</a></li>
		<li data-filtertext="autocomplete filterable reveal listview remote data filtertextbeforefilter placeholder"><a href="http://demos.jquerymobile.com/listview-autocomplete-remote/" data-ajax="false">Listview autocomplete remote data</a></li>
		<li data-filtertext="autodividers anchor jump scroll linkbars listview lists ul ol"><a href="http://demos.jquerymobile.com/listview-autodividers-linkbar/" data-ajax="false">Listview autodividers linkbar</a></li>
		<li data-filtertext="listview autodividers selector autodividersselector lists ul ol"><a href="http://demos.jquerymobile.com/listview-autodividers-selector/" data-ajax="false">Listview autodividers selector</a></li>
		<li data-filtertext="listview nested list items"><a href="http://demos.jquerymobile.com/listview-nested-lists/" data-ajax="false">Listview Nested Listviews</a></li>
		<li data-filtertext="listview collapsible list items flat"><a href="http://demos.jquerymobile.com/listview-collapsible-item-flat/" data-ajax="false">Listview collapsible list items (flat)</a></li>
		<li data-filtertext="listview collapsible list indented"><a href="http://demos.jquerymobile.com/listview-collapsible-item-indented/" data-ajax="false">Listview collapsible list items (indented)</a></li>
		<li data-filtertext="grid listview responsive grids responsive listviews lists ul"><a href="http://demos.jquerymobile.com/listview-grid/" data-ajax="false">Listview responsive grid</a></li>
	</ul>
</li>
<li data-filtertext="loader widget page loading navigation overlay spinner"><a href="http://demos.jquerymobile.com/loader/" data-ajax="false">Loader widget</a></li>
<li data-filtertext="navbar widget navmenu toolbars header footer"><a href="http://demos.jquerymobile.com/navbar/" data-ajax="false">Navbar widget</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Navigation</h3>
	<ul>
		<li data-filtertext="ajax navigation navigate widget history event method"><a href="http://demos.jquerymobile.com/navigation/" data-ajax="false">Navigation</a></li>
		<li data-filtertext="linking pages page links navigation ajax prefetch cache"><a href="http://demos.jquerymobile.com/navigation-linking-pages/" data-ajax="false">Linking pages</a></li>
		<li data-filtertext="php redirect server redirection server-side navigation"><a href="http://demos.jquerymobile.com/navigation-php-redirect/" data-ajax="false">PHP redirect demo</a></li>
		<li data-filtertext="navigation redirection hash query"><a href="http://demos.jquerymobile.com/navigation-hash-processing/" data-ajax="false">Hash processing demo</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Pages</h3>
	<ul>
		<li data-filtertext="pages page widget ajax navigation"><a href="http://demos.jquerymobile.com/pages/" data-ajax="false">Pages</a></li>
		<li data-filtertext="single page"><a href="http://demos.jquerymobile.com/pages-single-page/" data-ajax="false">Single page</a></li>
		<li data-filtertext="multipage multi-page page"><a href="http://demos.jquerymobile.com/pages-multi-page/" data-ajax="false">Multi-page template</a></li>
		<li data-filtertext="dialog page widget modal popup"><a href="http://demos.jquerymobile.com/pages-dialog/" data-ajax="false">Dialog page</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Panel widget</h3>
	<ul>
		<li data-filtertext="panel widget sliding panels reveal push overlay responsive"><a href="http://demos.jquerymobile.com/panel/" data-ajax="false">Panel</a></li>
		<li data-filtertext=""><a href="http://demos.jquerymobile.com/panel-external/" data-ajax="false">External panels</a></li>
		<li data-filtertext="panel "><a href="http://demos.jquerymobile.com/panel-fixed/" data-ajax="false">Fixed panels</a></li>
		<li data-filtertext="panel slide panels sliding panels shadow rwd responsive breakpoint"><a href="http://demos.jquerymobile.com/panel-responsive/" data-ajax="false">Panels responsive</a></li>
		<li data-filtertext="panel custom style custom panel width reveal shadow listview panel styling page background wrapper"><a href="http://demos.jquerymobile.com/panel-styling/" data-ajax="false">Custom panel style</a></li>
		<li data-filtertext="panel open on swipe"><a href="http://demos.jquerymobile.com/panel-swipe-open/" data-ajax="false">Panel open on swipe</a></li>
		<li data-filtertext="panels outside page internal external toolbars"><a href="http://demos.jquerymobile.com/panel-external-internal/" data-ajax="false">Panel external and internal</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Popup widget</h3>
	<ul>
		<li data-filtertext="popup widget popups dialog modal transition tooltip lightbox form overlay screen flip pop fade transition"><a href="http://demos.jquerymobile.com/popup/" data-ajax="false">Popup</a></li>
		<li data-filtertext="popup alignment position"><a href="http://demos.jquerymobile.com/popup-alignment/" data-ajax="false">Popup alignment</a></li>
		<li data-filtertext="popup arrow size popups popover"><a href="http://demos.jquerymobile.com/popup-arrow-size/" data-ajax="false">Popup arrow size</a></li>
		<li data-filtertext="dynamic popups popup images lightbox"><a href="http://demos.jquerymobile.com/popup-dynamic/" data-ajax="false">Dynamic popups</a></li>
		<li data-filtertext="popups with iframes scaling"><a href="http://demos.jquerymobile.com/popup-iframe/" data-ajax="false">Popups with iframes</a></li>
		<li data-filtertext="popup image scaling"><a href="http://demos.jquerymobile.com/popup-image-scaling/" data-ajax="false">Popup image scaling</a></li>
		<li data-filtertext="external popup outside multi-page"><a href="http://demos.jquerymobile.com/popup-outside-multipage" data-ajax="false">Popup outside multi-page</a></li>
	</ul>
</li>
<li data-filtertext="form rangeslider widget dual sliders dual handle sliders range input"><a href="http://demos.jquerymobile.com/rangeslider/" data-ajax="false">Rangeslider widget</a></li>
<li data-filtertext="responsive web design rwd adaptive progressive enhancement PE accessible mobile breakpoints media query media queries"><a href="http://demos.jquerymobile.com/rwd/" data-ajax="false">Responsive Web Design</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Selectmenu widget</h3>
	<ul>
		<li data-filtertext="form selectmenu widget select input custom select menu selects"><a href="http://demos.jquerymobile.com/selectmenu/" data-ajax="false">Selectmenu</a></li>
		<li data-filtertext="form custom select menu selectmenu widget custom menu option optgroup multiple selects"><a href="http://demos.jquerymobile.com/selectmenu-custom/" data-ajax="false">Custom select menu</a></li>
		<li data-filtertext="filterable select filter popup dialog"><a href="http://demos.jquerymobile.com/selectmenu-custom-filter/" data-ajax="false">Custom select menu with filter</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Slider widget</h3>
	<ul>
		<li data-filtertext="form slider widget range input single sliders"><a href="http://demos.jquerymobile.com/slider/" data-ajax="false">Slider</a></li>
		<li data-filtertext="form slider widget flipswitch slider binary select flip toggle switch"><a href="http://demos.jquerymobile.com/slider-flipswitch/" data-ajax="false">Slider flip toggle switch</a></li>
		<li data-filtertext="form slider tooltip handle value input range sliders"><a href="http://demos.jquerymobile.com/slider-tooltip/" data-ajax="false">Slider tooltip</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Table widget</h3>
	<ul>
		<li data-filtertext="table widget reflow column toggle th td responsive tables rwd hide show tabular"><a href="http://demos.jquerymobile.com/table-column-toggle/" data-ajax="false">Table Column Toggle</a></li>
		<li data-filtertext="table column toggle phone comparison demo"><a href="http://demos.jquerymobile.com/table-column-toggle-example/" data-ajax="false">Table Column Toggle demo</a></li>
		<li data-filtertext="responsive tables table column toggle heading groups rwd breakpoint"><a href="http://demos.jquerymobile.com/table-column-toggle-heading-groups/" data-ajax="false">Table Column Toggle heading groups</a></li>
		<li data-filtertext="responsive tables table column toggle hide rwd breakpoint customization options"><a href="http://demos.jquerymobile.com/table-column-toggle-options/" data-ajax="false">Table Column Toggle options</a></li>
		<li data-filtertext="table reflow th td responsive rwd columns tabular"><a href="http://demos.jquerymobile.com/table-reflow/" data-ajax="false">Table Reflow</a></li>
		<li data-filtertext="responsive tables table reflow heading groups rwd breakpoint"><a href="http://demos.jquerymobile.com/table-reflow-heading-groups/" data-ajax="false">Table Reflow heading groups</a></li>
		<li data-filtertext="responsive tables table reflow stripes strokes table style"><a href="http://demos.jquerymobile.com/table-reflow-stripes-strokes/" data-ajax="false">Table Reflow stripes and strokes</a></li>
		<li data-filtertext="responsive tables table reflow stack custom styles"><a href="http://demos.jquerymobile.com/table-reflow-styling/" data-ajax="false">Table Reflow custom styles</a></li>
	</ul>
</li>
<li data-filtertext="ui tabs widget"><a href="http://demos.jquerymobile.com/tabs/" data-ajax="false">Tabs widget</a></li>
<li data-filtertext="form textinput widget text input textarea number date time tel email file color password"><a href="http://demos.jquerymobile.com/textinput/" data-ajax="false">Textinput widget</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Theming</h3>
	<ul>
		<li data-filtertext="default theme swatches theming style css"><a href="http://demos.jquerymobile.com/theme-default/" data-ajax="false">Default theme</a></li>
		<li data-filtertext="classic theme old theme swatches theming style css"><a href="http://demos.jquerymobile.com/theme-classic/" data-ajax="false">Classic theme</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Toolbar widget</h3>
	<ul>
		<li data-filtertext="toolbar widget header footer toolbars fixed fullscreen external sections"><a href="http://demos.jquerymobile.com/toolbar/" data-ajax="false">Toolbar</a></li>
		<li data-filtertext="dynamic toolbars dynamically add toolbar header footer"><a href="http://demos.jquerymobile.com/toolbar-dynamic/" data-ajax="false">Dynamic toolbars</a></li>
		<li data-filtertext="external toolbars header footer"><a href="http://demos.jquerymobile.com/toolbar-external/" data-ajax="false">External toolbars</a></li>
		<li data-filtertext="fixed toolbars header footer"><a href="http://demos.jquerymobile.com/toolbar-fixed/" data-ajax="false">Fixed toolbars</a></li>
		<li data-filtertext="fixed fullscreen toolbars header footer"><a href="http://demos.jquerymobile.com/toolbar-fixed-fullscreen/" data-ajax="false">Fullscreen toolbars</a></li>
		<li data-filtertext="external fixed toolbars header footer"><a href="http://demos.jquerymobile.com/toolbar-fixed-external/" data-ajax="false">Fixed external toolbars</a></li>
		<li data-filtertext="external persistent toolbars header footer navbar navmenu"><a href="http://demos.jquerymobile.com/toolbar-fixed-persistent/" data-ajax="false">Persistent toolbars</a></li>
		<li data-filtertext="external ajax optimized toolbars persistent toolbars header footer navbar"><a href="http://demos.jquerymobile.com/toolbar-fixed-persistent-optimized/" data-ajax="false">Ajax optimized toolbars</a></li>
		<li data-filtertext="form in toolbars header footer"><a href="http://demos.jquerymobile.com/toolbar-fixed-forms/" data-ajax="false">Form in toolbar</a></li>
	</ul>
</li>
<li data-filtertext="page transitions animated pages popup navigation flip slide fade pop"><a href="http://demos.jquerymobile.com/transitions/" data-ajax="false">Transitions</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>3rd party API demos</h3>
	<ul>
		<li data-filtertext="backbone requirejs navigation router"><a href="http://demos.jquerymobile.com/backbone-requirejs/" data-ajax="false">Backbone RequireJS</a></li>
		<li data-filtertext="google maps geolocation demo"><a href="http://demos.jquerymobile.com/map-geolocation/" data-ajax="false">Google Maps geolocation</a></li>
		<li data-filtertext="google maps hybrid"><a href="http://demos.jquerymobile.com/map-list-toggle/" data-ajax="false">Google Maps list toggle</a></li>
	</ul>
</li>



			</ul>
		</div>
	</div><!-- /panel -->
	
	
	</div>


	
	
	
	
</body>

<!-- Mirrored from demos.jquerymobile.com/1.4.2/ by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 10 Mar 2014 08:14:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
</html>
