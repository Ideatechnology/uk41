<div data-role="panel" id="panel-overlay" data-position="left" data-display="overlay">
<ul data-role="listview" style="margin-bottom:18px;">
<li><a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-icon-left ui-icon-bars">Menu Aplikasi</a></li>
<!--<li><a id="link_pembayaran" data-id="<?php echo site_url("pages/detail/51-cara-pembayaran");?>?type=ajax"> Cara Pembayaran</a></li>
-->
<li><a data-transition="slide" data-direction="reverse" id="link_peringkat" href="#peringkat" data-id="<?php echo site_url('/member/peringkat'); ?>">Peringkat Nilai</a></li>
<li><a data-transition="slide" data-direction="reverse" id="link_member" href="#member" data-id="<?php echo site_url('/member'); ?>" >Member </a></li>
    <?php if ($this->auth->is_logged_in() === TRUE){
?>
<li><a href="<?php echo site_url('/users/profile/sunting'); ?>" >Profil Anda </a></li>
<li><a href="<?php echo site_url('/users/changepassword'); ?>">Ganti Password</a></li>

<li><a href="<?php echo site_url('/logout') ?>" data-ajax="false">Keluar</a></li>
<?php } ?>
</ul>
</div>  


<div data-role="panel" id="panel-overlay-search" data-position="right" data-display="overlay">
<?php $this->load->view("widget/kontak_mobile"); ?>    
</div>