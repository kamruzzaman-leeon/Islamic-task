<!DOCTYPE html>
<html lang="en">

<body>
    <div class="backward">
        <a href="javascript:history.back()" class="btn btn-outline-danger"><i class="fas fa-backward"></i> পূর্ববর্তী গন্তব্য</a>
    </div>
    <div class="forward">
        <a href="javascript:history.forward()" class="btn btn-outline-danger">পরবর্তী গন্তব্য <i class="fas fa-forward"></i></a>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section>
        <footer class="page-footer fixed font-small pt-2 bg-dark">
            <!-- Copyright -->
            <!-- <hr class="my-1"> -->
            <div class="footer-copyright text-center py-2 bg-dark"><span> © সর্বস্বত্ব স্বত্বাধিকার
                    সংরক্ষিত | কামরুজ্জামান লীওন ২০২২ </span></div>
            <!-- Copyright -->
            </div>
        </footer>
    </section>
    <script>
			//Get the button
			var mybutton = document.getElementById("myBtn");
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};
			function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
			} else {
			mybutton.style.display = "none";
			}
			}
			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
			}
		</script>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>