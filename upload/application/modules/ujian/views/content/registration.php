<h2>Daftar Member Registration <small><?php echo isset($detail_ujian)?"&#187; ".@$detail_ujian->judul_ujian:"";?></small></h2>
    <?php echo form_open("",array("method"=>"get")); ?>
<div class="input-group">
    <input type="text" name="filter" value="<?php echo $this->input->get("filter");?>" placeholder="Cari Nama, Tanggal" class="form-control">
      <span class="input-group-btn">
        <button class="btn btn-default"  type="submit"  type="button">Filter!</button>
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
            </button>
        <ul class="dropdown-menu pull-right" role="menu">
              <li><a href="<?php echo site_url(SITE_AREA."/content/ujian/registration/".$this->uri->segment(5)."?filter=".$this->input->get("filter")."&status=1");?>">Approve</a></li>
              <li><a href="<?php echo site_url(SITE_AREA."/content/ujian/registration/".$this->uri->segment(5)."?filter=".$this->input->get("filter")."&status=0");?>">Belum</a></li>
              
            </ul>
      </span>
    </div><!-- /input-group -->
    <?php echo form_close();?>
    <br />
    <?php echo form_open($this->uri->uri_string()); ?>
    <table class="table table-bordered">
        
        <thead>
            <tr>
                <th class="column-check"><input class="check-all" type="checkbox" /></th>
                <th>Nama Member</th>
                <th>Tanggal Registrasi</th>
                <th>Status</th>
                
            </tr>
        </thead>
        
        <tbody>
            <?php 
            $has_records	= isset($registrasi) && is_array($registrasi) && count($registrasi);
            if($has_records){ ?>
             <?php foreach($registrasi as $registrasi_row){ ?>
                
            <tr>
              <td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $registrasi_row->id_registrasi_ujian; ?>" /></td>
					
                <td><?php echo $registrasi_row->display_name;?></td>
                <td><?php echo tgl_indo(date("Y-m-d",strtotime($registrasi_row->tanggal)));?> - Jam <?php echo date("H:i",strtotime($registrasi_row->tanggal));?></td>
                <td><?php echo $this->registrasi_model->cekstatus($registrasi_row->status);?></td>
                
            </tr>
             <?php } ?>
            
             <?php }else{ ?>  
            <tr>
                <td colspan="4">Silakan untuk memilih ujian di sebelah kiri</td>
            </tr>
            <?php } ?>
        </tbody>
        
    </table>   
    <p>
    <input type="submit" name="approve" value="Approve" class="btn btn-success">
    <input type="submit" name="notapprove" value="Not Approve" class="btn btn-danger">
    </p>
    <?php echo form_close();?>
    <p class="help-block">*) untuk format filter tanggal YYYY-MM-DD</p>
 