$(function () {
    $('#datetimepicker').datetimepicker();
    $('#timepicker').datetimepicker({
        datepicker: false,
        format: 'H:i'
    });
    
 $('#datetimepicker_mask').datetimepicker({
 timepicker:false,
 mask:true // '9999/19/39 29:59' - digit is the maximum possible for a cell
});
$('#picker-weekend-dis').datetimepicker({
  onGenerate:function( ct ){
    $(this).find('.xdsoft_date.xdsoft_weekend')
      .addClass('xdsoft_disabled');
  },
  weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
  timepicker:false
});
$(function(){
 $('#date_timepicker_start').datetimepicker({
  format:'Y/m/d',
  onShow:function( ct ){
   this.setOptions({
    maxDate:$('#date_timepicker_end').val()?$('#date_timepicker_end').val():false
   });
  },
  timepicker:false
 });
 $('#date_timepicker_end').datetimepicker({
  format:'Y/m/d',
  onShow:function( ct ){
   this.setOptions({
    minDate:$('#date_timepicker_start').val()?$('#date_timepicker_start').val():false
   });
  },
  timepicker:false
 });
});
});



