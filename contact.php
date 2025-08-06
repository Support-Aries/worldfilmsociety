<?php include('header.php'); ?>
<!--  slider -->
<section class="banner_sec contact_sec overlay_bg_slider d-flex">
  <div class="container m-auto">
    <div class="row no-gutters">
      <div class="col-12 z_index">
        <h3 class="text-center text-white">CONTACT US</h3>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT US -->
<section class="contact position-relative">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-12 z_index">
        <h3 class="sub_head"> GET IN TOUCH</h3>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 z_index">
        <!-- <p class=" mt-auto mb-auto" data-aos="flip-left"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="2000" >Need a reliable transportation? Contact us or send a request and get a free quote for any shipment type!</p> -->

        <div class="d-flex address_box" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000"
          data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
          <img src="assets/icons/location.png" class="img-fluid mt-auto mb-auto" alt="">
          <p class=" pl-3 mb-0 d-inline-block">BCG Tower, 1st Floor,<br> Opp.CSEZ, Seaport Airport Road,<br> Kakkanad,
            Kochi - 682037</p>
        </div>
        <div class="d-flex address_box" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
          <img src="assets/icons/smartphone-call.png" class="img-fluid mt-auto mb-auto" alt="">
          <p class="pl-3 mt-auto mb-auto"><a href="Tel:+91 953 900 0826">+91 9539000513</a> (Johnson T I)</p>
        </div>
        <div class="d-flex address_box" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
          <img src="assets/icons/mail.png" class="img-fluid mt-auto mb-auto" alt="">
          <p class="pl-3 mt-auto mb-auto"><a href="mailto:johnson@marinebiz.tv"
              target="_blank">johnson@marinebiz.tv</a></p>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-auto mb-auto p-4 contact_box_right">



        <!--       <form action="contactrespose.php" method="post" id="contact">
                     <?php

                     if (isset($_GET['status']) && $_GET['status'] == 0) {

                       echo " <font color=red>Please click on the reCAPTCHA box</font>.";

                     }

                     if (isset($_GET['status']) && $_GET['status'] == 1) {

                       echo " <font color=green>Your enquiry has been submitted successfuly</font>.";

                     }

                     ?>
                    <div class="form-group"  data-aos="zoom-in" data-aos-easing="ease-out-cubic"  data-aos-duration="2000">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group"  data-aos="zoom-in" data-aos-easing="ease-out-cubic"  data-aos-duration="2000">
                        <input type="number" class="form-control" id="number" name="number" placeholder="Enter Phone Number">
                    </div>
                     <div class="form-group"  data-aos="zoom-in" data-aos-easing="ease-out-cubic"  data-aos-duration="2000">
                         <input type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group"  data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group"  data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <div data-captcha-enable="true"></div>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6Ldxe20UAAAAAD_17wcLirt0F7WmMb_Ixgoi3AYt" ></div>
                            
                    </div>
<!--                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                   

                      <button type="submit" name="submit" id="sub" class="mt-3 send_message text-white btn btn-primary" value="Submit" >Send message</button>

   <button type="submit" class="mt-3 send_message text-white btn btn-primary" style="display: none" id="waitmsg"  value="Please Wait..." disabled="disabled">Please Wait...</button>
                  
                </form> -->
      </div>
    </div>
  </div>
</section>


<!-- MAP -->
<section>
  <div class="container max-width">
    <div class="row no-gutters">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15716.516089377716!2d76.3454269!3d10.0061999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcef966dc6ea15af8!2sAries+Group+of+Companies!5e0!3m2!1sen!2sin!4v1538649548121"
        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>