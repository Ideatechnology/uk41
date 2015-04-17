<!-- data ujian -->
<div data-role="page" id="ujian" data-theme="a" data-dom-cache="true">

<?php  echo theme_view('_mobile_panel'); ?>
       
<div data-role="header" data-theme="b" data-position="inline">
<h1><?php if (class_exists('Settings_lib')) e(settings_item('site.title')); else echo 'Medinatryout'; ?></h1>
<a href="#panel-overlay-search" class="ui-btn ui-icon-phone ui-btn-icon-notext ui-corner-all  ui-btn-b">No text</a>
<a href="#panel-overlay" class="ui-btn ui-btn-right ui-btn-icon-notext ui-icon-bars ui-corner-all ui-btn-b">MENU</a>

<div data-role="navbar" data-theme="a">
<ul>
<?php if ($this->auth->is_logged_in() === TRUE) { ?>
<li><a data-transition="slide" data-direction="reverse" id="link_peringkat" href="#peringkat" data-id="<?php echo site_url('/member/peringkat'); ?>" class="ui-btn ui-btn-a">Peringkat Nilai</a></li>
<li><a data-transition="slide" data-direction="reverse" id="link_member" href="#member" data-id="<?php echo site_url('/member'); ?>" class="ui-btn ui-btn-a">Member </a></li>
<?php }else{ ?>
<li><a href="<?php echo site_url('/login') ?>"  class="ui-btn ui-btn-a">Login</a></li>
<li><a href="<?php echo site_url('/register') ?>" class="ui-btn ui-btn-a">Register</a></li>
<?php } ?>
                  
</ul>
</div>  
</div> 
<div data-role="content" data-theme="a" >

    <ul data-role="listview"  id="ujian-list" data-filter="true" data-theme="a">
    </ul>
</div>
</div>
    

<!-- detail ujian -->
 <div data-role="page" id="detailujian" data-dom-cache="true">
    <div data-theme="b" data-role="header">
        <a href="#ujian" class="ui-btn ui-btn-left ui-btn-icon-notext ui-icon-back ui-corner-all ui-btn-b" data-transition="slide" data-direction="reverse">Kembali</a>                        
        <h3>
            Info Ujian
        </h3>
    </div>        
    <div data-role="content">
        <ul data-role="listview"  id="ujian-data" data-theme="a">
        </ul>
        <br /><br />
        
        <div id="buttonstart" style="display:none">
            <a href='#' id='link_startujian' data-msgtext="Loading ..." data-textvisible="true" class='ui-btn'>Start</a>
        </div>
        
        <div class="alert alert-info" id="message" style="display:none"></div>
        
    </div>
</div>    