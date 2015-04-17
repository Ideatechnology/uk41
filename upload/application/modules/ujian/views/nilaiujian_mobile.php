 <?php 
  Assets::add_js("
           $(document).ready(function(){	
      
           $('#share').html('Loading..').load('".site_url("/ujian/getShare")."');
         
                 
        });
      ","inline");
          ?>

<center>
<div class="text-center">
<h3><?php echo $status; ?></h3> 
<?php echo $icon; ?>
<h4>Dengan Score : <?php echo $hasil_ujian->score;?></h4>
<a href="#ujian" data-msgtext="Loading ..." data-textvisible="true" class='ui-btn'  data-id="<?php echo $ujian->kode_ujian;?>" class="ui-btn" data-transition="slide" data-direction="reverse">Kembali Menu Tryout</a> 
</div>
</center>


<ul data-role="listview" data-count-theme="b" data-inset="true">
<li><a href="#">Jawaban Benar<span class="ui-li-count"><?php echo $hasil_ujian->total_benar;?></span></a></li>
<li><a href="#"> Jawaban Salah<span class="ui-li-count"><?php echo $hasil_ujian->total_salah;?></span></a></li>
<li><a href="#"> Total Tidak Di Jawab<span class="ui-li-count"><?php echo $hasil_ujian->total_tidak_dijawab;?></span></a></li>
<li><a href="#"> Prosentase Kelulusan<span class="ui-li-count"><?php echo $ujian->nilai_kelulusan;?></span></a></li>

</ul>



<br />

<div id="share"></div>
