
<link rel="stylesheet" href="<?php echo Template::theme_url("themes/medina.min.css");?>" />
	<link rel="stylesheet" href="<?php echo Template::theme_url("themes/jquery.mobile.icons.min.css");?>" />
	<link rel="stylesheet" href="<?php echo Template::theme_url("themes/jquery.mobile.structure-1.4.5.min.css");?>" />
	<script src="<?php echo Template::theme_url("themes/jquery-1.11.1.min.js");?>"></script>
	<script src="<?php echo Template::theme_url("themes/jquery.mobile-1.4.5.min.js");?>"></script>
        <link rel="stylesheet" href="<?php echo Template::theme_url("themes/style.css");?>" />
<link rel="stylesheet" href="<?php echo Template::theme_url("css/flipclock_mobile.css");?>" />
<script src="<?php echo Template::theme_url("js/flipclock.js");?>"></script>
    
        <script>
         

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
 $('#submitForm').hide();
  // Put the results in a div
  posting.done(function(data) {
          
          window.location='<?php echo site_url("/ujian/nilaiujian/".$this->uri->segment(3));?>/'+data;
  });
});
//end submit form 

var clock;
var waktu;
waktu = 60 * <?php echo $ujian->durasi_waktu;?>;

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
						   window.location='<?php echo site_url("/ujian/nilaiujian/".$this->uri->segment(3));?>/'+data;
					  });

		        	}
		        }
		    });
				    
		    clock.setTime(waktu);
		    clock.setCountdown(true);
		    clock.start();



 });
 
        </script>


<?php echo form_open("/ujian/hasilujian/".$this->uri->segment(3),array("id"=>"submitForm"));?> 

<span class="pull-right">   
<div class="clock"></div>
   </span><br />
<strong><?php echo strtoupper($ujian->judul_ujian);?></strong>



    <?php $i=1; ?>
       <?php foreach($soal as $row_soal): ?>
    
     <?php if($i==1){?>    
    
<div id='question<?php echo $i;?>' class='cont'>

<fieldset data-role="controlgroup" data-mini="true">
<legend><p class='questions' id="qname<?php echo $i;?>" style="margin-bottom:30px;"> <?php echo $i?>.<?php echo $row_soal->question_name;?></p></legend>
<input type="radio" value="1" id='radio1_<?php echo $row_soal->id;?>_a' name='<?php echo $row_soal->id;?>'/>
<label for="radio1_<?php echo $row_soal->id;?>_a">A. <?php echo $row_soal->answer1;?></label>

<input type="radio" value="2" id='radio1_<?php echo $row_soal->id;?>_b' name='<?php echo $row_soal->id;?>'/>
<label for="radio1_<?php echo $row_soal->id;?>_b">B. <?php echo $row_soal->answer2;?></label>

<input type="radio" value="3" id='radio1_<?php echo $row_soal->id;?>_c' name='<?php echo $row_soal->id;?>'/>
<label for="radio1_<?php echo $row_soal->id;?>_c">C. <?php echo $row_soal->answer3;?></label>

<input type="radio" value="4" id='radio1_<?php echo $row_soal->id;?>_d' name='<?php echo $row_soal->id;?>'/>
<label for="radio1_<?php echo $row_soal->id;?>_d">D. <?php echo $row_soal->answer4;?></label>

<input type="radio" value="5" id='radio1_<?php echo $row_soal->id;?>_e' name='<?php echo $row_soal->id;?>'/>
<label for="radio1_<?php echo $row_soal->id;?>_e">E. <?php echo $row_soal->answer5;?></label>

</fieldset>
    
<input type="radio" checked='checked' style='display:none' value="6" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>                                                                      
<button id='<?php echo $i;?>' class='next btn btn-success' type='button'>Next</button>
</div>     

                     <?php }elseif($i<1 || $i<$rows){?>
                     
<div id='question<?php echo $i;?>' class='cont'>
<fieldset data-role="controlgroup" data-mini="true">
    <legend>
    <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $row_soal->question_name;?></p>
</legend>

<input type="radio" value="1" id='radio1_<?php echo $row_soal->id;?>_aa' name='<?php echo $row_soal->id;?>'/>
<label for="radio1_<?php echo $row_soal->id;?>_aa">A. <?php echo $row_soal->answer1;?></label>

<input type="radio" value="2" id='radio1_<?php echo $row_soal->id;?>_bb' name='<?php echo $row_soal->id;?>'/>
<label for="radio1_<?php echo $row_soal->id;?>_bb">B. <?php echo $row_soal->answer2;?></label>

<input type="radio" value="3" id='radio1_<?php echo $row_soal->id;?>_cc' name='<?php echo $row_soal->id;?>'/>
<label for="radio1_<?php echo $row_soal->id;?>_cc">C. <?php echo $row_soal->answer3;?></label>

<input type="radio" value="4" id='radio1_<?php echo $row_soal->id;?>_dd' name='<?php echo $row_soal->id;?>'/>
<label for="radio1_<?php echo $row_soal->id;?>_dd">D. <?php echo $row_soal->answer4;?></label>

<input type="radio" value="5" id='radio1_<?php echo $row_soal->id;?>_ee' name='<?php echo $row_soal->id;?>'/>
<label for="radio1_<?php echo $row_soal->id;?>_ee">E. <?php echo $row_soal->answer5;?></label>
</fieldset>
    
<input type="radio" checked='checked' style='display:none' value="6" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>  
                   
<button id='<?php echo $i;?>' class='next btn btn-success' type='button' >Next</button>
<button id='<?php echo $i;?>' class='previous btn btn-success' type='button'>Previous</button> 
</div>
                       
                     
<?php }elseif($i==$rows){?>
<div id='question<?php echo $i;?>' class='cont'>
<fieldset data-role="controlgroup" data-mini="true">
    <legend>
    <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $row_soal->question_name;?></p>
</legend>

    <input type="radio" value="1" id='radio1_<?php echo $row_soal->id;?>_aaa' name='<?php echo $row_soal->id;?>'/>
<label for="radio1_<?php echo $row_soal->id;?>_aaa">A. <?php echo $row_soal->answer1;?></label>

<input type="radio" value="2" id='radio1_<?php echo $row_soal->id;?>_bbb' name='<?php echo $row_soal->id;?>'/>
<label for="radio1_<?php echo $row_soal->id;?>_bbb">B. <?php echo $row_soal->answer2;?></label>

<input type="radio" value="3" id='radio1_<?php echo $row_soal->id;?>_ccc' name='<?php echo $row_soal->id;?>'/>
<label for="radio1_<?php echo $row_soal->id;?>_ccc">C. <?php echo $row_soal->answer3;?></label>

<input type="radio" value="4" id='radio1_<?php echo $row_soal->id;?>_ddd' name='<?php echo $row_soal->id;?>'/>
<label for="radio1_<?php echo $row_soal->id;?>_ddd">D. <?php echo $row_soal->answer4;?></label>

<input type="radio" value="5" id='radio1_<?php echo $row_soal->id;?>_eee' name='<?php echo $row_soal->id;?>'/>
<label for="radio1_<?php echo $row_soal->id;?>_eee">E. <?php echo $row_soal->answer5;?></label>


</fieldset>
<input type="radio" checked='checked' style='display:none' value="6" id='radio1_<?php echo $row_soal->id;?>' name='<?php echo $row_soal->id;?>'/>                                                                      

                 
<button id='<?php echo $i;?>' class='next btn btn-success' type='submit'>Finish</button>
<button id='<?php echo $i;?>' class='previous btn btn-success' type='button'>Previous</button>   
</div>
<?php } $i++; ?>

<?php endforeach; ?>

<hr /> Total <?php echo $ujian->jumlah_soal;?> Soal
<?php echo form_close();?>
