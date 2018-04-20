<?php
/*
Template name: Biblioteka
*/

get_header('in');
?>
<div class="biblioteka-page-container">
	<div class="row">
		<div class="first-block">
			<h1><?php echo get_field('antraste'); ?></h1>
			<p><?php echo get_field('tekstas_po_antraste'); ?></p>
		</div>
		<div class="slider-block">
			<div class="row">
				<div class="col-12">
					<div class="arhitektura-slider">
						<?php
						if( have_rows('slider') ):
							while ( have_rows('slider') ) : the_row();
								?><img src="<?php echo get_sub_field('slider_image')['url']; ?>"><?php
							endwhile;
						else :
							?><img src="<?php echo get_template_directory_uri(); ?>/img/hero-img1.png"><?php
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row second-block">
		<div class="col-md-6 col-sm-12 first-content">
			<p><?php echo get_field('turinio_aprasymas'); ?></p>
			<a href="<?php echo get_field('mygtuko_nuoroda'); ?>" class="btn grey-btn"><?php echo get_field('mygtuko_tekstas'); ?></a>
		</div>
		<div class="col-md-6 col-sm-12 second-content">
			<div class="content"><?php echo get_field('turinys'); ?></div>
			<span class="readmore">skaityti daugiau</span>
		</div>
	</div>
	<div class="row mo-leidiniai">
		<div class="col-12">
			<h1>MO leidiniai</h1>
		</div>
		<div class="col-12">
			<div class="row">
				<?php
				$args = array( 'post_type' => 'leidiniai', 'posts_per_page' => 5 );
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
</div>
</div>

<?php get_footer('in') ?>