<h3>Peringkat Nilai Tertinggi</h3>

 <?php if(isset($query)){ ?>
<ul data-role="listview" data-split-theme="a" data-inset="true">
   <?php foreach($query as $row): ?>
    <li><a  href="#">
         <img src='<?php echo base_url()."application/modules/member/foto/".$row->foto;?>' style='width:64px;left:5px;top:5px' class='pull-left'>
    <h2> <?php echo $row["display_name"];?></h2>
    <p>Dengan Score : <?php echo $row["score"];?></p></a>
      </li>
 
    <?php endforeach; ?>
    </ul>
    <?php } ?>