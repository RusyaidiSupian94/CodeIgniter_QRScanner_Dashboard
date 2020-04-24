<!--back to top-->
        <a href="#" class="back-to-top" id="back-to-top"><i class="icon-chevron-up"></i></a>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/plugins.js"></script> 
        <!--tweet-scroller-->
        <script src="<?php echo base_url()?>assets/tweetie/tweetie.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/js/landing.custom.js"></script> 
    </body>
    
    <!----this for sweet alert and qrcode---->
        <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
         <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>
    
    <script type="text/javascript">
      	let scanner = new Instascan.Scanner({ video: document.getElementById('preview'),mirror:false, });
      	scanner.addListener('scan', function (data) {
        	var url="<?php echo base_url();?>";
        	$.ajax({
          		url:url+'pickupqrmmh/validation',
          		type:"post",
          		data:{code:data},
          		success:function(data){
            	//alert("good job");
            	// console.log(data);
            	 ///alert(data);
           			// swal(data)
            		// .then(function() {
              // 			window.location = "<?php echo base_url().'validation'?>";/////////////this for go to other page
            		// });
            	//window.location.href = "<?php echo base_url().'validation'?>";
              $("#message").html(data);
          		}
        	});
        //alert(data);
      	});

      	Instascan.Camera.getCameras().then(function (cameras) {
        	if (cameras.length > 0) {
          		scanner.start(cameras[0]);////cahnge '0' to 1 that change the camera usestage for mobile only.1 for back camera and 0 for swap photo
        	} else {
          		console.error('No cameras found.');
        	}
      	}).catch(function (e) {
        	console.error(e);
      	});
  	</script>
</html>