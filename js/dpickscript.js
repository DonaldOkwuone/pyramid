$(document).ready(function(){
$('.date').datepicker({
    dateFormat: "yy-mm-dd",
  showOn: 'both',
  buttonText: 'Choose a date',
  buttonImage: '../img/calendar.png',
  buttonImageOnly: true,
  numberOfMonths: 1,
	maxDate: '+12m',
  minDate: '-12m -1w',
  showButtonPanel: true
});
});