
<script>
    
/* 
 * untuk ujian dan detail ujian
 */  


function showLoading(){
    
    $('body').addClass('ui-loading');
    $.mobile.loading('show', {theme:"b", text:"Sedang dimuat...", textVisible: true});
    
}

function hideLoading(){
    
    $('body').removeClass('ui-loading'); 
    $.mobile.loading( 'hide' );
    
}

 
    $(document).on('pagecreate', '#ujian', function(){    
         
    showLoading();
       
    var url = '<?php echo site_url("ujian/getDataUjian");?>';
        
    $.ajax({
        url: url ,
        dataType: "json",
        async: true,
        success: function (result) {
            ajaxUjian.parseJSON(result);
            hideLoading();
            
        },
        error: function (request,error) {
            alert('Network error has occurred please try again!');
        }
    });         
});

var ujianInfo = {
    id : null,
    results : null
};

var img ="";
var ajaxUjian = {  
    parseJSON:function(result){
        ujianInfo.results = result;
             $.each(result, function(i, row) {
            if(row.price==0){
            img='<img src="<?php echo Template::theme_url("images/free.png");?>" style="width:64px;left:5px;top:5px">';
            }else{
               img='<img src="<?php echo Template::theme_url("images/free.png");?>" style="width:64px;left:5px;top:5px">';
           
            }
                 
            $('#ujian-list').append('<li><a href="" data-id="' + row.id + '">'+ img +'<h3>' + row.judul + '</h3><p style="white-space:normal;">' + row.keterangan + '</p></a></li>');
             
       
       });
            $('#ujian-list').listview('refresh');
    }
};

var judulUjian="";
var waktuUjian="";
var idujian="";

$(document).on('pagebeforeshow', '#detailujian', function(){      
    $('#ujian-data').empty();
    $.each(ujianInfo.results, function(i, row) {
        if(row.id == ujianInfo.id) {
            $('#ujian-data').append('<li><h1 style="font-size:24px">'+row.judul+'</h1><p style="white-space:normal;font-size:20px">'+row.keterangan+'</p></li>');
            $('#ujian-data').append('<li><p style="white-space:normal;font-size:20px">Total Score : '+row.score+'</p></li>');    
            $('#ujian-data').listview('refresh');
        }
    });    
    showLoading();
    //get list part ujian 
    $.ajax({
        url: "<?php echo site_url("/ujian/part_ujian");?>/"+ujianInfo.id,
        dataType: "json",
        async: true,
        success: function (result) {
                $('#kontent_part').empty();
                var currentState = 'ui-block-b';
                $.each(result, function(i, row2) {
                    if(currentState=="ui-block-b"){
                        currentState="ui-block-a";
                    }else{
                        currentState="ui-block-b";
                    }
                    
                    if(row2.disabled==0){
                        var uidisabled="ui-disabled";
                        var graygambar="quiz_gray.png";
                        var boxproduk="box-produk";
                    }else{
                        var uidisabled="";
                        var boxproduk="box-produk";
                        var graygambar="quiz.png";
                        
                    }
                    
                    if(row2.status_login==0){
                    $("#message").show().html(row2.message);
                    }else{
                    $("#message").hide().html(row2.message);    
                    }
                    
                    $("#kontent_part").append('<div class="'+currentState+'"><div class="ui-bar ui-bar-a '+boxproduk+'"><div class="produk" style="text-align:center;font-size:13px"><a style="text-decoration:none" class="'+uidisabled+' link_startujian" data-role="button" data-id="'+row2.kode_ujian+'" data-judul="'+row2.judul_ujian+'" data-durasi="'+row2.durasi_waktu+'" href="#" id="link_startujian"><img src="<?php echo Template::theme_url("images");?>/'+graygambar+'" style="width:64px;"><br /><h6 style="text-align:center">'+row2.judul_ujian+'</h6><br /><small>'+row2.jawaban_benar+'/'+row2.jumlah_soal+'</small></a></div></div>');
                    

                });
                
                hideLoading();
            
        },
        error: function (request,error) {
            alert('Network error has occurred please try again!');
        }
    });
    /* 
    $.ajax({
        url: "<?php echo site_url("/ujian/register_ujian");?>/"+ujianInfo.id,
        dataType: "json",
        async: true,
        success: function (result) {
                
                if(result.status_login==0){
                    $("#message").show().html(result.message);
                }else{
                    $("#buttonstart").show();
                    $("#link_startujian").attr("data-id",ujianInfo.id);
                }
                hideLoading();
            
        },
        error: function (request,error) {
            alert('Network error has occurred please try again!');
        }
    });
    */
    
});

$(document).on('vclick', '#ujian-list li a', function(){  
    ujianInfo.id = $(this).attr('data-id');
    
      
    $.mobile.changePage( "#detailujian", { transition: "slide", changeHash: false });
});


//cara pembayaran klik 
$(document).on('vclick', '#link_pembayaran', function(){ 
        
        $.mobile.changePage( "#pembayaran", { transition: "slide", changeHash: false });

});    

$(document).on('pagebeforeshow', '#pembayaran', function(){    
    $('#isi_pembayaran').empty();
        var urlpage = $("#link_pembayaran").attr('data-id');
        showLoading();
        $.ajax({
        url: urlpage,
        async: true,
        success: function (result) {
          $("#isi_pembayaran").append(result);
            hideLoading();
        },
        error: function (request,error) {
            alert('Network error has occurred please try again!');
        }
    });
        
});

//peringkat

$(document).on('pagebeforeshow', '#peringkat', function(){    
    $('#peringkat-list').empty();
        var urlpage = $("#link_peringkat").attr('data-id');
        var img="";
        showLoading();
       $.ajax({
        url: urlpage,
        dataType: "json",
        async: true,
        success: function (result) {
            
              $.each(result, function(i, row) {
              img='<img src="<?php echo base_url();?>application/modules/member/foto/'+row.foto+'" style="width:64px;left:5px;top:5px">';
                 
            $('#peringkat-list').append('<li><a href="#">'+ img +'<h3>' + row.display_name + '</h3><p>Dengan Score : ' + row.score + '</p></a></li>');
        });
            $('#peringkat-list').listview('refresh');
            
            hideLoading();
            
        },
        error: function (request,error) {
            alert('Network error has occurred please try again!');
        }
    }); 
        
});


//member

$(document).on('pagebeforeshow', '#member', function(){    
    $('#member-list').empty();
       var urlpage = $("#link_member").attr('data-id');
       var img="";
       
       showLoading();
       
       $.ajax({
        url: urlpage,
        dataType: "json",
        async: true,
        success: function (result) {
            
              $.each(result, function(i, row) {
              img='<img src="<?php echo base_url();?>application/modules/member/foto/'+row.foto+'" style="width:64px;left:5px;top:5px">';
                 
            $('#member-list').append('<li><a href="#">'+ img +'<h3>' + row.display_name + '</h3><p>Universitas : ' + row.universitas + '</p></a></li>');
        });
            $('#member-list').listview('refresh');
            
            hideLoading();
            
        },
        error: function (request,error) {
            alert('Network error has occurred please try again!');
        }
    }); 
        
});

//start ujian

$(document).on('vclick', '#link_startujian', function(){ 
       judulUjian=$(this).attr('data-judul');;
        waktuUjian=$(this).attr('data-durasi');;
        idujian=$(this).attr('data-id');;
        showLoading();
    
     $.mobile.changePage( "#startujian", { showLoadMsg:true,changeHash: false,transition: "pop", reverse: false });

}); 




$(document).on('pagebeforeshow', '#startujian', function(){   
    
      
    
         $('#isi_soal').controlgroup("container").empty(); 
        var id = idujian;
        var no=1;
       
        $.ajax({
        url: "<?php echo site_url("ujian/soal/");?>/"+id,
        dataType: "json",
        async : true,
        beforeSend: function() {
              
            
        },
        success: function (question12) {
            
            var jumlah = question12.length;
            $("#jumlah").show().html("Jumlah Soal : "+jumlah);
            $("#judul").show().html(judulUjian);
            
            $.each(question12, function(i, item) {
      
    if(no==1){ 
          
          $('#isi_soal')
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
         
           
          $('#isi_soal')
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
             $('#isi_soal')
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
  
  
  
        $("#isi_soal")
    .enhanceWithin()
    .controlgroup();
            
            
        },
        error: function (request,error) {
            alert('Network error has occurred please try again!');
        },
          complete:function(){
  
  
          hideLoading();
       
    
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


                var clock;
var waktu;
waktu = 60 * waktuUjian;

			clock = $('.clock').FlipClock({
		        clockFace: 'HourlyCounter',
		        autoStart: false,
		        callbacks: {
		        	stop: function() {
		        		 showLoading();
					  var form = $('#submitForm');
					  var url = form.attr('action');
                                          $("#jumlah").hide();

					  $('#loading').show();  
					  // Send the data using post
					  var posting = $.post( url,$('#submitForm').serialize());
					 
					  // Put the results in a div
					  posting.done(function(data) {
                                                   hideLoading();
						   window.location='<?php echo site_url("/ujian/nilaiujian");?>/'+id+'/'+data;
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
showLoading();
  // Stop form from submitting normally
  event.preventDefault();
 
  // Get some values from elements on the page:
  var form = $(this);
  var url = "<?php echo site_url("/ujian/hasilujian/");?>/"+id;
 
  // Send the data using post
  var posting = $.post( url,$('#submitForm').serialize());
 $('#loading').show();  
 $('#submitForm').hide();
  // Put the results in a div
  posting.done(function(data) {
          hideLoading();
          window.location='<?php echo site_url("/ujian/nilaiujian");?>/'+id+'/'+data;
          
      // $.mobile.changePage( "#nilaiujian", { showLoadMsg:true,changeHash: false,transition: "pop", reverse: false });
   
          
  });
});
    
        
});

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60803142-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>