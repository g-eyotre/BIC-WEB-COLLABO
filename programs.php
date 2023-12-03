<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="aos/aos.css" rel="stylesheet">
    <script src="aos/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/66a1966b83.js" crossorigin="anonymous"></script>
    <title>What we do-Muni University Business Incubation Center</title>
</head>
<body>
    <div class="background-image"></div>
    <div id='site-header'>
    <?php include 'top-bar.php'; ?>
    <header>
    <?php include 'header.php'; ?>
    </header>
    </div>
    <main>
    <div class="s-container">
    <div class="box2">
        Startups
    </div>
    <div class="programs">
        <h>Program Overview</h>
        <p>
            Our incubation, acceleration, and investment-readiness programs empower startups and founders with the essential skills and knowledge needed to forge thriving businesses. We blend a meticulously designed curriculum with the wisdom of seasoned mentors, ensuring an unparalleled learning journey.
        </p>
        <img src="images/pro.jpg" alt="Program" class="program" >
    </div>

    <div class="e-container" data-aos="fade-up">
        <div class="work">
            <h>Supporting Your Pursuit of Innovation and Empowerment</h>
        </div>
        <div class="box3">
            <div class="box-item">Startup Support</div>
            <div class="box-item">Enterprise Development and Corporate Partnership</div>
            <div class="box-item">Co-working Space</div>
        </div>
    </div>

    <div class="inno" data-aos="fade-up">
        <h>When you partner with BIC, we tackle the most challenging issues together.</h>
        <div class="ho">
            <img src="images/p8.jpg" alt="myImage" style="display: inline-block;">
            <img src="images/c1.jpg" alt="myImage" style="display: inline-block;">
        </div>
    </div>

    <div class="e-container" data-aos="fade-up">
        <div class="work">
            <h>Work with Independence, Together</h>
        </div>
        <div class="box3">
            <div class="box-item">Establish a secure environment where innovators can come together and gain access to mentors.</div>
            <div class="box-item">Educate innovators in the application of diverse tech skills for addressing challenges in their community.</div>
            <div class="box-item">Develop these solutions into sustainable business ventures, generating employment opportunities along the way.</div>
        </div>
    </div>

    <div class="engage" >
        <h style="font-size: 24px; color: red;">Engagements at BIC</h>
        <div class="image-engage">
            <div class="row2">
                <div class="engage-item">
                    <img src="images/stem.jpg" alt="Program" style="width: 550px; height: 550px;">
                    <p class="caption-bottom">Girls In Stem</p>
                </div>
                <div class="engage-item">
                    <img src="images/django.jpg" alt="Program" style="width: 550px; height: 550px;">
                    <p class="caption-bottom">Django Girls</p>
                </div>
            </div>
            <div class="row2">
                <div class="engage-item">
                    <img src="images/c2.jpg" alt="Program" style="width: 550px; height: 550px;">
                    <p class="caption-bottom">BIC Accelerator</p>
                </div>
                <div class="engage-item">
                    <img src="images/intern.jpg" alt="Program" style="width: 550px; height: 550px;">
                    <p class="caption-bottom">Internship</p>
                </div>
            </div>
        </div>
    </div>
</div>
    </main>
    <div class="footer">
    <?php include 'footer.php'; ?>
    </div>
    <?php include 'copyright.php'; ?>
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
</body>
</html>
