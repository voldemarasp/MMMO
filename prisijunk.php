<?php
/*
Template name: Prisijunk
*/

get_header('in');
?>
<div class="prisijunk-page-container">
	<div class="row mt-md-5 mt-sm-0">
		<div class="col-12 no-gutters">
			<div id="sticky-tabs" class="row tab-titless text-center">
				<div class="col-4 tab-titles-wrap">
					<span><a href="#narystes">narystės</a></span>
				</div>
				<div class="col-4 tab-titles-wrap">
					<span><a href="#remejams">remėjams</a></span>
				</div>
				<div class="col-4 tab-titles-wrap">
					<span><a href="#savanoriams">savanoriams</a></span>
				</div>
			</div>
			<div class="row">
				<div class="col-12 no-gutters mt-md-5 mt-sm-0">
					<img src="<?php echo get_template_directory_uri(); ?>/img/modernist-text.svg">
				</div>
			</div>
			<div class="row">
				<div class="col-12 no-gutters membership-descr">
					<?php echo get_field('tekstas_apie'); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-4 no-gutters what-you-get">
					<?php echo get_field('ka_gauna_modernistas_antraštė'); ?>
				</div>
				<div class="col-sm-12 col-md-8 what-you-get-list">
					<?php echo get_field('ka_gauna_modernistas_sąrašas'); ?>
				</div>
			</div>
			<div id="narystes" class="row">
				<div class="col-md-4 col-sm-12 pricebox">
					<div class="row">
						<div class="col-12 pt-4 pb-4 pricelist-border-and-background">
							<p class="pricelist-title">Individuali</p>
							<p class="pricelist-subtitle">narystė</p>
						</div>
						<div class="col-12 pt-4 pb-4 pricelist-border">
							<div class="row">
								<div class="col-10">
									<p class="pricelist-price">€ 60.00</p>
									<p class="pricelist-term">metams</p>
								</div>
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri(); ?>/img/pricelist-person-icon.png">
									<p class="pricelist-persons">1</p>
								</div>
								<div class="col-12 mt-5 pricelist-buttons">
									<a class="btn" href="#">Privalumai</a>
									<a class="btn btn-red mt-3" href="#">Pirkti</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 pricebox">
					<div class="row">
						<div class="col-12 pt-4 pb-4 pricelist-border-and-background">
							<p class="pricelist-title">Studento</p>
							<p class="pricelist-subtitle">narystė</p>
						</div>
						<div class="col-12 pt-4 pb-4 pricelist-border">
							<div class="row">
								<div class="col-10">
									<p class="pricelist-price">€ 60.00</p>
									<p class="pricelist-term">metams</p>
								</div>
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri(); ?>/img/pricelist-person-icon.png">
									<p class="pricelist-persons">1</p>
								</div>
								<div class="col-12 mt-5 pricelist-buttons">
									<a class="btn" href="#">Privalumai</a>
									<a class="btn btn-red mt-3" href="#">Pirkti</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 pricebox">
					<div class="row">
						<div class="col-12 pt-4 pb-4 pricelist-border-and-background">
							<p class="pricelist-title">Šeimos</p>
							<p class="pricelist-subtitle">narystė</p>
						</div>
						<div class="col-12 pt-4 pb-4 pricelist-border">
							<div class="row">
								<div class="col-10">
									<p class="pricelist-price">€ 60.00</p>
									<p class="pricelist-term">metams</p>
								</div>
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri(); ?>/img/pricelist-person-icon.png">
									<p class="pricelist-persons">1</p>
								</div>
								<div class="col-12 mt-5 pricelist-buttons">
									<a class="btn" href="#">Privalumai</a>
									<a class="btn btn-red mt-3" href="#">Pirkti</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="col-md-4 col-sm-12 pricebox">
					<div class="row">
						<div class="col-12 pt-4 pb-4 pricelist-border-and-background">
							<p class="pricelist-title">Benefactors</p>
							<p class="pricelist-subtitle">narystė</p>
						</div>
						<div class="col-12 pt-4 pb-4 pricelist-border">
							<div class="row">
								<div class="col-10">
									<p class="pricelist-price">€ 60.00</p>
									<p class="pricelist-term">metams</p>
								</div>
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri(); ?>/img/pricelist-person-icon.png">
									<p class="pricelist-persons">1</p>
								</div>
								<div class="col-12 mt-5 pricelist-buttons">
									<a class="btn" href="#">Privalumai</a>
									<a class="btn btn-red mt-3" href="#">Pirkti</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 pricebox">
					<div class="row">
						<div class="col-12 pt-4 pb-4 pricelist-border-and-background">
							<p class="pricelist-title">Corporate</p>
							<p class="pricelist-subtitle">narystė</p>
						</div>
						<div class="col-12 pt-4 pb-4 pricelist-border">
							<div class="row">
								<div class="col-10">
									<p class="pricelist-price">€ 60.00</p>
									<p class="pricelist-term">metams</p>
								</div>
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri(); ?>/img/pricelist-person-icon.png">
									<p class="pricelist-persons">1</p>
								</div>
								<div class="col-12 mt-5 pricelist-buttons">
									<a class="btn" href="#">Privalumai</a>
									<a class="btn btn-red mt-3" href="#">Pirkti</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="remejams" class="row">
				<div class="col-12 text-center sponsors-block">
					<p class="sponsors-content-title"><?php echo get_field('remėjams_antraštė'); ?></p>
					<div class="sponsors-content-title-border mt-3">
						<span></span>
					</div>
				</div>
				<div class="col-12 mt-5">
					<div class="row">
						<div class="col-md-4 col-sm-12 no-gutters sponsors-contact-info">
							<p class="sponsors-uppercase"><strong>KONTAKTINĖ INFORMACIJA</strong></p>
							<div class="sponsors-contact-info-content"><?php echo get_field('remėjams_kontaktinė_informacija'); ?></div>
						</div>
						<div class="col-md-8 col-sm-12 no-gutters sponsors-desc">
							<?php echo get_field('remėjams_aprašymas'); ?>
						</div>
					</div>
				</div>
			</div>
			<?php $remejai = ot_get_option( 'remejai_prisijunk', array() );
			foreach($remejai as $remejas) { ?>
			<div class="row mt-5">
				<div class="col-12 no-gutters">
					<p class="sponsors-uppercase"><strong><?php echo $remejas['title']; ?></strong></p>
				</div>
			</div>
			<div class="row no-gutters">
				<?php 
				$array=explode(",",$remejas['logotipas']);
				foreach ($array as $logotipas) { 
					?>
					<div class="col-sm-6 col-md-4 mt-5 justify-content-center sponsors-logo-single">
						<a href="<?php the_field('nuotraukos_nuoroda', $logotipas); ?>">
							<img src="<?php echo wp_get_attachment_image_src($logotipas, $size = 'full')[0]; ?>"></a>
						</div>
						<?php } ?>
					</div>
					<?php } ?>
					<div id="savanoriams" class="row">
						<div class="col-12 text-center savanoriams-title">
							<p class="sponsors-content-title"><?php echo get_field('savanoriams_antraštė'); ?></p>
							<div class="sponsors-content-title-border">
								<span></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 no-gutters">
							<div class="savanoriai-slider">
								<?php 
								$savanoriai_slider = ot_get_option( 'savanoriai_slider', array() );

								foreach ($savanoriai_slider as $slider_images) {
									?>
									<div><img src="<?php echo $slider_images['nuotrauka']; ?>"></div>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 no-gutters savanoriai-privalumai">
								<div class="sponsors-uppercase mb-3"><strong>privalumai</strong></div>
								<?php echo get_field('savanoriams_privalumai'); ?>				
							</div>
						</div>
						<div class="row">
							<div class="col-12 no-gutters savanoriai-galimybes">
								<div class="sponsors-uppercase mb-3"><strong>galimybės</strong></div>
								<?php echo get_field('savanoriams_galimybės'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-12 savanoriai no-gutters sponsors-uppercase savanoriai-button">
								<a class="btn" href="<?php echo get_field('savanoriai_mygtuko_nuoroda'); ?>"><?php echo get_field('savanoriai_mygtukas'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php get_footer('in'); ?>