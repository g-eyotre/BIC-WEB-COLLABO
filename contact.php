<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/66a1966b83.js" crossorigin="anonymous"></script>
    <title>contactus-Muni University Business Incubation Center</title>
</head>
<body>
    
    <div class="background-image"></div>
    <?php include 'top-bar.php'; ?>

    <header>
    <?php include 'header.php'; ?>
    </header>
    <main>
    <section id="contact" class="section-bg wow fadeInUp" >
      <div class="container">
        <div class="section-header">
          <h3 style="color: red;">CONTACT US</h3>
          <p>Want to get in touch? We'd love to hear from you. Heres how you can reach us...</p><br><h5>You can visit our offices using the address provided, call the numbers provided below or reach us through e-mail. Thank you</h5>
        </div>
        <div class="row contact-info">
          <div class="col-md-4">
            <div class="contact-address">
                <i class="fa-solid fa-location-dot"></i>
              <h3>Address</h3>
              <address>Muni Hill, Arua City - Uganda</address>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-phone">
                <i class="fa-solid fa-phone-volume"></i>
              <h3>Phone Numbers</h3>
              <p><a href="tel:+155895548855" style="color:#658CBB; text-decoration:none;">Phone: +256 700730859 Or</a></p>
              <p><a href="tel:+155895548855" style="color:#658CBB; text-decoration:none;"> +256 781308598</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-email">
              <img src="images/email.jpg" alt="Email Icon">
              <h3>Email</h3>
              <p><a href="mailto:bic@muni.ac.ug" style="color:#658CBB;">bic@muni.ac.ug</a></p>
            </div>
          </div>
          
        </div>
        <p>Please fill this form to send us message. Our team will respond to you shortly after your message</p>
        <div class="form">
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border: 1px solid black;"  />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" style="border: 1px solid black;" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" style="border: 1px solid black;" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" style="border: 1px solid black;" ></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button value= "submit" type="submit" style="border-radius:0px; width: 300px; background-color: #658CBB; color: white;">Send Message</button></div>
          </form>
        </div>
        <div class="col-md-4">
          <div class="working-hours">
          <h4><span style="color: red; margin-left:25px;">Working Hours</span></h4>
          <ul class="list-unstyled">
          <li><i class="fa fa-time"></i><span> </span>Monday - Friday 8:00am to 5:00pm</li>
          <li><i class="fa fa-time"></i><span> </span>Saturday - Closed</li>
          <li><i class="fa fa-time"></i><span> </span>Sunday - Closed</li>
          </ul>
        </div>
        </div>
      </div>
    </section> 
    </main>
    
    
    <div class="footer">
    <?php include 'footer.php'; ?>
    </div>
    <?php include 'copyright.php'; ?>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
    <!-- Scripts -->
    <script src="https://bic.muni.ac.ug/js/app.js" defer></script>
</body>
</html>
