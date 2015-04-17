<?php 
// if the user is not logged in continue to show the login page
if ($this->auth->is_logged_in() === TRUE)
{

?>
    <div class="panel panel-default">
       <div class="panel-body">
        <p class="lead"><?php echo ucfirst($current_user->display_name);?></p>
        <p>13 Mengikuti Ujian , 1 Lulus Ujian, 2 Belum Lulus</p>
        
       
      </div>
    </div>

<?php } ?>