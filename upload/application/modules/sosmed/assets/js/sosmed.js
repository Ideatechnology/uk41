var _URL = window.URL;
$("#filebanner").change(function (e) {
	$('#save').removeAttr( "disabled" );
	var maxwidth=200;
	var maxheight=200;
	var fileName = $("#filebanner").val();
	 var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
    var file, img;
    if ((file = this.files[0])) {
        img = new Image();
        img.onload = function () {
			if(this.width > maxwidth ){
				alert("Width  " + this.width + "  Gambar Terlalu Besar Max "+maxwidth+" px silakan resize terlebih dahulu");
				$('#save').attr('disabled',"disabled");
				fileName ="";
			}else if(this.height > maxheight){
			
						alert("Height  " + this.height + "  Gambar Terlalu Tinggi Max "+maxheight+" px silakan resize terlebih dahulu");
					$('#save').attr('disabled',"disabled");
					fileName ="";
			}else{
			$('#save').removeAttr( "disabled" );
			}
			
        };
        img.src = _URL.createObjectURL(file);
    }
});