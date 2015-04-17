
                          
<!-- main col left --> 
<div class="col-sm-5">
 
    <div class="panel panel-default">
       <div class="panel-body">
        <p class="lead"><?php echo ucfirst($current_user->display_name);?></p>
        <p><?php echo $ikuti_ujain;?> Mengikuti Ujian </p>
        
       
      </div>
    </div>

 
    <div class="panel panel-default">
      <div class="panel-heading"><a href="<?php echo site_url("/users/profile/sunting");?>" class="pull-right">Sunting</a> <h4>Almamater Anda</h4></div>
        <div class="panel-body">
          
            <p class="text-center"><?php echo $universitas->universitas;?><br /><br />
            <?php if($universitas->gambar!=""): ?>
                <img style="width:90px;height:90px;" src="<?php echo base_url("application/modules/member/images/".$universitas->gambar);?>" >
            <?php endif; ?>
            </p>  
            
        </div>
    </div>
 

 
      
 
</div>

<!-- main col right -->
<div class="col-sm-7">
     
     <div class="well"> 
          <h4>UJIAN YANG SUDAH DIIKUTI</h4>
          </div>
     
    <?php 
           foreach($list_ukuti_ujian as $row):
           ?>
   <div class="panel panel-default">
       <div class="panel-heading">
      
        <h4>
        <?php echo $row["judul_ujian"];?></h4></div>
        <div class="panel-body">
         <?php 
         echo $this->ujian_model->cekFreePrice($row["pembayaran"]);?>
         
            <p><small><span class="glyphicon glyphicon-calendar"></span> Tanggal Buat : <?php echo tgl_indo(date("Y-m-d",strtotime($row["created_on"])));?> - Jam <?php echo date("H:i",strtotime($row["created_on"]));?> Wib</small></p>
          
          <p><?php echo $row["keterangan"];?></p>
        <hr />
           <a href="<?php echo site_url("ujian/detailujian/".$row["kode_ujian"]);?>" class="btn btn-warning"><small>Lihat Detail</small></a>
     
         
      
        </div>
     </div>
    <?php endforeach; ?>
  
  
</div>
