 <?php 
  Assets::add_js("
           $(document).ready(function(){	
      
           $('#share').html('Loading..').load('".site_url("/ujian/getShare")."');
         
            $('#content-twitter').html('Loading..').load('".site_url("/ujian/getTwitter")."');
      
            
        });
      ","inline");
          ?>

<?php echo Template::message(); ?>

<!-- main col right -->
<div class="col-sm-7">
     
    <?php if(isset($query)){ ?>
    <?php foreach($query as $row): ?>
     <div class="panel panel-default" style="cursor:pointer" onclick="window.location='<?php echo site_url("ujian/detailujian/".$row["kode_ujian"]);?>'">
       <div class="panel-heading">
      
        <h4>
        <?php echo $row["judul_ujian"];?></h4></div>
        <div class="panel-body">
         <?php 
         echo $this->ujian_model->cekFreePrice($row["pembayaran"]);?>
         
            <p><small><span class="glyphicon glyphicon-calendar"></span> Tanggal Buat : <?php echo tgl_indo(date("Y-m-d",strtotime($row["created_on"])));?> - Jam <?php echo date("H:i",strtotime($row["created_on"]));?> Wib</small></p>
          
          <p><?php echo $row["keterangan"];?></p>
        
      
        </div>
     </div>
    <?php endforeach; ?>
    <?php } ?>
     
         
  <?php
	echo $this->pagination->create_links();
	?>
  
  
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
