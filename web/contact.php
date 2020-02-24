<!--
Creator: Valentine Onah
Creator's email: ucval@yahoo.com
Creator's CV URL: http://valentine-cv.special-talk.com/
Creator's University: Wyższa Szkoła Biznesu - National-Louis University, Poland.
Field of study: Computer Science -> Business Application Programming
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/head.php' ?>
</head>

<body>

    <!-- mian-content -->
    <div class="main-banner inner" id="home">
        <!-- header -->
        <?php include 'includes/navbar.php' ?>
        <!-- //header -->

    </div>
    <!--//main-content-->
    <!---->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact Us</li>
    </ol>
    <!---->
    <!--// mian-content -->
    <!-- banner -->
    <section class="ab-info-main py-5">
        <div class="container py-3">
            <h3 class="tittle text-center"><span class="sub-tittle">Find Us</span> Contact Us</h3>
            <div class="row contact-main-info mt-5">
                <div class="col-md-6 contact-right-content">
                    <form action="#" method="post">
                        <input type="text" name="Name" placeholder="Name" required="">
                        <input type="email" class="email" name="Email" placeholder="Email" required="">
                        <input type="text" name="Phone no" placeholder="Phone" required="">
                        <textarea name="Message" placeholder="Message" required=""></textarea>
                        <div class="read mt-3">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 contact-left-content">
                    <div class="address-con">
                        <h4 class="mb-2"><span class="fa fa-phone-square" aria-hidden="true"></span> Phone</h4>
                        <p>+48 712 345 678</p>
                        <p>+48 712 345 678</p>
                    </div>
                    <div class="address-con my-4">
                        <h4 class="mb-2"><span class="fa fa-envelope-o" aria-hidden="true"></span> Email </h4>
                        <p><a href="mailto:ucval@yahoo.com">ucval@yahoo.com</a></p>
                        <p><a href="mailto:ucval@yahoo.com">ucval@yahoo.com</a></p>
                    </div>
                    <div class="address-con mb-4">
                        <h4 class="mb-2"><span class="fa fa-fax" aria-hidden="true"></span> Fax</h4>

                        <p>(300) 123-80008</p>
                    </div>
                    <div class="address-con">
                        <h4 class="mb-2"><span class="fa fa-map-marker" aria-hidden="true"></span> Location </h4>

                        <p>Ul. Jana Pawla, Nowy Sacz</p>
                    </div>

                </div>

            </div>
            <div class="map-fo mt-lg-5 mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007" allowfullscreen></iframe>
            </div>
        </div>
    </section>


    <!-- //contact -->
    <!-- footer -->
    <footer>
        <?php include 'includes/footer.php' ?>
    </footer>
    <!-- //footer -->
</body>

</html>
