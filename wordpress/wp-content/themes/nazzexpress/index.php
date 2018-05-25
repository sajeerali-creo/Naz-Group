<?php
/* Template Name: home */
?>
<?php get_header(); ?>

<section class="home-section home-parallax home-fade" id="home">
	<div class="hero-slider">
		<ul class="slides">

			<?php
				query_posts('category_name=HomeSlider' );
				while ( have_posts() ) : the_post();
				$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			?>

			<li class="bg-dark-30 bg-dark" style="background:url('<?php echo $feat_image; ?>'); background-size: cover;background-position: center center;">
				<div class="titan-caption">
					<div class="caption-content">
						<div class="font-alt mb-30 titan-title-size-1"><?php echo get_post_meta($post->ID,'subtitle',true);?></div>
						<div class="font-alt mb-40 titan-title-size-4"><?php echo get_the_title(); ?></div><a class="section-scroll btn btn-border-w btn-round" href="#about">Learn More</a>
					</div>
				</div>
			</li>

			<?php
				endwhile;
			?>

		</ul>
	</div>
</section>

<div class="main">
	<section class="module-extra-small bg-naz">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-8 col-lg-6 col-lg-offset-2">
					<div class="callout-text font-alt">
						<h4 style="margin-top: 0px; font-;">You Looking for highest Standerd of Service?</h4>
						<p style="margin-bottom: 0px;">We are always here for you</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-2">
					<div class="callout-btn-box"><a class="btn btn-danger btn-round" href="#">Contact Us</a></div>
				</div>
			</div>
		</div>
	</section>

	<section class="module" id="about">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="module-title font-alt">Welcome to Nazz Express</h2>
					<div class="module-subtitle font-serif large-text">
						<?php
							query_posts('category_name=WelcomeToNazzExpress' );
							while ( have_posts() ) : the_post();
							$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						?>
						<?php the_content(); ?>
						<?php
							break;
							endwhile;
						?>
						</div>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-2 col-sm-offset-5">
					<div class="large-text align-center"><a class="section-scroll" href="#services"><i class="fa fa-angle-down"></i></a></div>
				</div>
			</div>
		</div>
	</section>
	<hr class="divider-w">

	<section class="module" id="services">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2 class="module-title font-alt">Our Services</h2>
					<div class="module-subtitle font-serif">
						We aim Globally to provide the highest standard of services with Integrity
					</div>
				</div>
			</div>
			<div class="row multi-columns-row">
				<div class="col-md-4 col-sm-6 col-xs-12 hvr-shutter-out-vertical">
					<div class="features-item">
						<div class="features-icon"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fright.svg"></span></div>
						<h3 class="features-title font-alt">Airfreight</h3>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 hvr-shutter-out-vertical">
					<div class="features-item">
						<div class="features-icon"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ship.svg"></span></div>
						<h3 class="features-title font-alt">Sea freight</h3>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 hvr-shutter-out-vertical">
					<div class="features-item">
						<div class="features-icon"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/logistic.svg"></span></div>
						<h3 class="features-title font-alt">Customs clearing</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 hvr-shutter-out-vertical">
					<div class="features-item">
						<div class="features-icon"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/truck.svg"></span></div>
						<h3 class="features-title font-alt">Land Transportation</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 hvr-shutter-out-vertical">
					<div class="features-item">
						<div class="features-icon"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/warehouse.svg"></span></div>
						<h3 class="features-title font-alt">Warehousing</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 hvr-shutter-out-vertical">
					<div class="features-item">
						<div class="features-icon"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/route.svg"></span></div>
						<h3 class="features-title font-alt">Fleet management</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 hvr-shutter-out-vertical">
					<div class="features-item">
						<div class="features-icon"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/automobile.svg"></span></div>
						<h3 class="features-title font-alt">Automobile logistics </h3>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="module bg-dark-60 parallax-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/finance/finance_funfact_bg.jpg" style="background-position: 50% 15%;">
		<div class="container">
			<div class="row multi-columns-row">
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="count-item mb-sm-40">
						<div class="count-icon"><span class="icon-megaphone"></span></div>
						<h3 class="count-to font-alt" data-countto="4"></h3>
						<h5 class="count-title font-serif">Best Services</h5>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="count-item mb-sm-40">
						<div class="count-icon"><span class="icon-global"></span></div>
						<h3 class="count-to font-alt" data-countto="2"></h3>
						<h5 class="count-title font-serif">Naz Express in Globel</h5>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="count-item mb-sm-40">
						<div class="count-icon"><span class="icon-happy"></span></div>
						<h3 class="count-to font-alt" data-countto="790"></h3>
						<h5 class="count-title font-serif">Happy Customers</h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="module pt-0 pb-0">
		<div class="row position-relative m-0">
			<div class="col-xs-12 col-md-6 side-image" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/section-14.svg"></div>
			<div class="col-xs-12 col-md-6 col-md-offset-6">
				<div class="row finance-image-content">
					<div class="col-md-10 col-md-offset-1">
						<h2 class="module-title font-alt align-left">Chairman's Message</h2>
						<div class="row multi-columns-row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="alt-features-item">
									<div class="alt-features-icon"><span class="icon-strategy red-color"></span></div>
									<h3 class="alt-features-title font-alt">Nazz History</h3>
									<?php
										query_posts('category_name=NazzHistory' );
										while ( have_posts() ) : the_post();
										$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
									?>
									<?php the_content(); ?>
									<?php
										break;
										endwhile;
									?>
								</div>
								<div class="alt-features-item">
									<div class="alt-features-icon"><span class="icon-lightbulb red-color"></span></div>
									<h3 class="alt-features-title font-alt">Our Success</h3>
									<?php
										query_posts('category_name=NazzSuccess' );
										while ( have_posts() ) : the_post();
										$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
									?>
									<?php the_content(); ?>
									<?php
										break;
										endwhile;
									?>
								</div>
								<div class="alt-features-item">
									<div class="alt-features-icon"><span class="icon-target red-color"></span></div>
									<h3 class="alt-features-title font-alt">Our Advantage</h3>
									<?php
										query_posts('category_name=NazzAdvantage' );
										while ( have_posts() ) : the_post();
										$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
									?>
									<?php the_content(); ?>
									<?php
										break;
										endwhile;
									?>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="module bg-light">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2 class="module-title font-alt">Our clients</h2>
					<div class="module-subtitle font-serif">What we have done our work</div>
				</div>
			</div>
			<div class="row client">
				<div class="owl-carousel text-center" data-items="5" data-pagination="true" data-navigation="false">

					<?php
						query_posts('category_name=OurClients' );
						while ( have_posts() ) : the_post();
					?>
					<div class="owl-item">
						<div class="col-sm-12">
							<div class="client-logo"><?php the_post_thumbnail('full',array("class"=>"img_fit")); ?></div>
						</div>
					</div>

					<?php
						endwhile;
					?>


				</div>
			</div>
		</div>
	</section>


<?php get_footer(); ?>
