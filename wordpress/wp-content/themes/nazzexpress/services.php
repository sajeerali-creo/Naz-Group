<?php
/* Template Name: services */
?>
<?php get_header(); ?>

<div class="main">
  <!-- Banner -->
  <section class="module bg-dark-60 about-page-header" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/service_bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <?php
            query_posts('category_name=ServiceBanner' );
            while ( have_posts() ) : the_post();
          ?>
          <h2 class="module-title font-alt">OUR SERVICES</h2>
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

<!-- why nazz express -->
  <section class="module">
    <div class="container">
      <div class="row">
        <?php
          query_posts('category_name=WhyNazExpress' );
          while ( have_posts() ) : the_post();
        ?>
        <div class="col-sm-6">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/express.svg" class="abt-ic">
        </div>
        <div class="col-sm-6">
          <h5 class="font-alt big-f"><?php echo get_the_title(); ?></h5><br/>
              <?php the_content(); ?>
        </div>
        <?php
          break;
          endwhile;
        ?>
      </div>
    </div>
  </section>

  <hr class="divider-w">


  <section class="module s-naz">
    <div class="container">
      <div class="row multi-columns-row">
        <h2 class="module-title font-alt">Naz Best Services</h2>

        <?php
          query_posts('category_name=NazBestService' );
          while ( have_posts() ) : the_post();
        ?>
        <div class="col-sm-6 col-md-6 col-lg-6">
          <div class="features-item">
            <div class="features-icon">
              <span>
                <?php the_post_thumbnail('full',array("class"=>"img")); ?>
              </span>
            </div>
            <h3 class="features-title font-alt"><?php echo get_the_title(); ?></h3>
          </div>
        </div>

        <?php
          endwhile;
        ?>


      </div>
    </div>
  </section>

  <section class="module-small bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-8 col-lg-6 col-lg-offset-2">
          <div class="callout-text font-alt">
            <h3 class="callout-title">Want to see more works?</h3>
            <p>We are always open to interesting projects.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2">
          <div class="callout-btn-box"><a class="btn btn-danger btn-round" href="portfolio_boxed_gutter_col_3.html">Contact us</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="module">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <?php
            query_posts('category_name=E-CommerceB2BServic' );
            while ( have_posts() ) : the_post();
          ?>
          <h2 class="module-title font-alt"><?php echo get_the_title(); ?></h2>
          <div class="pt-p"><?php the_content(); ?></div>
        <?php
          break;
          endwhile;
        ?>
        </div>
      </div>
    </div>
  </section>

<hr class="divider-w">
  <section class="module">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">

          <?php
            query_posts('category_name=WeWillProvide' );
            while ( have_posts() ) : the_post();
          ?>

          <h5 class="font-alt big-f">
            <?php echo get_the_title(); ?>
          </h5>
            <br/>
          <?php the_content(); ?>
          <?php
            break;
            endwhile;
          ?>

        </div>
        <div class="col-sm-6">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/express2.png" class="fit-x">
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
