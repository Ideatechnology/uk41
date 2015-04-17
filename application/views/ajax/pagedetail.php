
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


<h2><?php echo @$pages->judul_page_bahasa;?></h2> 
<hr />
<p>
    <small>
<?php echo $tgl; ?> <?php echo  date("d M Y H:i", strtotime($pages->created_on));?> Wib 
</small>
</p>

<hr />	  
 
<?php echo @$pages->isi_page_bahasa;?> 

		     
<?php }else{?>

<div class="alert alert-info fade in">
<a class="close" data-dismiss="alert">×</a>
<p><b>Maaf, Halaman Belum Ada Postingan.</b></p>
</div> 

<?php } ?> 
   