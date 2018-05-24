<?php
/* Template Name: contact */
?>
<?php get_header(); ?>

<div class="main">
  <section class="module bg-dark-60 contact-page-header bg-dark" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/contact_bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h2 class="module-title font-alt">Contact Us</h2>
          <div class="module-subtitle font-serif">We have introduced ourselves much; We would love to hear from you!</div>
        </div>
      </div>
    </div>
  </section>
  <section class="module">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h4 class="font-alt">Get in touch</h4><br/>
          <form id="contactForm" role="form" method="post" action="php/contact.php">
            <div class="form-group">
              <label class="sr-only" for="name">Name</label>
              <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name."/>
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <label class="sr-only" for="email">Email</label>
              <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address."/>
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required="required" data-validation-required-message="Please enter your message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
            <div class="text-center">
              <button class="btn btn-block btn-round btn-danger btn-d" id="cfsubmit" type="submit">Submit</button>
            </div>
          </form>
          <div class="ajax-response font-alt" id="contactFormResponse"></div>
        </div>
        <div class="col-sm-6">
          <h4 class="font-alt">Address & Contact Detals</h4><br/>
          <p>Saeed tower 2 Office no. 806, Sheikh Zayed Road, Dubai UAE,<br/>
Web: www.nazzexpress.com</p>
          <hr/>

          <div class="alt-features-item mt-xs-60">
            <div class="alt-features-icon"><span class="icon-map red-color"></span></div>
            <h3 class="alt-features-title font-alt">Say Hello</h3>
            Email: Info@nazzexpress.com, management@nazzexpress.com, <br/>Sales@nazzexpress.com
            <br/>Tel: +971 4 3555316<br/>Fax: +971 4 3555342
          </div>

        </div>
      </div>
    </div>
  </section>

  <section id="map-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3609.670058422911!2d55.274028!3d25.214347!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f428c70430aff%3A0xc7f8fa6ddd410e9b!2sSaeed+Tower+2!5e0!3m2!1sen!2sae!4v1526191723021" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>


<?php get_footer(); ?>
