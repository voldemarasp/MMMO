<?php
/*
Template Name: Leidiniai
Template Post Type: leidiniai
*/
get_header('leidiniai'); ?>

<div class="leidiniai-container">
	<div class="row leidiniai-first">
		<div class="leidiniai-first-img">
			<img src="<?php echo get_field('nuotrauka')['url'] ?>">
		</div>
		<div class="leidiniai-first-info">
			<div class="leidiniai-first-info-title">
				<h1><?php echo get_field('antraste') ?></h1>
			</div>
			<div class="leidiniai-first-info-tags">
				<p>
					<span>Test</span>
					<span>test</span>
				</p>
			</div>
			<div class="leidiniai-first-more">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/leidiniai-icon.png">
					<p>Perziureti</p>
				</a>
			</div>
		</div>
	</div>
	<div class="row leidiniai-second">
		<div class="leidiniai-second-title">
			<p><?php echo get_field('turinio_antraste') ?></p>
		</div>
		<div class="leidiniai-second-content">
			<?php echo get_field('turinys') ?>
		</div>
	</div>
</div>
<div class="related-leidiniai-container">
	<div class="row leidiniai-third">
		<div class="leidiniai-third-title">
			<h1>Panašūs MO leidiniai</h1>
		</div>
		<div class="row">
			<?php
			$args = array( 'post_type' => 'leidiniai', 'posts_per_page' => 5, 'post__not_in' => array($post->ID) );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="col-for-5">
				<div class="row">
					<div class="col-12 mo-leidiniai-img">
						<a href="<?php the_permalink(); ?>"><img src="<?php echo get_field('nuotrauka')['url'] ?>"></a>
					</div>
					<div class="col-12 mo-leidiniai-title">
						<a href="<?php the_permalink(); ?>"><h3><?php echo get_field('antraste') ?></h3></a>
					</div>
					<div class="col-12 mo-leidiniai-tags">
						<span>Chris Rodrigues</span>
						<span>Chris Rodrigues</span>
						<span>Chris Rodrigues</span>
						<span>Chris Rodrigues</span>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</div>
</div>

<?php get_footer('in');