<!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="<?php echo base_url()?>assets3/vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="<?php echo base_url()?>assets3/vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo base_url()?>assets3/vendor/bootstrap/js/bootstrap.min.js"></script>
	    <!-- menu  -->
		<script src="<?php echo base_url()?>assets3/vendor/mega-menu/assets/js/custom.js"></script>
		<!-- AOS js -->
		<script src="<?php echo base_url()?>assets3/vendor/aos-next/dist/aos.js"></script>
		<!-- WOW js -->
		<script src="<?php echo base_url()?>assets3/vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="<?php echo base_url()?>assets3/vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script src="<?php echo base_url()?>assets3/vendor/jquery.appear.js"></script>
		<script src="<?php echo base_url()?>assets3/vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="<?php echo base_url()?>assets3/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


		<!-- Theme js -->
		<script src="<?php echo base_url()?>assets3/js/lang.js"></script>
		<script src="<?php echo base_url()?>assets3/js/theme.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

		</div> <!-- /.main-page-wrapper -->
	</body>
</html>