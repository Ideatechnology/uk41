<div class="panel panel-default">
    <div class="panel-body" style="padding-left:50px;padding-right:50px;">
    <?php
 if($pages){

	if ($this->session->userdata('site_lang')=="english"): 
		$tgl = "Date : ";
		$wb = "Posted By : ";
		$rd = "Read : ";
		else : 
		$tgl = "Tanggal Post : ";
		$wb = "Di Post Oleh : ";
		$rd = "Di Baca : ";
		endif;

?>


<h1><?php echo @$pages->judul_page_bahasa;?></h1> 
<hr />
<p>
<span class="glyphicon glyphicon-time" ></span> <?php echo $tgl; ?> <?php echo  date("d M Y H:i", strtotime($pages->created_on));?> Wib  |  

<?php echo $wb; ?> <?php echo $pages->author;?> | 
<?php echo $rd; ?> <?php echo $pages->baca;?> 
</p>

<hr />	  
 
<?php echo @$pages->isi_page_bahasa;?> 

		     
<?php }else{?>

<div class="alert alert-info fade in">
<a class="close" data-dismiss="alert">×</a>
<p><b>Maaf, Halaman Belum Ada Postingan.</b></p>
</div> 

<?php } ?> 
    </div>
	
  </div>
	
	