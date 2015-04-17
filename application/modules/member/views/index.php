 <?php 
  Assets::add_js("
           $(document).ready(function(){	
      
           $('#share').html('Loading..').load('".site_url("/ujian/getShare")."');
         
            $('#content-twitter').html('Loading..').load('".site_url("/ujian/getTwitter")."');
      
            
        });
      ","inline");
          ?>


<!-- main col right -->
<div class="col-sm-7">
   
     <div class="panel panel-default">
       <div class="panel-heading">
      
        <h4>
        Member Medina</h4></div>
        <div class="panel-body">
        <?php 
	 foreach($result->result_array() as $baris){
	?>
			<div class="media">
				<div class="media-left media-middle">
					<a class="pull-left" href="#">
					    <img class="media-object" style="width:50px; height:50px;"  src="<?php echo base_url()."application/modules/member/foto/cop_".$baris["foto"];?>" alt="member">
					</a>
					</div>
					    <div class="media-body" style="padding-left:10px">
						<h4 class="media-heading"><?php echo $baris["display_name"]; ?></h4>
						<?php echo $baris["universitas"]; ?>
					   </div>
			</div>			
		<?php } ?>

<?php
	echo $this->pagination->create_links();
	?>
      
        </div>
     </div>
  
  
  
</div>

                          
<!-- main col left --> 
<div class="col-sm-5">
        
    
           
    
<div class="panel panel-default">
        <div class="panel-heading">Bagikan Ke Teman Anda :</div>
       <div class="panel-body">
 
           
         
    
      <div id='share'></div>
          
        	


           
      </div>
    </div>

 
            
      <div id="content-twitter"></div>
            
      <?php $this->load->view("widget/kontak",array("sosmed"=>$sosmed)); ?>
           
   
 
</div>
