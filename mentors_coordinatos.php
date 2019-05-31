<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="#3498db">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Bitter:700|Dancing+Script:700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style_v3.css">

        <title>Polaris - Student Mentorship Program</title>


        <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121551593-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-121551593-1');
		</script>

    </head>

    <body>

      <?php
      require_once('header.php');
      ?>

        <header class="header header__coordinators">
            <div class="container">
                <div class="header__hero-box">
                    <h1 class="heading-primary">Coordination Committee</h1>
                    <!-- <p class="heading-subtitle">We are here to help...</p> -->
                </div>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">The Coordinators</h2>
            </div>

            <div class="row">
                <div class="dev">
                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="img/mentors/faculty1.jpg" alt=">Dr. Rahul Jain" class="dev__img">
                            <figcaption class="dev__caption">Dr. Rahul Jain</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Dr. Rahul Jain</strong><br/>Faculty In-Charge</div>
                        <a href="mailto:rahul@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                    </div>

                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="img/mentors/faculty2.jpg" alt="Dr. Sanjib Banerjee" class="dev__img">
                            <figcaption class="dev__caption">Dr. Sanjib Banerjee</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Dr. Sanjib Banerjee</strong><br/>Member</div>
                        <a href="mailto:sanjib.banerjee@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                    </div>

                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="img/mentors/rajni_maam.jpeg" alt="Mrs. Rajni Moona" class="dev__img">
                            <figcaption class="dev__caption">Mrs. Rajni Moona</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Mrs. Rajni Moona</strong><br/>Member</div>
                        <a href="mailto:rajnimoona@yahoo.com" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="dev">
                    <div class="col-1-of-4">&nbsp;</div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="img/mentors/coordinator1.JPG" alt="Pramit Bhattacharyya" class="dev__img">
                            <figcaption class="dev__caption">Pramit Bhattacharyya</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Pramit Bhattacharyya</strong><br/>Mentor Coordinator</div>
                        <a href="mailto:pramitb@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100007015189401" class="dev__profile">
                            <i class="fab fa-facebook-f dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8777266581
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="img/mentors/coordinator2.jpg" alt="Yash Tiwari" class="dev__img">
                            <figcaption class="dev__caption">Yash Tiwari</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Yash Tiwari</strong><br/>Mentor Coordinator</div>
                        <a href="mailto:yashtiwari@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.facebook.com/yash.tiwari.31149" class="dev__profile">
                            <i class="fab fa-facebook-f dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9685457221
                        </div>
                    </div>

                    <div class="col-1-of-4">&nbsp;</div>

                </div>
            </div>

            <!-- EDIT START HERE -->
        </section>

        <!-- EDIT ENDS HERE -->

        <?php
        require_once('footer.php');
        ?>
    </body>

</html>
