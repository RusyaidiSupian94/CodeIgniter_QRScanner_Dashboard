<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard</title>    
        <!-- Bootstrap-->
        <link href="<?php echo base_url();?>assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--Common Plugins CSS -->
        <link href="<?php echo base_url();?>assets/css/plugins/plugins.css" rel="stylesheet">
        <!--fonts-->
        <link href="<?php echo base_url();?>assets/lib/line-icons/line-icons.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/lib/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/lib/chartist/chartist.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/css/chartist-custom.css" rel="stylesheet" />
        <!-- jvectormap -->
        <link href="<?php echo base_url();?>assets/lib/vector-map/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

        <!----chart morriss---->

        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/morris.css">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/customdatatable/jquery.dataTables.min.css">



        <!-------------this for pie chart terkini--------->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
        <!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> --> 
        
        <!---this for smh--->
        <!----pie status--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getpiedata' ?>", 
                    dataType: "json", 
                    async: false 
                }).responseText; 
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph100')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie working--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getworking2' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText;
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph101')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie industry--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getindustry' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText; 
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph102')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie state--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getstate' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText; 
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph103')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie funnel--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getfunnel' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText; 
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph104')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie exp--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getexp' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText;
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph105')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie invest--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getinvest' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText;
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph106')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie income-->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getincome' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText;
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph107')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>



        <!---this for amd--->
        <!----pie status--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getpiedataamd' ?>", 
                    dataType: "json", 
                    async: false 
                }).responseText; 
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph200')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie working--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getworking2amd' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText;
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph201')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie industry--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getindustryamd' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText; 
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph202')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie state--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getstateamd' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText; 
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph203')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie funnel--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getfunnelamd' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText; 
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph204')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie exp--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getexpamd' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText;
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph205')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie invest--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getinvestamd' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText;
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph206')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie income-->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getincomeamd' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText;
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph207')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>




        <!---this for smf--->
        <!----pie status--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getpiedatasmf' ?>", 
                    dataType: "json", 
                    async: false 
                }).responseText; 
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph300')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie working--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getworking2smf' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText;
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph301')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie industry--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getindustrysmf' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText; 
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph302')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie state--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getstatesmf' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText; 
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph303')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie funnel--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getfunnelsmf' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText; 
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph304')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie exp--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getexpsmf' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText;
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph305')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie invest--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getinvestsmf' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText;
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph306')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie income-->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getincomesmf' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText;
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph307')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!---this for rcm--->
        <!----pie status--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getpiedatarcm' ?>", 
                    dataType: "json", 
                    async: false 
                }).responseText; 
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph400')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie working--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getworking2rcm' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText;
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph401')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie industry--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getindustryrcm' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText; 
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph402')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie state--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getstatercm' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText; 
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph403')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie funnel--->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getfunnelrcm' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText; 
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph404')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>

        <!----pie exp--->
        <!-- <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getexprcm' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText;
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph405')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script> -->

        <!----pie invest--->
        <!-- <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getinvestrcm' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText;
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph406')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script> -->

        <!----pie income-->
        <script type="text/javascript"> 
     
            // Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages':['corechart']}); 
       
            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart); 
       
            function drawChart() { 
                var jsonData = $.ajax({ 
                    url: "<?php echo base_url() . 'statis/getincomercm' ?>", 
                    dataType: "json",
                    async: false 
                }).responseText;
           
                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData); 
 
                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('graph407')); 
                chart.draw(data, {width: 600, height: 350,pieSliceText: 'none'});
            } 
        </script>
    </head>
    <body class='bg-light'>