
               	
                
<ul class="nav" id="lg-menu">
    <li>  <h5 style="padding-left:10px;padding-right:10px;">Menu Aplikasi<hr /></h5>
     </li>
<li><a href="<?php echo site_url("ujian");?>"><i class="glyphicon glyphicon-list-alt"></i> Menu Tryout</a></li>
<li><a href="<?php echo site_url("member/peringkat");?>"><i class="glyphicon glyphicon-tower"></i> Peringkat Nilai</a></li>
<!--
<li><a href="<?php echo site_url("konfirmasi-pembayaran");?>"><i class="glyphicon glyphicon-shopping-cart"></i> Konfirmasi Bayar</a></li>
<li><a href="<?php echo site_url("pages/detail/51-cara-pembayaran");?>"><i class="glyphicon glyphicon-question-sign"></i> Cara Pembayaran</a></li>
-->
</ul>


<br />
<ul class="media-list">
    <li class="media">
        <div class="media-body">
        <h5 style="padding-left:10px;padding-right:10px;">Member Kami<hr /></h5>
        </div>
    </li>
    

    <?php
    $this->load->model("users/user_model");
    $user_query=$this->user_model->where("active",1)
                                ->select("bf_users.display_name,bf_universitas.universitas as nama_universitas")
                                ->limit(3)
                                ->join("bf_universitas","bf_universitas.id_universitas=bf_users.universitas")
                                ->order_by("id","desc")
                                ->find_all();
   $count_user = $this->user_model->where("active",1)
                                ->select("bf_users.display_name,bf_universitas.universitas as nama_universitas")
                                ->join("bf_universitas","bf_universitas.id_universitas=bf_users.universitas")
                                ->order_by("id","desc")
                                ->count_all();
    
    ?>
 <?php foreach($user_query as $row_user1): ?>   
<li class="media">
<a class="pull-left" href="#">
<img src="<?php echo base_url()."application/modules/member/foto/cop_".$row_user1->foto;?>" style="width: 48px; height: 48px;" class="media-object" data-src="holder.js/64x64" alt="64x64">
</a>
<div class="media-body">
<h5 class="media-heading"><?php echo $row_user1->display_name;?></h5>
<small> <?php echo word_limiter($row_user1->nama_universitas,3);?></small>  
</div>
</li>
<?php endforeach; ?>


</ul>
<hr />
<p><a href="<?php echo site_url("member");?>">Lihat <?php echo $count_user;?> Member Lainnya</a></p>