$('.post_date').datetimepicker({ dateFormat: 'yy-mm-dd',changeYear:true,changeMonth:true});

$(document).ready(function(){
	     $('#datatable').dataTable({"iDisplayLength": 15,
 							"sPaginationType": "full_numbers",
							"bInfo": false,
							"bPaginate": true,
							"bProcessing": false,
							"bServerSide": false,
							"bLengthChange": false});
							
			if($("#wysiwyg").length > 0){
                editor = $("#wysiwyg").cleditor({width:"800px", height:"450px"})[0].focus();                
            }  
			
			if($("#wysiwyg2").length > 0){
                editor = $("#wysiwyg2").cleditor({width:"800px", height:"450px"})[0].focus();                
            }  
			
	   } );
	   
function submit_form(form){

document.getElementById(form).submit();	
		
}



var _URL = window.URL;
$(".photoInput").change(function (e) {
	var maxwidth=768;
	var maxheight=600;
	var fileName = $(".photoInput").val();
	 var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
    var file, img;
    if ((file = this.files[0])) {
        img = new Image();
        img.onload = function () {
			if(this.width > maxwidth ){
				alert("Width  " + this.width + "  Gambar Terlalu Besar Max "+maxwidth+" px silakan resize terlebih dahulu");
				$('#save').attr('disabled',"disabled");
				$('#draft').attr('disabled',"disabled");
			}else if(this.height > maxheight){
			
						alert("Height  " + this.height + "  Gambar Terlalu Tinggi Max "+maxheight+" px silakan resize terlebih dahulu");
					$('#save').attr('disabled',"disabled");
						$('#draft').attr('disabled',"disabled");
			}else if(ext != "jpg"){
            
			alert("gambar harus berektensi JPG");
			$('#save').attr('disabled',"disabled");
			$('#draft').attr('disabled',"disabled");
			
			}else{
			$('#save').removeAttr( "disabled" );
			$('#draft').removeAttr( "disabled" );
			}
			
        };
        img.src = _URL.createObjectURL(file);
    }
});
	   