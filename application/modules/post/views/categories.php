<div style="padding:10px;">
<?php
  if($postsbycategories){
?>
 <h1 class="judul"> <?php echo $categories->judul_bahasa;?></h1>
 <hr / style="solid 1px #FAF5F5">
<h4>
<a href="<?php echo site_url('blog/'.$postsbycategories->id.'-'.url_title($postsbycategories->judul, 'dash'));?>">
<?php echo $postsbycategories->judul_post_bahasa;?>
</a>
</h4>

     

<p style="color:#999999">
<em>
 <i class="icon-calendar icon-blue"></i> <?php echo lang("post_form_created");?> : <?php echo date("d M Y", strtotime($postsbycategories->created_on));?> &bull;
<?php echo lang("post_form_slug_author");?> : <a rel="author" title="Posts by <?php echo $postsbycategories->author;?>" href="#"><?php echo $postsbycategories->author;?></a> &bull;
<?php echo lang("post_form_baca");?> : <?php echo $postsbycategories->baca;?> 
</em>
</p>

<!--  untuk image -->
<a class="pull-left" href="<?php echo site_url('blog/'.$postsbycategories->id.'-'.url_title($postsbycategories->judul, 'dash'));?>">
<?php 
$img=explode(".",$postsbycategories->image_data);
echo ($postsbycategories->image_data!="" && $postsbycategories->image_data!="noimage.png")?img(array($path_image.$img[0].".".$img[1],"class"=>"place-left margin10 nlm ntm size3")):''; ?>
</a>


<?php echo word_limiter(strip_tags($postsbycategories->slug_judul_post_bahasa),120);?>

 <a href="<?php echo site_url('blog/'.$postsbycategories->id.'-'.url_title($postsbycategories->judul, 'dash'));?>"><?php echo lang('post_more');?></a>

<?php }else{ ?>

 <div class="alert alert-danger">
<?php echo lang('post_msgnoposting');?>
</div>
 
<?php } ?> 
      
<div style="clear:both"></div>      
<hr /><h2><?php echo lang('post_other');?></h2> <hr / style="solid 1px #FAF5F5">




<?php if($relatedPosts){ ?>
<div class="media-list">
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
 <div class="media">
<!--  untuk image -->
<a class="pull-left" href="<?php echo site_url('blog/'.$related->id.'-'.url_title($related->judul, 'dash'));?>">
<?php 
$img=explode(".",$related->image_data);
echo ($related->image_data!="" && $related->image_data!="noimage.png")?img(array($path_image.$img[0].".".$img[1],"class"=>"place-left margin10 nlm ntm size3","style"=>"height:130px")):''; ?>
</a>
<div class="media-body">
<h4 class="media-heading"><a title="<?php echo $related->judul ;?>" href="<?php echo site_url('blog/'.$related->id.'-'.url_title($related->judul, 'dash'));?>">

<?php echo $b_judul1 ;?>

</a>
</h4>
<em> <i class="icon-calendar icon-blue"></i> <?php echo $tgl1;?> <?php echo date("d M Y", strtotime($related->created_on));?></em><br />
<p><?php 

echo strip_tags(word_limiter($b_slug_judul, 20));


 ?></p>
</div>
</div>
<br style="clear:both" />
<?php
	}
?>
</div>
<br />
<div id="pagination-digg">
<?php echo $this->pagination->create_links(); ?>
</div>
<?php
  }else{
  
if ($this->session->userdata('site_lang')=="english"): 
	 echo '<p>No Related posts.</p>';  
	 else:
	  echo '<p>Tidak ada Post yang terkait.</p>';  
	 endif;
  }
?>

   
    
     <br /><br /><br />
      
        
  
</div>

  
