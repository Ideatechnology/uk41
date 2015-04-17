<ol class="breadcrumb">
  <li><a href="<?php echo site_url();?>"><?php echo lang('bf_home');?></a> &#187; </li>
  <li class="active"><?php echo $categories->judul_bahasa;?></li>
</ol>

<?php if($relatedPosts){ ?>
<ul data-role="listview" data-inset="true">
    <?php foreach($relatedPosts as $related){ 

if ($this->session->userdata('site_lang')=="english"): 
		$b_judul1 = $related->judul_english; 
		$b_slug_judul = $related->slug_judul_english;
		$tgl1 = "Date : ";
		$selengkapnya = "Read more...";
		else : 
		$b_judul1 = $related->judul; 
		$b_slug_judul = $related->slug_judul;
		$tgl1 = "Tanggal Posting : ";
		$selengkapnya = "Selengkapnya";
		endif;


?>
	<li><a href="<?php echo site_url('post/read/'.date("Y",strtotime($related->created_on)).'/'.$related->id.'/'.url_title($related->judul, 'dash').'/'.$this->uri->segment(4));?>">
    
	<?php if($related->image_data!=""):?>
<?php 
echo ($related->image_data!="" && $related->image_data!="noimage.png")?img(array($path_image.image_thumb($related->image_data),"style"=>"margin-left:10px;margin-top:20px","class"=>"img-thumbnail")):''; ?>
<?php endif; ?>	 
	<h2><?php echo $b_judul1 ;?></h2>


	 <p ><?php echo $tgl1;?>  <?php echo date("d M Y", strtotime($related->created_on));?> <?php echo date("H:i", strtotime($related->created_on));?> Wib</p>
    <p><?php 
echo strip_tags(word_limiter($b_slug_judul, 50));
 ?></p>
     
    </a></li>
	<?php
	}
?>
</ul>

<?php echo $this->pagination->create_links(); ?>
<?php
  }else{
  
if ($this->session->userdata('site_lang')=="english"): 
	 echo '<p>No Related posts.</p>';  
	 else:
	  echo '<p>Tidak ada Post yang terkait.</p>';  
	 endif;
  }
?>