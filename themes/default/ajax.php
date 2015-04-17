<?php echo theme_view('_mobile_header'); ?>

<div data-role="page" data-theme="a" data-dom-cache="true">
     <div data-theme="b" data-role="header">
        <a href="#ujian" class="ui-btn ui-btn-left ui-btn-icon-notext ui-icon-back ui-corner-all ui-btn-b" data-transition="slide" data-direction="reverse">Kembali</a>                        
        <h3>
           <?php echo isset($page_title)?$page_title:"MedinaTryout";?>
        </h3>
    </div>        
    <div data-role="content">
<?php
echo isset($content) ? $content : Template::content();
?>
  
</div>
</div>
 <?php echo theme_view('kontent'); ?>

<?php echo theme_view('_mobile_footer'); ?>