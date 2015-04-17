// JavaScript Document

$(document).ready(function() {
  $('.daterange').daterangepicker(
  { 
    format: 'YYYY-MM-DD',
	changeYear:true
  },
  function(start, end, label) {
  }
);

$('.timerange').daterangepicker({ timePicker12Hour:false,datePicker:false,timePicker: true, timePickerIncrement: 30, format: 'h:mm A' });

});

$(function() {
   $('.money').maskMoney({prefix:'Rp '});
});
