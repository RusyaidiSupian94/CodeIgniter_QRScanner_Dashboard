        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/plugins.js"></script> 
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/appUi-custom.js"></script> 
        <script type="text/javascript" src="<?php echo base_url();?>assets/lib/chartjs/dist/chart.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/lib/peity/jquery.peity.min.js"></script>
        <script src="<?php echo base_url();?>assets/lib/chartist/chartist.min.js"></script>
        <script src="<?php echo base_url();?>assets/lib/chartist/chartist-tooltip.js"></script>
        


        <!-- jvectormap -->
        <script src="<?php echo base_url();?>assets/lib/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="<?php echo base_url();?>assets/lib/vector-map/jquery-jvectormap-world-mill-en.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/dashboard.custom.js"></script>


        <!-- <script src="<?php echo base_url().'assets/js/jquery-3.4.0.min.js'?>"></script> -->
        <script src="<?php echo base_url();?>assets/js/raphael-min.js"></script>
        <script src="<?php echo base_url();?>assets/js/morris.min.js"></script>

        <!--new user--->
        <script>
            Morris.Bar({
                element: 'graph',
                data: <?php echo $data;?>,
                xkey: 'table_name',
                ykeys: ['table_rows'],
                labels: ['user']
            });
        </script>
        

        <!-- <script type="text/javascript" src="<?php echo base_url();?>assets/lib/customdatatable/jquery-3.3.1.js"></script>  -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/lib/customdatatable/jquery.dataTables.min.js"></script>


        <!-- <script>
            Dropzone.options.dropzoneForm = {
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 2, // MB
                dictDefaultMessage: "<strong>Drop files here or click to upload. </strong></br> (This is just a demo dropzone. Selected files are not actually uploaded.)"
            };
        </script> -->
        <script>
            function formToggle(ID){
                var element = document.getElementById(ID);
                if(element.style.display === "none"){
                    element.style.display = "block";
                }else{
                    element.style.display = "none";
                }
            }
        </script>

        <script>
            $(".toggle-password").click(function() {

                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
        </script>
        <script>
            $(document).ready(function() {////ni yang di tambah untk table le
                $('#example').DataTable( {
                    "scrollY": 550,
                    "scrollX": true
                } );
            } );
        </script>
    </body>
</html>


