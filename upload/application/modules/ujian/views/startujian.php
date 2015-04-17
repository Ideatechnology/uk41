
<?php
Assets::add_js( array('flipclock.js') );
Assets::add_js("
    
 $('.cont').addClass('hide');
		count=$('.questions').length;
		 $('#question'+1).removeClass('hide');
		 
		 $(document).on('click','.next',function(){
		     last=parseInt($(this).attr('id'));     
		     nex=last+1;
		     $('#question'+last).addClass('hide');
		     
		     $('#question'+nex).removeClass('hide');
		 });
		 
		 $(document).on('click','.previous',function(){
             last=parseInt($(this).attr('id'));     
             pre=last-1;
             $('#question'+last).addClass('hide');
             
             $('#question'+pre).removeClass('hide');
         });
$(document).ready(function(){
// Attach a submit handler to the form
$('#submitForm').submit(function( event ) {
 
  // Stop form from submitting normally
  event.preventDefault();
 
  // Get some values from elements on the page:
  var form = $(this);
  var url = form.attr('action');
 
  // Send the data using post
  var posting = $.post( url,$('#submitForm').serialize());
 $('#loading').show();  
  // Put the results in a div
  posting.done(function(data) {
          
          window.location='".site_url("/ujian/nilaiujian/".$this->uri->segment(3))."/'+data;
  });
});
//end submit form 


var clock;
var waktu;
waktu = 60 * ".$ujian->durasi_waktu.";

			clock = $('.clock').FlipClock({
		        clockFace: 'HourlyCounter',
		        autoStart: false,
		        callbacks: {
		        	stop: function() {
		        		 
					  var form = $('#submitForm');
					  var url = form.attr('action');
					  $('#loading').show();  
					  // Send the data using post
					  var posting = $.post( url,$('#submitForm').serialize());
					 
					  // Put the results in a div
					  posting.done(function(data) {
						   window.location='".site_url("/ujian/nilaiujian/".$this->uri->segment(3))."/'+data;
					  });

		        	}
		        }
		    });
				    
		    clock.setTime(waktu);
		    clock.setCountdown(true);
		    clock.start();



 });



","inline");

?>


  
<div class="panel panel-default">
       <div class="panel-body">
<h1><?php echo strtoupper($ujian->judul_ujian);?>

    
      <span class="pull-right">   
<div class="clock"></div>
   </span>


</h1>
<hr />
      <div style="clear:both"></div>      


<div class="container-fluid">
    <div id='loading'>Sedang di Proses ...</div>
<?php echo form_open("/ujian/hasilujian/".$this->uri->segment(3),array("id"=>"submitForm"));?> 
    <?php $i=1; ?>
       <?php foreach($soal as $row_soal): ?>
    
     <?php if($i==1){?>    
    
    <div id='question<?php echo $i;?>' class='cont'>
    <p class='questions' id="qname<?php echo $i;?>" style="margin-bottom:30px;text-align:justify"> <?php echo $i?>.<?php echo $row_soal->question_name;?></p>
     <table>
             
<tr>
<td>
<input type="radio" value="1" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>
</td>
<td>
A. <?php echo $row_soal->answer1;?>
</td>
</tr>
<tr>
<td>
<input type="radio" value="2" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>

</td>
<td>
B. <?php echo $row_soal->answer2;?>
</td>
</tr>
                <tr>
                    <td><input type="radio" value="3" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>
   </td>
                    <td>C. <?php echo $row_soal->answer3;?></td>
                </tr>
                <tr>
                    <td>  <input type="radio" value="4" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>
  </td>
                    <td>D. <?php echo $row_soal->answer4;?></td>
                </tr>
                <tr>
                    <td>  <input type="radio" value="5" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>
  </td>
                    <td>E. <?php echo $row_soal->answer5;?></td>
                </tr>
     </table>
     
    <input type="radio" checked='checked' style='display:none' value="6" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>                                                                      
    <br/>
    <button id='<?php echo $i;?>' class='next btn btn-success' type='button'>Next</button>
    </div>     

                     <?php }elseif($i<1 || $i<$rows){?>
                     
                       <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>" style="text-align:justify"><?php echo $i?>.<?php echo $row_soal->question_name;?></p>
                    <table>
             
                <tr>
                    <td>
    <input type="radio" value="1" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>
                    </td>
                    <td>
                        A. <?php echo $row_soal->answer1;?>
                    </td>
                </tr>
                <tr>
                    <td>
                         <input type="radio" value="2" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>
   
                    </td>
                    <td>
                        B. <?php echo $row_soal->answer2;?>
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" value="3" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>
   </td>
                    <td>C. <?php echo $row_soal->answer3;?></td>
                </tr>
                <tr>
                    <td>  <input type="radio" value="4" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>
  </td>
                    <td>D. <?php echo $row_soal->answer4;?></td>
                </tr>
                <tr>
                    <td>  <input type="radio" value="5" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>
  </td>
                    <td>E. <?php echo $row_soal->answer5;?></td>
                </tr>
     </table>    <br/>
     
     <input type="radio" checked='checked' style='display:none' value="6" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>  
                    <button id='<?php echo $i;?>' class='previous btn btn-success' type='button'>Previous</button>                    
                    <button id='<?php echo $i;?>' class='next btn btn-success' type='button' >Next</button>
                    </div>
                       
                       
                       
                        
                        
                   <?php }elseif($i==$rows){?>
                    <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>" style="text-align:justify"><?php echo $i?>.<?php echo $row_soal->question_name;?></p>
                     <table>
             
                <tr>
                    <td>
    <input type="radio" value="1" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>
                    </td>
                    <td>
                        A. <?php echo $row_soal->answer1;?>
                    </td>
                </tr>
                <tr>
                    <td>
                         <input type="radio" value="2" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>
   
                    </td>
                    <td>
                        B. <?php echo $row_soal->answer2;?>
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" value="3" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>
   </td>
                    <td>C. <?php echo $row_soal->answer3;?></td>
                </tr>
                <tr>
                    <td>  <input type="radio" value="4" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>
  </td>
                    <td>D. <?php echo $row_soal->answer4;?></td>
                </tr>
                 <tr>
                    <td>  <input type="radio" value="5" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>
  </td>
                    <td>E. <?php echo $row_soal->answer5;?></td>
                </tr>
     </table>       
                    <input type="radio" checked='checked' style='display:none' value="6" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>                                                                      
                    <br/>
                    
                    <button id='<?php echo $i;?>' class='previous btn btn-success' type='button'>Previous</button>                    
                    <button id='<?php echo $i;?>' class='next btn btn-success' type='submit'>Finish</button>
                    </div>
		<?php } $i++; ?>
    
    
    
    
	
           
        <?php endforeach; ?>
 <?php echo form_close();?>
   <hr /> Total <?php echo $ujian->jumlah_soal;?> Soal
    

</div>



    </div>
     </div>
   
   