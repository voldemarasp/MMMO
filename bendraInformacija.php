<?php
/*
Template name: Bendra informacija
*/

get_header('in');
?>

<div class="bendraInformacija-page-container">
	<div class="row bendra-informacija">
		<div class="col-12">
			<h1><?php echo get_field('antraste') ?></h1>
		</div>
		<div class="col-12 bendra-informacija-mobile-contacts">
			<div class="bendra-informacija-mobile-contacts-title">
				<p>Kontaktai</p>
			</div>
			<div class="bendra-informacija-mobile-contacts-content">
				<p>Literatų g. 8,</p>
				<p>01125 Vilnius</p>
				<p>info@mmcentras.lt</p>
				<p>+370 5 231 2350</p>
			</div>
		</div>
		<div class="col-12">
			<div id="floating-panel">
				<b>Start: </b>
				<select id="start">
					<option value="chicago, il">Chicago</option>
					<option value="st louis, mo">St Louis</option>
					<option value="joplin, mo">Joplin, MO</option>
					<option value="oklahoma city, ok">Oklahoma City</option>
					<option value="amarillo, tx">Amarillo</option>
					<option value="gallup, nm">Gallup, NM</option>
					<option value="flagstaff, az">Flagstaff, AZ</option>
					<option value="winona, az">Winona</option>
					<option value="kingman, az">Kingman</option>
					<option value="barstow, ca">Barstow</option>
					<option value="san bernardino, ca">San Bernardino</option>
					<option value="los angeles, ca">Los Angeles</option>
				</select>
				<b>End: </b>
				<select id="end">
					<option value="chicago, il">Chicago</option>
					<option value="st louis, mo">St Louis</option>
					<option value="joplin, mo">Joplin, MO</option>
					<option value="oklahoma city, ok">Oklahoma City</option>
					<option value="amarillo, tx">Amarillo</option>
					<option value="gallup, nm">Gallup, NM</option>
					<option value="flagstaff, az">Flagstaff, AZ</option>
					<option value="winona, az">Winona</option>
					<option value="kingman, az">Kingman</option>
					<option value="barstow, ca">Barstow</option>
					<option value="san bernardino, ca">San Bernardino</option>
					<option value="los angeles, ca">Los Angeles</option>
				</select>
			</div>
			<div id="map"></div>
		</div>
		<div class="col-12">
			<div class="row">
				<?php
				if( have_rows('kontaktai') ):
					while ( have_rows('kontaktai') ) : the_row(); ?>
					<div class="col-md-3 col-sm-6">
						<div class="row">
							<div class="col-12 bendra-informacija-kontaktai">
								<div class="bendra-informacija-kontaktai-title"><?php echo get_sub_field('antraste'); ?></div>
								<?php echo get_sub_field('kontaktiniai_duomenys'); ?>
							</div>
						</div>
					</div>
				<?php endwhile;
			endif;
			?>
		</div>
	</div>
</div>
<div class="row bendra-informacija-duk">
	<div class="col-12">
		<h1><?php echo get_field('duk_antraste'); ?></h1>
	</div>
	<div class="col-12 bendra-informacija-duk-content">
		<?php echo get_field('duk_turinys'); ?>
	</div>
</div>
</div>

<?php
get_footer('map');