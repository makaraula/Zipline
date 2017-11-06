	</div><!-- end of .main-content -->

	<div class="row footer-top-img"></div>

	<div class="row footer-top">
		<div class="wrapper">
			<h2>Kontaktirajte nas i rezervirajte termin svoje Zip line advanture!</h2>
			<ul>
				<li><strong>t:</strong> +385-98 / 44 22 55</li>
				<li><strong>e:</strong> <a href="mailto:zipline.cikola@gmail.com">zipline.cikola@gmail.com</a></li>
				<li><strong>e:</strong> <a href="mailto:zadruga@miljevci.com">zadruga@miljevci.com</a></li>
			</ul>

			<?php
			 if(strpos($_SERVER['REQUEST_URI'], 'kontakt.php') != 0 )
			 {
			 ?>
			 		<div id="map"></div>
			 <?php }else{?>
				 	<div class="map-img fw">
				 		<a href="kontakt.php"><img src="../images/map-img.jpg" alt=""></a>
					</div><!-- end of .map-img -->
			<?php }?>

		</div><!-- end of .wrapper -->
	</div><!-- end of .footer-top -->

	<div class="row footer">
		<div class="wrapper">
			<div class="clear row">
				<span class="copy aleft"><?php echo date("Y");?> &copy; Zip line Čikola - Sva prava pridržana</span>
			</div><!-- end of .clear -->
		</div><!-- end of .wrapper -->
	</div><!-- end of .footer -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script src="../js/magnific-popup/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="../js/functions.js"></script>

	<!-- HTML5 shiv and respond.js for IE8 support of HTML5 elements and media queries -->
	  <!--[if lt IE 9]>
	    <script src="js/html5shiv.min.js"></script>
	    <script src="js/respond.min.js"></script>
	  <![endif]-->

</body>
</html>
