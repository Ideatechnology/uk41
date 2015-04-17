
<div class="panel panel-default">
  <div class="panel-heading">Pilihan</div>
  <div class="panel-body">
    
      <ul class="list-group">
  <?php foreach($ujian as $row_ujian){ ?>
   <li class="list-group-item">
    <span class="badge"><?php echo $row_ujian->jumlah;?></span>
     <a href="<?php echo site_url(SITE_AREA.'/content/ujian/registration/'.$row_ujian->kode_ujian);?>">
    <?php echo $row_ujian->judul_ujian;?>
    </a>
  </li>
  <?php } ?>
</ul>
      
      
  </div>
</div>