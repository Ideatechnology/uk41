<?php

Assets::add_js("
$(document).ready(function(){

 $('#share').html('Loading..').load('".site_url("/ujian/getShare")."');
         
            $('#content-twitter').html('Loading..').load('".site_url("/ujian/getTwitter")."');
      

  $('#registrasi').click(function () {
    var btn = $(this)
    btn.button('loading')
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
      btn.button('reset')
    });
  });
  });
  ","inline");
?>

<style>
    th{
        width:50%
    }
</style>

<div class="col-sm-7">
    
         <div class="panel panel-default">
       <div class="panel-heading">
    
           
           <h1><?php echo strtoupper($query->judul_ujian);?></h1>
<p><?php echo $query->keterangan;?></p>
       </div>
<div class="panel-body">
    <p>Total Score : <?php echo $score;?></p>    

<div id="result"></div>


<?php 
// if the user is not logged in continue to show the login page
if ($this->auth->is_logged_in() === TRUE)
{

 $link=true;
 
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

<!--
<a  href="<?php echo site_url("/ujian/startujian/".$this->uri->segment(3));?>" 
   <?php if($this->registrasi_model->checkPembayaran($this->auth->user_id(),$this->uri->segment(3))==FALSE): ?>
   disabled="disabled" 
   <?php endif; ?>
   id="startujian"
   class="btn btn-primary">Start</a>
-->
<?php }else{ 
 
 $link=false;
 
    ?>
<div class="alert alert-info">Untuk memulai ujian silakan untuk mendaftar <a href="<?php echo site_url("/register");?>">disini</a> atau jika anda 
    sudah mempunyai akun silakan untuk login terlebih dahulu <a href="<?php echo site_url("/login");?>">disini</a></div>

<?php } ?>

<div class="bs-glyphicons">
<ul class="bs-glyphicons-list">
 <?php 
 $no2=1;
  $disabled=0;
  $cek=0;
foreach($query2 as $row2): 
    
     $hasil_ujian = $this->hasil_ujian_model->getHasilUjian($this->auth->user_id(),$row2["kode_ujian"]);
     $cek = $this->hasil_ujian_model->countIkutiUjianMobileUrutan($this->auth->user_id(),$row2["kode_ujian"]);
           
      
    if($link==true){
        if($row2["urutan"]==1){
                   $click= "window.location='".site_url("/ujian/startujian/".$row2["kode_ujian"])."'"; 
    $pointer = "cursor:pointer";
   $graygambar = "quiz.png";
                  $no2=$cek+1;
                  
              }else{
                  
                   if($row2["urutan"]==$cek){
                       $click= "window.location='".site_url("/ujian/startujian/".$row2["kode_ujian"])."'"; 
    $pointer = "cursor:pointer";
   $graygambar = "quiz.png";
                     $no2=$row2["urutan"]+1;
                   }else{
                       if($row2["urutan"]==$no2){
                       $click= "window.location='".site_url("/ujian/startujian/".$row2["kode_ujian"])."'"; 
    $pointer = "cursor:pointer";
   $graygambar = "quizmerah.png";
                       }else{
                         $graygambar = "quiz_gray.png";
    $click= ""; 
    $pointer = "";
                       }
                           
                   }
                  
                  
              }
     
     
  
   
    }else{
    
     $graygambar = "quiz_gray.png";
    $click= ""; 
    $pointer = "";
        
    }
    
    $hasil_ujian_2 = @$hasil_ujian->total_benar?$hasil_ujian->total_benar:0;
    ?>  
    
    <li onclick="<?php echo $click;?>" style="<?php echo $pointer;?>">
            
        <img src="<?php echo Template::theme_url("images/".$graygambar);?>" style="width:64px;">
          <span class="glyphicon-class"><?php echo $row2["judul_ujian"];?></span>
          <?php echo $hasil_ujian_2;?>/<?php echo $row2["jumlah_soal"];?>
        </li>
   <?php endforeach; ?>   
       
      
    </ul>
</div>








</div>
</div>
</div>                     
<!-- main col left --> 
<div class="col-sm-5">
        

<div class="panel panel-default">
        <div class="panel-heading">Bagikan Ke Teman Anda :</div>
       <div class="panel-body">
 
           
         
    
      <div id='share'></div>
          
        	


           
      </div>
    </div>

 
            
      <div id="content-twitter"></div>
            
      <?php $this->load->view("widget/kontak",array("sosmed"=>$sosmed)); ?>
           
   
 
</div>


