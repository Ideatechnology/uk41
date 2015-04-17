 <?php 
  Assets::add_js("
           $(document).ready(function(){	
      
           $('#share').html('Loading..').load('".site_url("/ujian/getShare")."');
         
                 
        });
      ","inline");
          ?>
<div class="panel panel-default">
       <div class="panel-heading">
      
        <h4>Hasil Ujian Anda</h4></div>
        <div class="panel-body">
            
<div class="row"> 
     
 <div class="col-sm-5">         

    
  
        <ul class="nav nav-pills nav-stacked" style="max-width: 260px;">
      <li>
        <a href="#">
          <span class="badge pull-right"><?php echo $hasil_ujian->total_benar;?></span>
          Jawaban Benar
        </a>
      </li>
      <li>
        <a href="#">
          <span class="badge pull-right"><?php echo $hasil_ujian->total_salah;?></span>
          Jawaban Salah
        </a>
      </li>
        <li>
        <a href="#">
          <span class="badge pull-right"><?php echo $hasil_ujian->total_tidak_dijawab;?></span>
          Total Tidak Di Jawab
        </a>
      </li>
      <li>
        <a href="#">
          <span class="badge pull-right"><?php echo $ujian->nilai_kelulusan;?></span>
          Prosentase Kelulusan
        </a>
      </li>
    </ul>

            <br />
        <div class='section' style="margin-left:10px;">    
           
            <div id="share"></div>
        </div> 

    
     
     
 </div>
 <div class="col-sm-6">     
 
    
            <div class="text-center">
                <h2><?php echo $status; ?></h2> 
            <?php echo $icon; ?>
            <h4>Dengan Score : <?php echo $hasil_ujian->score;?></h4>
            <a href="<?php echo site_url("/ujian/startujian/".$ujian->kode_ujian);?>" class="btn btn-primary">Coba Lagi</a>
            </div>
            
    
 </div>
 </div>    

    </div>
     </div>