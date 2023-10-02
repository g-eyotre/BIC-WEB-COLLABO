
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/66a1966b83.js" crossorigin="anonymous"></script>
    <title>Who we are-Muni University Business Incubation Center</title>
</head>
<body>
    <div class="background-image"></div>
    <?php include 'top-bar.php'; ?>

    <header>
    <?php include 'header.php'; ?>
    </header>
    <main >
    <style>

    .about-content section {
        text-align: center;
        background: linear-gradient(to right, #C5C5C5, white);
        border-bottom: 2px solid #ccc; /* Add a 2px solid gray border at the bottom of each section */
        padding-bottom: 20px; /* Add padding at the bottom of each section for separation */
        padding-left: 10px;
        padding-right: 10px;
        padding-top:10px;
        

    }
    .about-content  {
        margin-top:5px;
    }
    /* Style headings and paragraphs within sections as needed */
    .about-content h {
        color: red;
        text-align:right;
        font-size: 40px;
        font-weight: bold;
    }

    .about-content p {
        font-size: 16px;
        line-height: 1.5;
    }
    .about-content  {
        background: none;
    }
</style>

        <div class="about-content">
            <section id="Historical">
                <h>Our Journey</h>
                <p> BIC's history is a testament to its ability to create everyday products that are accessible to people around the world, making it a household name for generations.</p>
            </section>
            <section id="Value">
                <h>Our core value, mission and vision</h>
                <p> BIC, as a company, is guided by a set of core values that shape its corporate culture and business practices. While the specific wording of these values may evolve over time, as of my last knowledge update in September 2021, here are some of the core values typically associated with BIC: </p>
            </section>
            <section id="Team" class="team-section">
    <h2 style="font-size: 40px; color: red;">Our Team</h2>
    <div class="team-images">
        <div class="team-member">
            <p class="caption-top">Caption Top 1</p>
            <img src="images/27.png" alt="Team Member 1">
            <p class="caption-bottom">Caption Bottom 1</p>
        </div>
        <div class="team-member">
            <p class="caption-top">Caption Top 2</p>
            <img src="images/27.png" alt="Team Member 2">
            <p class="caption-bottom">Caption Bottom 2</p>
        </div>
        <div class="team-member">
            <p class="caption-top">Caption Top 3</p>
            <img src="images/27.png" alt="Team Member 3">
            <p class="caption-bottom">Caption Bottom 3</p>
        </div>
        <div class="team-member">
            <p class="caption-top">Caption Top 4</p>
            <img src="images/27.png" alt="Team Member 4">
            <p class="caption-bottom">Caption Bottom 4</p>
        </div>
        <div class="team-member">
            <p class="caption-top">Caption Top 5</p>
            <img src="images/27.png" alt="Team Member 5">
            <p class="caption-bottom">Caption Bottom 5</p>
        </div>
    </div>
</section>

<section id="Gallery" class="gallery-section">
    <h2 style="font-size: 40px; color: red;">Our Gallery</h2>
    <div class="gallery-images">
        <div class="gallery-pic">
            <img src="images/p9.jpg" alt="Team Member 3" class="resized-image">
        </div>
        <div class="gallery-pic">
            <img src="images/p2.jpg" alt="Team Member 3" class="resized-image">
        </div>
        <div class="gallery-pic">
            <img src="images/p3.jpg" alt="Team Member 3" class="resized-image">
        </div>
        <div class="gallery-pic">
            <img src="images/p4.jpg" alt="Team Member 3" class="resized-image">
        </div>
        <div class="hidden-images" style="display: none;">
            <div class="gallery-pic">
                <img src="images/p5.jpg" alt="Team Member 3" class="resized-image">
            </div>
            <div class="gallery-pic">
                <img src="images/p6.jpg" alt="Team Member 3" class="resized-image">
            </div>
            <div class="gallery-pic">
                <img src="images/p7.jpg" alt="Team Member 3" class="resized-image">
            </div>
            <div class="gallery-pic">
                <img src="images/p1.jpg" alt="Team Member 3" class="resized-image">
            </div>
            <!-- Add more additional images as needed -->
        </div>
    </div>
    <button id="show-more-button"> More Stories</button>
</section>
    </main>
    
    <div class="footer">
    <?php include 'footer.php'; ?>
    </div>
    <?php include 'copyright.php'; ?>
    <script src="script.js"></script>
</body>
</html>
