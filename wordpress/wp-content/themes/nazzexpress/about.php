<?php
/* Template Name: about */
?>
<?php get_header(); ?>
<div class="main">

  <!-- banner -->

  <section class="module bg-dark-60 about-page-header" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/about_bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <?php
            query_posts('category_name=AboutBanner' );
            while ( have_posts() ) : the_post();
          ?>
          <h2 class="module-title font-alt">About Us</h2>
          <div class="module-subtitle font-serif">
            <?php the_content(); ?>
          </div>
          <?php
            break;
            endwhile;
          ?>
        </div>
      </div>
    </div>
  </section>

<!-- Who we are -->
  <section class="module">
    <div class="container">
      <div class="row">
        <?php
          query_posts('category_name=WhoWeAre' );
          while ( have_posts() ) : the_post();
        ?>
        <div class="col-sm-6">
          <h5 class="font-alt big-f">Who We Are?</h5><br/>
          <?php the_content(); ?>
        </div>
        <div class="col-sm-6">
          <?php the_post_thumbnail('full',array("class"=>"img_fit-abt")); ?>
        </div>
        <?php
          break;
          endwhile;
        ?>

      </div>
    </div>
  </section>


  <!-- Our Vision -->
  <hr class="divider-w">
  <section class="module pt-0 pb-0 left-fit" id="about">
    <div class="container">
    <div class="row position-relative m-0">
      <div class="col-xs-12 col-md-12 side-image-text">
        <div class="row">
          <div class="col-sm-12">
            <?php
              query_posts('category_name=OurVission' );
              while ( have_posts() ) : the_post();
            ?>
            <h2 class="module-title font-alt"><?php echo get_the_title(); ?></h2>
            <div class="module-subtitle font-serif "><?php echo get_post_meta($post->ID,'sub-vission-text',true);?></div>
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
  </section>

  <!-- Our Mission -->
  <hr class="divider-w">
  <section class="module pt-0 pb-0 right-fit" id="about">
    <div class="container">
    <div class="row position-relative m-0">
      <div class="col-xs-12 col-md-12 side-image-text">
        <div class="row">
          <div class="col-sm-12">
            <?php
              query_posts('category_name=OurMission' );
              while ( have_posts() ) : the_post();
            ?>
            <h2 class="module-title font-alt"><?php echo get_the_title(); ?></h2>
            <div class="module-subtitle font-serif "><?php echo get_post_meta($post->ID,'sub-mission-text',true);?></div>
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
  </section>



<!-- Happy Client -->
  <section class="module pt-0 pb-0 bg-dark-60 parallax-bg testimonial" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial_bg.jpg">
    <div class="testimonials-slider pt-140 pb-140">
      <h2 class="module-title font-alt align-center">Our Happy Clients</h2>
      <ul class="slides">

        <?php
          query_posts('category_name=HappyClients' );
          while ( have_posts() ) : the_post();
        ?>
        <li>
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="module-icon"><span class="icon-quote"></span></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <blockquote class="testimonial-text font-alt">
                  	<?php the_content(); ?>
                </blockquote>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 col-sm-offset-4">
                <div class="testimonial-author">
                  <div class="testimonial-caption font-alt">
                    <div class="testimonial-title"><?php echo get_post_meta($post->ID,'clientName',true);?></div>
                    <div class="testimonial-descr"><?php echo get_post_meta($post->ID,'clientdesignation',true);?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>

        <?php
          endwhile;
        ?>


      </ul>
    </div>
  </section>



<?php get_footer(); ?>
