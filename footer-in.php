<footer>
	<div class="container-fluid prisijunk-footer">
		<div class="row prisijunk-footer-block-margin">
			<div class="col-12 d-flex justify-content-center pt-5 pb-5 pr-3 pl-3">
				<img src="<?php echo get_template_directory_uri(); ?>/img/mmo-logo-black.png">
			</div>
			<div class="col-12 text-center prisijunk-footer-subtitle">
				<p>Gauk visas muziejaus naujienas</p>
			</div>
			<div class="col-12 mt-4 d-flex justify-content-center prisijunk-footer-socials">
				<ul>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/fb-icon.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/fb-icon.png"></li>
				</ul>
			</div>
			<div class="footer__subscribe subscribe">
				<form action="" class="subscribe__form">
					<input type="text" class="form-control subscribe__control" placeholder="El. paštas">
					<button class="btn subscribe__btn">užsakyti</button>
				</form>
			</div>
			<div class="col-12 mt-3 mb-3 d-flex justify-content-center prisijunk-footer-socials-laptop">
				<ul>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/fb-icon.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/fb-icon.png"></li>
				</ul>
			</div>
			<div class="col-12 d-flex justify-content-center prisijunk-sponsors">
				<div class="prisijunk_sponsors pb-4 pt-4">
					<div class="prisijunk-remejai-title subtitle">Remėjai</div>
					<div class="mt-4">
						<?php $remejai = ot_get_option( 'remejai', array() ); ?>
						<?php foreach ($remejai as $remejas) { ?>
						<a href="<?php echo $remejas['nuoroda']; ?>" class="sponsor__item">
							<img src="<?php echo $remejas['tamsus_logotipas']; ?>" alt="">
						</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row prisijunk-footer-copyrights mt-3 mb-3">
			<div class="col-md-6 col-sm-12 footer-copy-first">
				<p>Copyright 2017 Mo All Rights Reserved.</p>
			</div>
			<div class="col-md-6 col-sm-12 footer-copy-second">
				<p>Sprendimas: zet.lt</p>
			</div>
		</div>
	</div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.min.js"></script>
</body>
</html>