<?php

Assets::add_js("


    $( document ).on( 'click', '#registrasi', function() {
    
    $.mobile.loading('show');
    
    $.ajax({
        dataType: 'json',
        url: '".site_url("/ujian/registrasi/".$this->uri->segment(3))."', 
        success: function(result){
        $('#result').html(result.message);
        if(result.status==0){
            $('#startujian').removeAttr('disabled');
        }
        $('#registrasi').hide();
    }}
    ).always(function () {
      $.mobile.loading('hide');
    });
  });

","inline");
?>
<h3><?php echo strtoupper($query->judul_ujian);?></h3>
<p><?php echo $query->keterangan;?></p>
<br />	
<ul data-role="listview">
    <li><?php echo $this->ujian_model->getField()->nilai_kelulusan;?> : <?php echo $query->nilai_kelulusan;?> %</li>
    <li><?php echo $this->ujian_model->getField()->durasi_waktu;?> : <?php echo $query->durasi_waktu;?> Menit</li>
    <li><?php echo $this->ujian_model->getField()->jumlah_soal;?> : <?php echo $query->jumlah_soal;?></li>
    <li><?php echo $this->ujian_model->getField()->pembayaran;?> : <?php echo formatUang($query->pembayaran);?></li>
</ul>
   
 <br /><br />
<div id="result"></div>

<?php 
// if the user is not logged in continue to show the login page
if ($this->auth->is_logged_in() === TRUE)
{

?>

<?php if($this->registrasi_model->checkRegistrasi($this->auth->user_id(),$this->uri->segment(3))==FALSE): ?>
<button class="btn btn-warning" data-loading-text="Loading..." id="registrasi">Registrasi</button>
<?php else: ?>
    <?php if($query->pembayaran<>0 && $this->registrasi_model->checkPembayaran($this->auth->user_id(),$this->uri->segment(3))==FALSE): ?>

<div class="alert alert-info">Silakan untuk melakukan pembayaran agar 
tombol start ujian aktif setelah melakukan pembayaran lakukan konfirmasi pembayaran 
<a href="<?php echo site_url("/konfirmasi-pembayaran");?>">disini</a>
agar kami bisa memproses pembayaran anda.</div>

    <?php endif; ?>
<?Php endif; ?>


<a href="<?php echo site_url("/ujian/startujian/".$this->uri->segment(3));?>" 
   <?php if($this->registrasi_model->checkPembayaran($this->auth->user_id(),$this->uri->segment(3))==FALSE): ?>
   disabled="disabled" 
   <?php endif; ?>
   id="startujian"
   class="ui-btn">Start</a>

<?php }else{ ?>
<div class="alert alert-info">Untuk memulai ujian silakan untuk mendaftar <a href="<?php echo site_url("/registrasi");?>">disini</a> atau jika anda 
    sudah mempunyai akun silakan untuk login terlebih dahulu <a href="<?php echo site_url("/login");?>">disini</a></div>

<?php } ?>





