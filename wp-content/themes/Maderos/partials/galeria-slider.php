<section>
	<div class="main-galery__avance">
		<div class="title-general">
			<h3>AVANCE DE LA OBRA</h3>
			<hr>
		</div>

		<div class="">
			<div class="main-galery__grid">
				<div class="grid-slider-galeria">


					<div class="grid-slide-galeria d-none d-sm-block d-md-block d-lg-block">
						<?php $args = array( 'post_type' => 'Avance');?>   
						<?php $loop = new WP_Query( $args ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<img class="wow zoomIn" data-wow-delay='0.1s' src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
						<?php endwhile; ?>


					</div>
					<div class="grillas d-grid d-sm-none d-md-none d-lg-none">
						<?php $args = array( 'post_type' => 'Avance');?>   
						<?php $loop = new WP_Query( $args ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<div class="content-image__mobile">

							<img class="wow zoomIn" data-wow-delay='0.1s' src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
						</div>
						<?php endwhile; ?>
					</div>

				</div>

			</div>
			<div id="ubicacion"></div>

		</div>
	</section>
