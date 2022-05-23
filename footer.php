	<!-- Welcome and Contact Section -->
	<section class="container-wrapper">
		<div class="container">
			<hr style="height: 1px; width: 100%; background-color: #62585f; margin: 20px 0px;">
			<div class="wc">
				<div class="welcome">
					<h3 class="wc__heading">Welcome to D'SIGN<em>fly</em></h3>
					<p class="wc__description">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. consectetur adipisicing elit, sed do eiusmod tempor ut incididunt labore.</p>
					<a class="wc__read-more">Read more</a>
				</div>
				<div class="contact">
					<h3 class="wc__heading">Contact us</h3>
					<p class="wc__description">Street 21 Planet, A-11, dapibus tristique. 123 551 <br>
						Tel: 123 4567890; Fax: 123 456789 <br>
						Email: <a href="mailto: contactus@dsignfy.com">contactus@dsignfy.com</a>
					</p>
					<img class="wc__social-icons cursor-pointer" id="wc-fb" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="fb" width="1" height="1">
					<img class="wc__social-icons cursor-pointer" id="wc-g" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="gplus" width="1" height="1">
					<img class="wc__social-icons cursor-pointer" id="wc-linkedin" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="gplus" width="1" height="1">
					<img class="wc__social-icons cursor-pointer" id="wc-pinterest" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="gplus" width="1" height="1">
					<img class="wc__social-icons cursor-pointer" id="wc-twitter" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="gplus" width="1" height="1">
				</div>
			</div>
			<hr style="height: 1px; background-color: #62585f; margin-top: 30px;">
		</div>
	</section>

	<!-- Footer -->
	<footer>
		<div class="container-wrapper">
			<div class="container">
				<?php dynamic_sidebar( 'footer-1' ); ?>
				<div class="footer__copyright">
					<p>
						&copy; 2012 - D'SIGNfly | Designed by <span class="footer__designed-by">rtCamp</span>
					</p>
				</div>
				<!-- //copyright -->
			</div>
			<!-- //container -->
		</div>
	</footer>

	<?php wp_footer(); ?>
