<?php 
 $this->load->model('sosmed/sosmed_model', null, true);
$sosmed= $this->sosmed_model->getSosmed();


?>
<div class="panel panel-default">
        <div class="panel-heading">Kontak Kami :</div>
       <div class="panel-body">
           
           
           <ul class="list-group">
      <li class="list-group-item">
        <span class="badge"><?php echo @$sosmed->pin_bb;?></span>
        <img src="<?php echo Template::theme_url("images/bbm.png");?>" style="margin-right:5px;"> BBM
      </li>
      <li class="list-group-item">
        <span class="badge"><?php echo @$sosmed->whatapps;?></span>
        <img src="<?php echo Template::theme_url("images/whatsapp.png");?>" style="margin-right:5px;"> Whataps
      </li>
      <li class="list-group-item">
        <span class="badge"><?php echo @$sosmed->telp;?></span>
        <span class="glyphicon glyphicon-phone-alt" style="font-size:32px;margin-right:5px;color:#e13300"></span> Sms/Telp
      </li>
      <li class="list-group-item">
          <span class="badge" style="cursor: pointer;" onclick="window.open('<?php echo @$sosmed->alamat;?>','_blank');">medinaukdi.com</span>
        
          <span class="glyphicon glyphicon-globe" style="font-size:32px;margin-right:5px;color:#0044cc"></span>
        <span style="bottom:20px;">Website Info</span>
      </li>
      
       <li class="list-group-item">
          <span class="badge"><?php echo @$sosmed->email;?></span>
        <span class="glyphicon glyphicon-envelope" style="font-size:32px;margin-right:5px;color:#f00"></span>
          Email
      </li>
      
      
    </ul>
                    
      </div>
    </div>