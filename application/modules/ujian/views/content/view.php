<div class="CListView">
<table class="table table-bordered">
    <tbody>
        <tr>
            <th><?php echo $this->ujian_model->getField()->judul_ujian;?></th>
            <td>: <?php echo $query->judul_ujian;?></td>
        </tr>
        <tr>
            <th><?php echo $this->ujian_model->getField()->keterangan;?></th>
            <td>: <?php echo $query->keterangan;?></td>
        </tr>
        <tr>
            <th><?php echo $this->ujian_model->getField()->nilai_kelulusan;?></th>
            <td>: <?php echo $query->nilai_kelulusan;?> %</td>
        </tr>
        <tr>
            <th><?php echo $this->ujian_model->getField()->durasi_waktu;?></th>
            <td>: <?php echo $query->durasi_waktu;?> Menit</td>
        </tr>
        <tr>
            <th><?php echo $this->ujian_model->getField()->jumlah_soal;?></th>
            <td>: <?php echo $query->jumlah_soal;?></td>
        </tr>
        <tr>
            <th><?php echo $this->ujian_model->getField()->pembayaran;?></th>
            <td>: <?php echo formatUang($query->pembayaran);?></td>
        </tr>
        
    </tbody>    
</table>
</div>

<div class="btn-group">
  <?php echo anchor(SITE_AREA."/content/ujian/edit/".$query->kode_ujian,"Edit Ujian",array("class"=>'btn btn-primary'));?>
  <?php echo anchor(SITE_AREA."/content/ujian/hapus/".$query->kode_ujian,"Hapus Ujian",array("class"=>'btn btn-danger','onclick'=>"return confirm('".lang("ujian_delete_confirm")."')"));?>
<?php echo anchor(SITE_AREA."/content/ujian/view/".$query->kode_ujian."#tambahsoal","Tambah Soal",array("class"=>'btn btn-success'));?>

</div>

<br /><br />
<div class="alert alert-info">
    Soal yang sudah diisi berjumlah <strong><?php echo $this->soal_model->count_by('ujian_id', $query->kode_ujian);?></strong> dari <strong><?php echo $query->jumlah_soal;?></strong> Status <?php echo $this->soal_model->checkStatusSoal($query->kode_ujian);?>
</div>

<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#input" data-toggle="tab">Form Input</a></li>
  <li><a href="#upload" data-toggle="tab">Upload Excell</a></li>
</ul>

<!-- Tab panes -->
<a name="tambahsoal"></a>
<div class="tab-content">
    <div class="tab-pane active" id="input">
         <?php echo form_open($this->uri->uri_string(), array("name"=>"form1","role"=>"form","data-toggle"=>"validator")); ?>
        <div class="panel panel-default" style="margin-top: 20px;" >
            <input type="hidden" value="<?php echo $query->kode_ujian;?>" name="ujian_id">
      <div class="panel-body">
          <div class="row">
              
              <div class="col-xs-6">
              
           <div class="form-group">
    <label><?php echo $this->soal_model->getField()->urutan;?> *</label>
    <input name="urutan"  required value="<?php echo set_value("urutan",isset($editsoal)?$editsoal->urutan:$urutan_soal);?>" class="form-control" type="number" />
  <div class="help-block with-errors"></div>
           </div>
            
            <div class="form-group">
    <label><?php echo $this->soal_model->getField()->question_name;?> *</label>
   	<textarea name="question_name" required class="form-control" cols="" rows=""><?php echo set_value("question_name",isset($editsoal)?$editsoal->question_name:"");?></textarea>
  <div class="help-block with-errors"></div>
            </div>
                  
                   <div class="form-group">
    <label><?php echo $this->soal_model->getField()->answer;?> *</label>
   	<select name="answer" required class="form-control">
            <option value="">--Pilih Jawaban--</option>
            <?php foreach($this->soal_model->pilihan() as $key_pilihan=>$value_pilihan):?>
            <option value="<?php echo $key_pilihan;?>" 
            <?php echo isset($editsoal) && $editsoal->answer==$key_pilihan?"selected":"";?>
            ><?php echo $value_pilihan;?></option>
            <?php endforeach; ?>
            
    </select>
  <div class="help-block with-errors"></div>
                   </div>
  
              </div>
              
              <div class="col-xs-6">
                  
    <div class="form-group">
    <label><?php echo $this->soal_model->getField()->answer1;?> *</label>
    <input name="answer1" required value="<?php echo set_value("answer1",isset($editsoal)?$editsoal->answer1:"");?>" class="form-control" type="text" />
  <div class="help-block with-errors"></div>
    </div>
  
   <div class="form-group">
    <label><?php echo $this->soal_model->getField()->answer2;?> *</label>
   	<input name="answer2" required value="<?php echo set_value("answer2",isset($editsoal)?$editsoal->answer2:"");?>" class="form-control" type="text" />
  <div class="help-block with-errors"></div>
   </div>
  
  <div class="form-group">
    <label><?php echo $this->soal_model->getField()->answer3;?> *</label>
   	<input name="answer3" required value="<?php echo set_value("answer3",isset($editsoal)?$editsoal->answer3:"");?>" class="form-control" type="text" />
  <div class="help-block with-errors"></div>
  </div>
  
  <div class="form-group">
    <label><?php echo $this->soal_model->getField()->answer4;?> *</label>
   	<input name="answer4" required value="<?php echo set_value("answer4",isset($editsoal)?$editsoal->answer4:"");?>" class="form-control" type="text" />
  <div class="help-block with-errors"></div>
  </div>
                  
 <div class="form-group">
    <label><?php echo $this->soal_model->getField()->answer5;?> *</label>
   	<input name="answer5" required value="<?php echo set_value("answer5",isset($editsoal)?$editsoal->answer5:"");?>" class="form-control" type="text" />
  <div class="help-block with-errors"></div>
  </div>
  
  
                  
                  </div>
  
          </div>
      </div>
            
            <div class="panel-footer"><input type="submit" value="Simpan" name="simpan" class="btn btn-primary"></div>
              <?php echo form_close(); ?>
        </div>
        
    </div>
    <div class="tab-pane" id="upload">
        <br />
        <div class="alert alert-danger">Masih Dalam Pengembangan</div
        
    </div>
</div>




  <?php echo form_open($this->uri->uri_string()); ?>  
 <table class="table table-bordered" id="tSortablex">
     <thead>
     <tr>
    <th class="column-check"><input class="check-all" type="checkbox" /></th>	
    <th style="width:70px;"><?php echo $this->soal_model->getField()->urutan;?></th>
    <th><?php echo $this->soal_model->getField()->question_name;?></th>
    <th><?php echo $this->soal_model->getField()->option;?></th>
    <th><?php echo $this->soal_model->getField()->answer;?></th>
   </tr>
   </thead>
   <tbody>
   <?php 
   if($soal){
   foreach($soal as $row_soal){
   ?>
  <tr>
   <td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $row_soal->id; ?>" /></td>

    <td><?php echo $row_soal->urutan;?></td>
    <td style="width:300px;"><?php echo anchor(SITE_AREA."/content/ujian/view/".$query->kode_ujian."/edit/".$row_soal->id,$row_soal->question_name);?></td>
    <td>
    <ul class="list-unstyled">
  	<li>A. <?php echo $row_soal->answer1;?></li>
    <li>B. <?php echo $row_soal->answer2;?></li>
    <li>C. <?php echo $row_soal->answer3;?></li>
    <li>D. <?php echo $row_soal->answer4;?></li>
    <li>E. <?php echo $row_soal->answer5;?></li>
	</ul>
    </td>
    <td><?php echo $this->soal_model->getValueAnswer($row_soal->answer);?></td>
   
  </tr>
 
  
 

   <?php }} ?>
   </tbody>
   </table>


<?php if($soal){ ?>
<input type="submit" onclick="return confirm('<?php e(js_escape(lang('ujian_delete_confirm'))); ?>')" name="deleted" class="btn btn-danger" id="button" value="DELETE" />
<?php } ?>
   <br /><br />    <?php  echo form_close(); ?>