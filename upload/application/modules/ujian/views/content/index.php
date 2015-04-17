
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
        <div class="col-lg-4">
       <div class="pull-left">
       <form id="form1" name="form1" method="get" action="">
      <div class="input-group">
      <input type="text" name="filter" value="<?php echo $this->input->get("filter");?>" class="form-control" placeholder="Pencarian">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Cari</button>
      </span>
    </div><!-- /input-group -->
    </form>
    </div>
	</div>
      <ul class="nav nav-pills pull-right">
  		<li role="presentation"><a href="#">Jumlah Total : <?php echo $total;?></a></li>
        <li role="presentation"><a href="#">Jumlah Publish : <?php echo $totalpublish;?></a></li>
        <li role="presentation"><a href="#">Jumlah Draft : <?php echo $totaldraft;?></a></li>
		</ul>
  <div style="clear:both"></div>
  </div>
  <?php echo form_open($this->uri->uri_string()); ?>  
  <table  class="table table-bordered" >
   
    <tr>
      <th class="column-check"><input class="check-all" type="checkbox" /></th>
      <th>No</th>				
      <th><?php echo $this->ujian_model->getField()->judul_ujian;?></th>
       <th><?php echo $this->ujian_model->getField()->nilai_kelulusan;?></th>
        <th><?php echo $this->ujian_model->getField()->durasi_waktu;?></th>
         <th><?php echo $this->ujian_model->getField()->pembayaran;?></th>
         <th><?php echo $this->ujian_model->getField()->jumlah_soal;?></th>
      <th><?php echo $this->ujian_model->getField()->is_active;?></th>
     
     </tr>
    <?php 
        
	foreach($query as $row){
	?>
     <tr style="background:#9acfea">
    <td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $row["kode_ujian"]; ?>" /></td>
	<td></td>				 
        <td><?php echo anchor(SITE_AREA."/content/ujian/view/".$row["kode_ujian"],$row["judul_ujian"]);?></td>
     <td><?php echo $row["nilai_kelulusan"];?> %</td>
     <td><?php echo $row["durasi_waktu"];?> Menit</td>
     <td><?php echo formatUang($row["pembayaran"]);?></td>
     <td><?php echo $row["jumlah_soal"];?></td>
      <td><?php echo $this->ujian_model->statusActive($row["is_active"]);?> 
      
      </td>
      </tr>
      
      <?php foreach($this->ujian_model->getDataAll($row["kode_ujian"]) as $detail): ?>
       <tr>
    <td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $detail["kode_ujian"]; ?>" /></td>
<td><?php echo $detail["urutan"];?></td>					 
    <td><?php echo anchor(SITE_AREA."/content/ujian/view/".$detail["kode_ujian"],$detail["judul_ujian"]);?></td>
     <td><?php echo $detail["nilai_kelulusan"];?> %</td>
     <td><?php echo $detail["durasi_waktu"];?> Menit</td>
     <td><?php echo formatUang($detail["pembayaran"]);?></td>
     <td><?php echo $detail["jumlah_soal"];?></td>
      <td><?php echo $this->ujian_model->statusActive($detail["is_active"]);?> 
      <?php echo $this->soal_model->checkStatusSoal($detail["kode_ujian"]);?>
      </td>
      </tr>
      <?php endforeach;?>
      
    <?php } ?>
   
  </table>
  
  <div class="panel-footer">
      <input type="submit" onclick="return confirm('<?php e(js_escape(lang('ujian_delete_confirm'))); ?>')" name="deleted" class="btn btn-danger" id="button" value="DELETE" />
    <input type="submit" name="publish" class="btn btn-success" value="PUBLISH" />
    <input type="submit" name="draft" class="btn btn-warning" value="DRAFT" />
  </div>
  <?php  echo form_close(); ?>
  </div>
  
 
 <nav>
  <?php
	echo $this->pagination->create_links();
	?>
</nav>


