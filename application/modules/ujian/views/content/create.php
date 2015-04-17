
<div class="panel panel-default" style="width:500px;" >
      <div class="panel-heading">
        <h3 class="panel-title">FORM ADD EXAMATION</h3>
      </div>
      <div class="panel-body">
       

 <?php echo form_open($this->uri->uri_string(), array("name"=>"form1","role"=>"form",'class' => "form-signin","data-toggle"=>"validator")); ?>
<div class="form-group">
    <label class="control-label" for="nama_ujian">Parent * :</label>
      <select name="parent_id"  class="form-control" required id="parent_id_ujian" />
      <option value="0">Parent Induk</option>
      <?php foreach($parent as $parent_row): ?>
      <?php if(isset($query)): ?>
       <option value="<?php echo $parent_row->kode_ujian;?>" <?php echo $parent_row->kode_ujian==$query->parent_id?"selected":"";?>><?php echo $parent_row->judul_ujian;?></option>
     
      <?php else: ?>
      <option value="<?php echo $parent_row->kode_ujian;?>"><?php echo $parent_row->judul_ujian;?></option>
      <?php endif; ?>
          <?php endforeach; ?>
      </select>
        <div class="help-block with-errors"></div>
  </div>			
 	
  <div class="form-group">
    <label class="control-label" for="nama_ujian"><?php echo $this->ujian_model->getField()->judul_ujian;?> * :</label>
      <input name="judul_ujian" value="<?php echo set_value('judul_ujian',isset($query)?$query->judul_ujian:""); ?>"  class="form-control" type="text" required id="judul_ujian" />
        <div class="help-block with-errors"></div>
  </div>
  
  <div class="form-group">
    <label class="control-label"><?php echo $this->ujian_model->getField()->keterangan;?> * :</label>
         <textarea name="keterangan" class="form-control" required id="keterangan" cols="45" rows="5"><?php echo set_value('keterangan',isset($query)?$query->keterangan:""); ?></textarea>
    <div class="help-block with-errors"></div>
  </div>
  
  <div class="form-group">
    <label class="control-label"><?php echo $this->ujian_model->getField()->nilai_kelulusan;?> * :</label>
     <div class="row">
    <div class="col-md-4">
    
     <div class="input-group">
       <span class="input-group-addon">%</span>
       <input type="number" value="<?php echo set_value('nilai_kelulusan',isset($query)?$query->nilai_kelulusan:""); ?>"  min="0" max="100" name="nilai_kelulusan" required class="form-control" id="nilai_kelulusan" />
  
            </div>
    
   </div></div>
    <div class="help-block with-errors"></div>
   <p class="help-block">dihitung dalam satuan persen maksimal 100%</p>
   
   </div>
   
    <div class="form-group">
    <label class="control-label"><?php echo $this->ujian_model->getField()->durasi_waktu;?> * : </label>
    <div class="row">
    <div class="col-md-3">
    <input type="number" min="0" value="<?php echo set_value('durasi_waktu',isset($query)?$query->durasi_waktu:""); ?>"  required max="120" type="number" name="durasi_waktu" class="form-control" id="durasi_waktu" />
    </div></div>
     <div class="help-block with-errors"></div>
   <p class="help-block">dihitung dalam satuan menit</p>
   </div>
   
   
   
   <div class="form-group">
    <label class="control-label"><?php echo $this->ujian_model->getField()->jumlah_soal;?> * : </label>
 	<div class="row">
    <div class="col-md-3">
   <input type="number" min="0"  value="<?php echo set_value('jumlah_soal',isset($query)?$query->jumlah_soal:""); ?>" max="200" required="required" class="form-control" name="jumlah_soal" id="jumlah_soal" />
   </div>
   </div>
   </div>
   
     <div class="form-group">
    <label class="control-label"><?php echo $this->ujian_model->getField()->pembayaran;?> : </label>
 	<div class="row">
    <div class="col-md-7">
    <div class="input-group">
              
                 <input type="text" value="<?php echo set_value('pembayaran',isset($query)?$query->pembayaran:""); ?>" required="required" class="form-control" name="pembayaran"  />
            </div>
 
   </div>
   </div>
    <p class="help-block">Jika diisi 0 ujian ini digratiskan</p>
   </div>
 
  
  <div class="form-group">
    <label class="control-label">Urutan * : </label>
 	<div class="row">
    <div class="col-md-3">
   <input type="number" min="0"  value="<?php echo set_value('urutan',isset($query)?$query->urutan:""); ?>"  required="required" class="form-control" name="urutan" id="urutan" />
   </div>
   </div>
   </div>
  
  <div class="form-group">
    
      <input type="submit" name="simpan" name="button" class="btn btn-primary" id="button" value="Simpan" />
    
  </div>
  
  
   <?php echo form_close(); ?>
</div>

      </div>
 