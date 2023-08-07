<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop Ecommerce php CSS Template</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo _CSS_BASE_PATH; ?>/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo _CSS_BASE_PATH; ?>/font-awesome.css">

    <link rel="stylesheet" href="<?php echo _CSS_BASE_PATH; ?>/templatemo-hexashop.css">

    <link rel="stylesheet" href="<?php echo _CSS_BASE_PATH; ?>/owl-carousel.css">

    <link rel="stylesheet" href="<?php echo _CSS_BASE_PATH; ?>/lightbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .left-images {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
    </style>
</head>

<body style="overflow-x: hidden;">
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <?php
    $this->render('client/header');
    if(empty($sub_content)) {
        $sub_content = [];
    }
    $this->render($content, $sub_content);
    $this->render('client/footer');
    ?>


    <script src="<?php echo _JS_BASE_PATH; ?>jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?php echo _JS_BASE_PATH; ?>popper.js"></script>
    <script src="<?php echo _JS_BASE_PATH; ?>bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?php echo _JS_BASE_PATH; ?>owl-carousel.js"></script>
    <script src="<?php echo _JS_BASE_PATH; ?>accordions.js"></script>
    <script src="<?php echo _JS_BASE_PATH; ?>datepicker.js"></script>
    <script src="<?php echo _JS_BASE_PATH; ?>scrollreveal.min.js"></script>
    <script src="<?php echo _JS_BASE_PATH; ?>waypoints.min.js"></script>
    <script src="<?php echo _JS_BASE_PATH; ?>jquery.counterup.min.js"></script>
    <script src="<?php echo _JS_BASE_PATH; ?>imgfix.min.js"></script>
    <script src="<?php echo _JS_BASE_PATH; ?>slick.js"></script>
    <script src="<?php echo _JS_BASE_PATH; ?>lightbox.js"></script>
    <script src="<?php echo _JS_BASE_PATH; ?>isotope.js"></script>

    <!-- Global Init -->
    <script src="<?php echo _JS_BASE_PATH; ?>custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>