<style >
    .td{
        vertical-align:top;
    }
    
</style>
<script>

     
      $(document).on('pageinit', '#kontenutama', function(){  

     $("#loading").show();

     var isi;
    isi="";
    var no=1;
    $.ajax({
    url:'<?php echo site_url("ujian/soal/".$this->uri->segment(3));?>',
    dataType: "JSON",
    success:function(question12){
    
    var jumlah = question12.length;
    $.each(question12, function(i, item) {
      
      
    if(no==1){ 
          
          $('#lokasi')
        .controlgroup("container")
        .append("<div id='question"+no+"' class='cont'>"+
        "<legend><p class='questions' id='qname"+no+"' style='margin-bottom:30px;text-align:justify'>"+no+"."+question12[i].soal+"</p></legend>"+
        "<label><input type='radio' value='1' id='radio1_"+question12[i].id+"_a' name='"+question12[i].id+"' /> A. "+question12[i].answer1+" </label>"+
        "<label><input type='radio' value='2' id='radio1_"+question12[i].id+"_a' name='"+question12[i].id+"' /> B. "+question12[i].answer2+" </label>"+
        "<label><input type='radio' value='3' id='radio1_"+question12[i].id+"_a' name='"+question12[i].id+"' /> C. "+question12[i].answer3+" </label>"+
        "<label><input type='radio' value='4' id='radio1_"+question12[i].id+"_a' name='"+question12[i].id+"' /> D. "+question12[i].answer4+" </label>"+
        "<label><input type='radio' value='5' id='radio1_"+question12[i].id+"_a' name='"+question12[i].id+"' /> E. "+question12[i].answer5+" </label><br />"+
        "<input type='radio' checked='checked' style='display:none' value='6' id='radio1_"+question12[i].id+"' name='"+question12[i].id+"'/>"+
        "<button id='"+no+"' class='next ui-btn' type='button' >Next</button></div>"
        );    
     
    
     }else if(no<1 || no<jumlah){
         
           
          $('#lokasi')
        .controlgroup("container")
        .append("<div id='question"+no+"' class='cont'>"+
        "<legend><p class='questions' id='qname"+no+"' style='margin-bottom:30px;text-align:justify'>"+no+"."+question12[i].soal+"</p></legend>"+
        "<label><input type='radio' value='1' id='radio1_"+question12[i].id+"_a' name='"+question12[i].id+"' /> A. "+question12[i].answer1+" </label>"+
        "<label><input type='radio' value='2' id='radio1_"+question12[i].id+"_a' name='"+question12[i].id+"' /> B. "+question12[i].answer2+" </label>"+
        "<label><input type='radio' value='3' id='radio1_"+question12[i].id+"_a' name='"+question12[i].id+"' /> C. "+question12[i].answer3+" </label>"+
        "<label><input type='radio' value='4' id='radio1_"+question12[i].id+"_a' name='"+question12[i].id+"' /> D. "+question12[i].answer4+" </label>"+
        "<label><input type='radio' value='5' id='radio1_"+question12[i].id+"_a' name='"+question12[i].id+"' /> E. "+question12[i].answer5+" </label><br />"+
        "<input type='radio' checked='checked' style='display:none' value='6' id='radio1_"+question12[i].id+"' name='"+question12[i].id+"'/>"+
        "<button id='"+no+"' class='next ui-btn' type='button' >Next</button><br />"+
        "<button id='"+no+"' class='previous ui-btn' type='button'>Previous</button></div>"
        );    
         

         }else if(no==jumlah){
             $('#lokasi')
        .controlgroup("container")
        .append("<div id='question"+no+"' class='cont'>"+
        "<legend><p class='questions' id='qname"+no+"' style='margin-bottom:30px;text-align:justify'>"+no+"."+question12[i].soal+"</p></legend>"+
        "<label><input type='radio' value='1' id='radio1_"+question12[i].id+"_a' name='"+question12[i].id+"' /> A. "+question12[i].answer1+" </label>"+
        "<label><input type='radio' value='2' id='radio1_"+question12[i].id+"_a' name='"+question12[i].id+"' /> B. "+question12[i].answer2+" </label>"+
        "<label><input type='radio' value='3' id='radio1_"+question12[i].id+"_a' name='"+question12[i].id+"' /> C. "+question12[i].answer3+" </label>"+
        "<label><input type='radio' value='4' id='radio1_"+question12[i].id+"_a' name='"+question12[i].id+"' /> D. "+question12[i].answer4+" </label>"+
        "<label><input type='radio' value='5' id='radio1_"+question12[i].id+"_a' name='"+question12[i].id+"' /> E. "+question12[i].answer5+" </label><br />"+
        "<input type='radio' checked='checked' style='display:none' value='6' id='radio1_"+question12[i].id+"' name='"+question12[i].id+"'/>"+
        "<input id='"+no+"' class='next ui-btn' type='submit' style='width:100%' value='Finish'><br />"+
        "<button id='"+no+"' class='previous ui-btn' type='button'>Previous</button></div>"
        );    
        
         
            
             }
             
    no++;
  });
  
 
  
        $("#lokasi")
    .enhanceWithin()
    .controlgroup();
  
  
  },
  error: function (request,error) {
            alert('Network error has occurred please try again!');
  },
  complete:function(){
  
  
    
       
    
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
 $("#loading").hide();
 
   $("#judul").show();
  $("#jumlah").show();


  
        //$("#konten1 input[type='radio']").checkboxradio({ theme: "a" });
        //$("[type='submit']").button();
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
                                          $("#jumlah").hide();

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
        
        
  
    }

   });

  
  
  // Attach a submit handler to the form
$('#submitForm').submit(function( event ) {
 $("#jumlah").hide();

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
  


  
  });
  
  
 
  
</script>


<div id='loading' style="display:none">Sedang di Proses ...</div>



 <?php echo form_open("/ujian/hasilujian/".$this->uri->segment(3),array("id"=>"submitForm"));?> 
<br /><br />  
<div class="clock" ></div>
<br />
<strong style="display:none" id="judul"><?php echo strtoupper($ujian->judul_ujian);?></strong>
<br /><br />

<fieldset id='lokasi' data-role='controlgroup'></fieldset>

<span style="display:none" id="jumlah"><hr /> Total <?php echo $ujian->jumlah_soal;?> Soal</span>

    <?php echo form_close();?>




