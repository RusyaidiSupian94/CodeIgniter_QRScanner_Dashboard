/* 
 Peity charts
 */
$(function () {
    "use strict";
    $(".bar").peity("bar", {
        fill: ["#0084ff", "#e7f3fe"],
        height: 80,
        width: 100
    });
      $(".line").peity("line",{
        fill: '#e7f3fe',
        stroke:'#0084ff',
         height:80,
        width:100
    });
      $(".donut").peity("donut",{
        fill: ['#0084ff', '#2cddbe', '#f3d768'],
         height:80,
        width:80
    });
        var updatingChart = $(".updating-peity").peity("line", { fill: '#0084ff',stroke:'#1072ce',height:80, width: 120 });

    setInterval(function() {
        var random = Math.round(Math.random() * 10);
        var values = updatingChart.text().split(",");
        values.shift();
        values.push(random);

        updatingChart
            .text(values.join(","))
            .change();
    }, 1000);
});


