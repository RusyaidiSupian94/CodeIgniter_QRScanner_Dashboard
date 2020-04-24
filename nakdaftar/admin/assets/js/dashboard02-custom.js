/* 
E-commerce Dashboard
 */
$(function () {
    "use strict";
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
$(".custom-select").select2();

  new Chartist.Line('.ct-chart', {
        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
        series: [
            [32, 39, 27, 48, 35],
            [22, 21, 15, 27, 13]
        ]
    }, {
        fullWidth: true,
        hight: 300,
        chartPadding: {
            right: 40
        },
        plugins: [
            Chartist.plugins.tooltip()
        ]
    });
    });

