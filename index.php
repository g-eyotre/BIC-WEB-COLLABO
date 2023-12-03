<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="aos/aos.css" rel="stylesheet">
    <script src="aos/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/66a1966b83.js" crossorigin="anonymous"></script>
    <title>Muni University Business Incubation Centre</title>
</head>
<body>
    <div class="background-image"></div>
    <div id='site-header'>
    <?php include 'top-bar.php'; ?>
    <header >
        <?php include 'header.php'; ?>
    </header>
    </div>
    <main >
        <div class="additional-content" data-aos="zoom-in">
            <div class = main-text>
                <h2>Welcome To The Business Incubation Centre</h2>
                <p >We invite you to join our most dynamic communities in the world and get access to great resources for enterprenuers as part of the main-text.</p>
                <p> We provide <span style="font-weight:bolder;"class="typed" data-typed-items=" Startup support, guidance for building innovative ideas., a Working Space"></span></p>
            </div>
            <div class = "slide-images">
                <img class="slide" src="images/7.jpg" alt="Image 7">
                <img class="slide" src="images/8.jpg" alt="Image 8">
                <img class="slide" src="images/9.jpg" alt="Image 9">
            </div>
       </div>
    </main>
    <div class ="below" data-aos="fade-up">
    <div class="center-statement">
        <p>Nurturing African Innovators<br><span style="color:red">Since 2019</p>
    </div>
    <div class="sub-statement">
        <p>Being a trailblazing innovation hub at MUNI, we have driven numerous startups to achieve remarkable success throughout the years.</p>
    </div>
    </div>
    <div class="life-cycle" data-aos="fade-up">
        <div class="row">
            <div class="box">
                <p class="number" data-count="1">1</p>
                <p class="info">Hub locations</p>
            </div>
            <div class="box">
                <p class="number" data-count="5">5+</p>
                <p class="info">Years Of experiennce</p>
            </div>
            <div class="box">
                <p class="number" data-count="450">450+</p>
                <p class="info">Jobs created</p>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <p class="number" data-count="45">45+</p>
                <p class="info">Startup Teams</p>
            </div>
            <div class="box">
                <p class="number" data-count="1000"><span class = "number">1000</span>+</p>
                <p class="info">Youths Trained</p>
            </div>
            <div class="box">
                <p class="number" data-count="120+">120+</p>
                <p class="info">Women-Owned</p>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <p class="number" data-count="180">180+</p>
                <p class="info">Seed Capital Raised</p>
            </div>
        </div>
    </div>
    <div class="success-stories" data-aos="fade-up">
        <h2>Startup Success Stories</h2>

        <!-- First row of videos (3 videos) -->
        <div class="video-row">
            <div class="video">
                <iframe width="340" height="200" src="video_url_1" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video">
                <iframe width="320" height="180" src="video_url_2" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video">
                <iframe width="320" height="180" src="video_url_3" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <!-- Second row of videos (3 videos) -->
        <div class="video-row">
            <div class="video">
                <iframe width="320" height="180" src="video_url_4" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video">
                <iframe width="320" height="180" src="video_url_5" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video">
                <iframe width="320" height="180" src="video_url_6" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <!-- Link to the impact page -->
        <div class="impact-link">
            <a href="impact.php" class="custom-button">Take a Probe<i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
        <div class="partners-clients">
            <h2>PARTNERS & CLIENTS</h2>
            <div class="partner-images">
                <img src="images/afdb.jpg" alt="Partner 1">
                <img src="images/20.jpg" alt="Partner 2" >
                <img src="images/uia.jpg" alt="Partner 3">
                <img src="images/arms.jpg" alt="Partner 2">
                <img src="images/unfpa.jpg" alt="Partner 1">
                <img src="images/udb.jpg" alt="Partner 2">
                <img src="images/16.png" alt="Partner 3">
                <img src="images/17.png" alt="Partner 2">
                <img src="images/master.jpg" alt="Partner 3">
                <img src="images/master.jpg" alt="Partner 3">
            </div>
        </div>
        <div class="footer">
        <?php include 'footer.php'; ?>
        </div>
        <?php include 'copyright.php'; ?>
        <script src="script.js"></script>
        <script>
         AOS.init({
            duration: 2000 // Set the default duration for all animations to 2000 milliseconds (2 seconds)
            });     
       </script>
         
       <script>
            $(document).ready(function() {
            var prevScrollpos = window.pageYOffset;
            $(window).on('scroll', function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
            $('#site-header').css('top', '0');
            } else {
            $('#site-header').css('top', '-135px'); // Adjust this value to the height of your header
            }
            prevScrollpos = currentScrollPos;
            });
            });
       </script>
        <script src="typed/typed.js"></script>
        <script src="main.js"></script>
</body>
</html>
