<!-- <main class="content"> -->
</div><!-- app's main wrapper end -->
        <!-- Common plugins -->
        <script type="text/javascript" src="<?php echo base_url()?>assets2/js/plugins/plugins.js"></script> 
        <script type="text/javascript" src="<?php echo base_url()?>assets2/js/appUi-custom.js"></script> 
        <script type="text/javascript" src="<?php echo base_url()?>assets2/lib/chartjs/dist/chart.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets2/lib/peity/jquery.peity.min.js"></script>
        <script src="<?php echo base_url()?>assets2/lib/chartist/chartist.min.js"></script>
        <script src="<?php echo base_url()?>assets2/lib/chartist/chartist-tooltip.js"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url()?>assets2/lib/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="<?php echo base_url()?>assets2/lib/vector-map/jquery-jvectormap-world-mill-en.js"></script>
       <script type="text/javascript" src="<?php echo base_url()?>assets2/js/dashboard.custom.js"></script> 

        <script src="<?php echo base_url()?>assets2/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets2/js/raphael-min.js"></script>
        <script src="<?php echo base_url()?>assets2/js/morris.min.js"></script>

        <script>
        Morris.Bar({
          element: 'graph',
          data: <?php echo $graph;?>,
          xkey: 'month',
          ykeys: ['primier','mastery'],
          labels: ['Primier','Mastery']
        });
</script>

    </body>
</html>
