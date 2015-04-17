<?php 
 $this->load->model('sosmed/sosmed_model', null, true);
$sosmed= $this->sosmed_model->getSosmed();


?>

<ul data-role="listview">
    <li><a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-icon-left ui-icon-phone">Kontak Kami</a></li>
    <li><a href="#"><h3>BBM :</h3> <p><?php echo @$sosmed->pin_bb;?></p></a></li>
    <li><a href="#"><h3>Whataps :</h3> <p><?php echo @$sosmed->whatapps;?></p></a></li>
    <li><a href="#"><h3>Sms/Telp :</h3> <p><?php echo @$sosmed->telp;?></p></a></li>
    <li><a href="#"><h3>Website Info :</h3>   <p><span style="cursor: pointer;" onclick="window.open('<?php echo @$sosmed->alamat;?>','_blank');">medinaukdi.com</span>
    </p></a> </li>
    <li><a href="#"> <h3>Email :</h3><p> <?php echo @$sosmed->email;?></p></a></li>
</ul>

           
    