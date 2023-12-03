<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/66a1966b83.js" crossorigin="anonymous"></script>
    <title>impact-Muni University Business Incubation Center</title>
</head>
<body>
    <div class="background-image"></div>
    <div id='site-heade'>
    <?php include 'top-bar.php'; ?>
    <header>
    <?php include 'header.php'; ?>
    </header>
    </div>
    <main>
    </main>
    <div class="footer">
    <?php include 'footer.php'; ?>
    </div>
    <?php include 'copyright.php'; ?>
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
