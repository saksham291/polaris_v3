<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="#3498db">
        <meta property="og:image" content="https://polaris.iitbhilai.ac.in/img/2017_gymkhana.jpg" />

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


        <!-- Script for refresh button -->
        <script>
        function refresh_live_updates() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("live_updates").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "Live_updates.php", true);
            xmlhttp.send();
        }
        </script>

    </head>

    <body>

        <div class="page-loader">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>

        <div id="myModal--1" class="modal">

             <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Checklist for Freshers 2018</h2>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>All the students who are going to join IIT Bhilai this year are requested to go through the following link before coming to the main campus for final registration. <a href="https://www.iitbhilai.ac.in/index.php?pid=adm_undergraduate" target="_blank" class="notification">Take me there!</a></li>
                        <br/>
                        <li>You can pay the first semester fee online <a href="https://www.onlinesbi.com/prelogin/icollecthome.htm?corpID=646425" target="_blank" class="notification">here.</a> <strong>The deadline for fee payment is 23 July.</strong></li><br/>
                        <li>No cash payment option will be available at the institute on 23rd July. For more details, <a href="documents.html" class="notification">click here!</a></li>
                        <br/>
                        <li>Those students who wants to avail loan from PNB, <a href="documents.html" class="notification">click here!</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div id="myModal--2" class="modal">

            <!-- Modal content -->
           <div class="modal-content">
               <div class="modal-header">
               <span class="close">&nbsp;&nbsp;&nbsp;&nbsp; &times;</span>
               <span class="close" onclick="refresh_live_updates()">&#8635;</span>
               <h2>Live Updates</h2>
               </div>
               <div class="modal-body">
                   <ul id="live_updates">
                       <!-- <li>Keep checking this page for live updates</li>
                       <li>Live Updates will be started from 22nd, 8 am</li> -->
                        <?php
                        $text = file_get_contents('https://docs.google.com/document/u/1/d/1RvDB_aho5oKb1-YuE_0JbTd_ApOmyXkLohNYjDJIyJQ/export?format=txt');

                        $lines=explode("\r\n",$text);

                        foreach ($lines as $one_line) {
                            echo "<li>$one_line</li>";
                        }
                        ?>
                   </ul>
               </div>
           </div>

       </div>

        <nav class="navigation">
            <div class="container">
                <div class="navigation__logo-box">
                    <p class="navigation__logo"><a href="index.php">Polaris</a></p>
                </div>

                <input type="checkbox" class="navigation__checkbox" id="nav-check">

                <label for="nav-check" class="navigation__button">
                    <span class="navigation__icon">&nbsp;</span>
                </label>

                <div class="navigation__background">&nbsp;</div>

                <div class="navigation__nav">
                    <ul class="navigation__list">
                        <li class="navigation__list-item"><a href="mentors.html" class="navigation__link">Mentors</a></li>
                        <li class="navigation__list-item"><a href="academics.html" class="navigation__link">Academics</a></li>
                        <li class="navigation__list-item"><a href="disciplines.html" class="navigation__link">Disciplines</a></li>
                        <li class="navigation__list-item"><a href="around.html" class="navigation__link">Around the Campus</a></li>
                        <li class="navigation__list-item"><a href="nssandnso.html" class="navigation__link">NSS and NSO</a></li>
                        <li class="navigation__list-item"><a href="documents.html" class="navigation__link">Documents</a></li>
                        <li class="navigation__list-item"><a href="queries.html" class="navigation__link">Queries</a></li>
                        <li class="navigation__list-item dropdown">
                            <a class="dropdown-btn">Life &commat; IITBh &nbsp;<i class="fas fa-angle-down"></i></a>
                            <div class="dropdown-content">
                                <a href="life.html" class="dropdown-link">Hostel Life</a>
                                <a href="cultural.html" class="dropdown-link">Cultural Clubs</a>
                                <a href="scitech.html" class="dropdown-link">Scitech Clubs</a>
                                <a href="outreach.html" class="dropdown-link">Outreach Clubs</a>
                                <a href="sports.html" class="dropdown-link">Sports</a>
                                <!-- <a href="gallery.html" class="dropdown-link">Gallery</a> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="header header__home">
            <div class="container">
                <div class="header__hero-box">
                    <h1 class="heading-primary">Student Mentorship Program</h1>
                    <p class="heading-subtitle">Of the Student, By the Student, For the Student</p>
                    <a href="Brochure_2018_19.pdf" class="btn btn-download" download>Brochure &nbsp; <i class="fas fa-download"></i></a><br/>
                    <a href="#" class="btn btn-live" id="modalBtn">Live Updates &nbsp; <i class="fas fa-sync"></i></a>
                </div>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <div class="introduction">
                    <h2 class="heading-secondary">Welcome to <br><span>Indian Institute of Technology Bhilai</span></h2>
                    <p class="introduction__text">A hearty "Congratulations!!" to all the incoming freshers as you begin an exciting and rewarding chapter in your life. Quench your curiosity by exploring this website and make yourself familiar with life at IIT Bhilai. We look forward to guide you in this journey of exploring your passion. Feel free to post any queries/doubts on "Queries" Page.</p>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">Student Mentorship Program</h2>
                <div class="info">
                    <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Our Objective</h3>
                    <p class="info__text">A lot of things runs into a Freshie’s mind during his initial stay at the institute. We are here to clear those clouds of apprehensiveness. Here, we aim to provide info to all the freshers and give them insight to the life @iitbhilai. If you are more intrigued, then you can simply contact us and we would have your question answered in the best possible way.</p>
                </div>
                <div class="info">
                    <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> About this website</h3>
                    <p class="info__text">This site is of the students, by the students and for the students of IIT Bhilai. Here you will get an intimate view of this institute and its people. If you are a fresher at IIT Bhilai, this site is the right place for you to know more and make yourself familiar with the institute.</p>
                </div>
                <div class="info">
                    <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Who are the mentors?</h3>
                    <p class="info__text">They are a group of seniors who will be helping the juniors in exploring their options at the same time in progressing forward. This site is an online implementation of the mentorship scheme. An offline version of this will involve a senior being assigned as a mentor to a group of freshers to guide them in making well informed decisions through their life at IIT Bhilai.</p>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="message">
                    <h2 class="heading-secondary">Message from <br><span>Council of Student Affairs</span></h2>
                    <p class="message__text"><span>Dear friends,</span> <br><br>Welcome to Indian Institute of Technology Bhilai, one of the most prestigious institute of our country. You have cleared one test of your life with bright colours of success but many of them are still to clear. On behalf of whole student community I wish you all the best for your future journey that starts here at IIT Bhilai.
                    <br><br>
                    At IIT Bhilai we offer excellent environment for overall development of student. In Academics we have world class academic curriculum, well equipped labs, and library. In parallel throughout the year we have a plethora of cultural and technical events organized by the Council of Student Affairs for students to pursue their hobbies and develop interpersonal skills. CoSA exist to facilitate the availability of different opportunities for the student and also act as their voice. We are the association made by the student made of the student and made for the student. <br><br>

                    As President CoSA I assure you that you will enjoy each and every minute of your stay at IIT Bhilai and collect the memories that you will cherish throughout your life. Once again I welcome you to join our hand in our journey towards excellence. </p><br>
                    <p class="message__byline">With best wishes,</p>
                    <div class="row">
                        <div class="dev">
                            <div class="col-1-of-4">
                                <figure class="dev__shape">
                                    <img src="img/ketan.JPG" alt="Ketan Mishra" class="dev__img dev__img--president">
                                    <figcaption class="dev__caption">Ketan Mishra</figcaption>
                                </figure>
                                <div class="dev__name">President, CoSA</div>
                                <a href="mailto:President_CoSA@iitbhilai.ac.in" class="dev__profile">
                                    <i class="far fa-envelope dev__profile--icon"></i>
                                </a>
                                <a href="https://www.facebook.com/ketan.mishra.3107" class="dev__profile">
                                    <i class="fab fa-facebook-f dev__profile--icon"></i>
                                </a>
                                <div class="dev__phone">
                                    <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8109757005
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">Campus Tour</h2>
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="campus">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ukd0R6y6lq8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <div class="campus">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/25hhbQJ_NRw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">Gallery</h2>
                <div class="gallery">
                    <div class="siema">
                        <img src="img/gallery/1-min.JPG" alt="1-min"/>
                        <img src="img/gallery/2-min.JPG" alt="2-min"/>
                        <img src="img/gallery/3-min.JPG" alt="3-min"/>
                        <img src="img/gallery/4-min.JPG" alt="4-min"/>
                        <img src="img/gallery/5-min.JPG" alt="5-min"/>
                        <img src="img/gallery/6-min.JPG" alt="6-min"/>
                        <img src="img/gallery/7-min.JPG" alt="7-min"/>
                        <img src="img/gallery/8-min.JPG" alt="8-min"/>
                        <img src="img/gallery/9-min.JPG" alt="9-min"/>
                    </div>
                    <div class="btn-siema">
                        <div class="btn-prev prev"><i class="fas fa-chevron-circle-left"></i></div>
                        <div class="btn-next next"><i class="fas fa-chevron-circle-right"></i></div>
                        <p class="warn">Best viewed in Desktops!</p>
                    </div>
                </div>
            </div>
        </section>


        <div class="line-break"></div>


        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">Developers</h2>
            </div>

            <div class="row">
                <div class="dev">
                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="img/devs/sharad.jpg" alt="Sharad Roy" class="dev__img">
                            <figcaption class="dev__caption">Sharad Roy</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Sharad Roy</strong><br/>Front-End Developer</div>
                        <a href="mailto:sharadr@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.facebook.com/sharad.roy29" target="_blank" class="dev__profile">
                            <i class="fab fa-facebook-f dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            &nbsp;
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="img/devs/pramodh.jpeg" alt="Sri Pramodh" class="dev__img">
                            <figcaption class="dev__caption">Sri Pramodh</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Sri Pramodh</strong><br/>Back-End Developer</div>
                        <a href="mailto:rachuris@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.facebook.com/pramodhrachuri" target="_blank" class="dev__profile">
                            <i class="fab fa-facebook-f dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9298100490
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="img/devs/ahaan.jpg" alt="Ahaan Dabholkar" class="dev__img">
                            <figcaption class="dev__caption">Ahaan Dabholkar</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Ahaan Dabholkar</strong><br/>Back-End Developer</div>
                        <a href="mailto:ahaand@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.facebook.com/ahaan.dabholkar" target="_blank" class="dev__profile">
                            <i class="fab fa-facebook-f dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9473751641
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="dev">
                    <div class="col-1-of-4">&nbsp;</div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="img/devs/aniket.jpg" alt="Aniket Raj" class="dev__img">
                            <figcaption class="dev__caption">Aniket Raj</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Aniket Raj</strong><br/>Content Writer</div>
                        <a href="mailto:aniketr@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100010720866538" target="_blank" class="dev__profile">
                            <i class="fab fa-facebook-f dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9521205979
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="img/devs/gaurav.jpg" alt="Gaurav Verma" class="dev__img">
                            <figcaption class="dev__caption">Gaurav Verma</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Gaurav Verma</strong><br/>Content Writer</div>
                        <a href="mailto:gauravv@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.facebook.com/gv99gv" target="_blank" class="dev__profile">
                            <i class="fab fa-facebook-f dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 7976521104
                        </div>
                    </div>

                    <div class="col-1-of-4">&nbsp;</div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="row">
                <div class="col-2-of-3">
                    <div class="footer__disclaimer">
                        <div class="footer__title">
                            Disclaimer
                        </div>
                        <p class="footer__text">
                            The content on this website is developed solely by the student body of Indian Institute of Technology Bhilai. None of the views on any of the topics are endorsed by the institution.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="footer__connect">
                        <div class="footer__title">
                            Connect
                        </div>
                        <ul class="footer__list">
                            <li class="footer__item"><a href="https://www.facebook.com/iit.bh/" class="footer__link footer__link--facebook"><i class="fab fa-facebook-square"></i>Facebook</a></li>
                            <li class="footer__item"><a href="https://twitter.com/IIT_Bhilai" class="footer__link footer__link--twitter"><i class="fab fa-twitter"></i>Twitter</a></li>
                            <li class="footer__item"><a href="https://www.instagram.com/iitbhilai/" class="footer__link footer__link--instagram"><i class="fab fa-instagram"></i>Instagram</a></li>
                            <li class="footer__item"><a href="https://www.linkedin.com/school/iit-bhilai/" class="footer__link footer__link--linkedin"><i class="fab fa-linkedin"></i>LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__copyright">
                <div class="row">
                    <div class="col-2-of-3">
                        <p class="copyright">&copy; 2018 &dash; 2019, Council of Student Affairs, IIT Bhilai</p>
                    </div>
                    <div class="col-1-of-3"><p class="love">Made with <i class="fas fa-heart"></i></p></div>
                </div>
            </div>

        </footer>

        <script
              src="https://code.jquery.com/jquery-2.2.4.min.js"
              integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
              crossorigin="anonymous"></script>

        <script src="js/scrollspy.js"></script>
        <script src="js/siema.min.js"></script>
        <script src="js/script.js"></script>
        <script>
            const mySiema = new Siema({
                duration: 600,
                easing: 'ease-out',
                loop: true
            });

            document.querySelector('.prev').addEventListener('click', () => mySiema.prev());
            document.querySelector('.next').addEventListener('click', () => mySiema.next());

            //Modal for Live updates
            var live = document.getElementById('myModal--2');
            var btn = document.getElementById("modalBtn");
            var span = document.getElementsByClassName("close")[1];
            btn.onclick = function() {
                live.style.display = "block";
            }
            span.onclick = function() {
                live.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == live) {
                    live.style.display = "none";
                }
            }

            //Modal for Checklist
            $(window).load(function(){
                $('.page-loader').fadeOut();
                var modal = document.getElementById('myModal--1');
                var span = document.getElementsByClassName("close")[0];
                setTimeout(function(){
                    modal.style.display = "block";
                }, 2000)
                span.onclick = function() {
                    modal.style.display = "none";
                }
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            });
        </script>


    </body>

</html>
