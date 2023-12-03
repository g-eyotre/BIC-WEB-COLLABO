<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/66a1966b83.js" crossorigin="anonymous"></script>
    <title>contactus-Muni University Business Incubation Center</title>
</head>
<body>
  <style>
    .row-contact {
    background-color: yellow;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    }
    .col-lg-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
    }
    @media (max-width: 768px){
      .col-lg-5{
        width:100%;
        padding: 0px;
        margin: 0px;

      }
      .row-contact{
        padding-left: 0px;
      }
    }
    .col-md-6 {
    flex: 0 1 auto;
    }
    .d-flex {
    display: flex;
    }
    .align-items-stretch {
    align-items: stretch;
    }
    .info {
      text-align: left;
      padding: 10px;
      background-color: #f8f9fa;
      width: 100%;
    }
    
    .working-hours {
    margin-top: 40px;
    }
    #name, #email, #subject {
      background-color: yellow;
      width: 100%;
      padding: 1px;
      margin-bottom: 10px;
      border: 1px solid #ced4da;
      border-radius: 5px;
    }
    #message {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ced4da;
    border-radius: 5px;
    }
    .loading, .error-message, .sent-message {
    display: none;
    margin-top: 20px;
    text-align: center;
    }
    .php-email-form button[type="submit"] {
    background: #007bff;
    color: #fff;
    border: none;
    padding: 10px 10px;
    cursor: pointer;
    transition: 0.3s;
    border-radius: 5px;
   }

   .php-email-form button[type="submit"]:hover {
    background: #0056b3;
    }
    /*portion2*/
    .col-lg-7 {
    flex: 0 0 58.33333%; /* Adjust the flex value to the remaining percentage */
    max-width: 58.33333%; /* Adjust the max-width value accordingly */
    }

    .php-email-form {
    width: 100%;
    }

   .form-group {
    width: 100%;
    text-align: left;
    }
    
    .form-group.col-md-6 {
    width: 45%; /* Adjust the width for medium-sized screens */
    }

#name,
#email,
#subject,
textarea {
    width: 100%;
    padding: 0.175rem 0.65rem;
    font-size: 1rem;
    line-height: 0.2;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
}

.my-3 {
    margin-top: 1rem; /* Adjust the margin-top as needed */
}

.loading,
.error-message,
.sent-message {
    display: none;
    /* Add styles for loading, error, and sent messages as needed */
}

.text-center button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 0.275rem 0.65rem;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.text-center button[type="submit"]:hover {
    background-color: #0056b3; /* Adjust the hover background color as needed */
}
</style> 

    <div class="background-image"></div>
    <?php include 'top-bar.php'; ?>
    <header>
    <?php include 'header.php'; ?>
    </header>
    <main>
        <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
          <p>Want to get in touch? We'd love to hear from you. Heres how you can reach us...</p>
          <p>You can visit our offices using the address provided, call the numbers provided below or reach us through e-mail. Thank you</p>
        </div>
        <div class="row-contact">

          <div class="col-lg-5" style="background-color: blue;">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Muni Hill, Arua City - Uganda</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>bic@muni.ac.ug</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+256 700730859 </p>
                <p>+256 781308598</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.364147548244!2d30.926811999999998!3d2.9962289999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x176e618e5f460f29%3A0xd38719ff7bbb252e!2sMuni%20University!5e0!3m2!1sen!2sug!4v1699260739167!5m2!1sen!2sug" width="100%" height="269" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row-contact">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section --> 
    </main>
    <div class="footer">
    <?php include 'footer.php'; ?>
    </div>
    <?php include 'copyright.php'; ?>
</body>
</html>
