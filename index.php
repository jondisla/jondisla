<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo="contact@johndisla.com";
    $headers = "From: ".$mail;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Locaition: index.php?mailsend");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css"
        integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <!-- animate css -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">


    <link rel="stylesheet" href="assets/main2.css">

    <title>John Disla</title>
</head>

<body>

    <!--top bar navigation-->
    <nav style="position: fixed;z-index: 1;">

        <div class="nav-wrapper" id="topBar">
        <span style="position:absolute;left:20px;background:#337E95;padding:0px 10px;"><a href="johndislaresume.html">View Resume</a></span>
            <div class="container">
            
                <a href="index.php" class="brand-logo  animated  bounceInDown "><img src="assets/img/logo3.png"></a>
                
                <ul class="links right hide-on-med-and-down">
                    <li id="resume">
                        <!--<a href="johndislaresume.html">Resume</a>-->
                    </li>
                    <li id="about">
                        <a>About</a>
                    </li>
                    <li id="portfolio">
                        <a>Portfolio</a>
                    </li>
                    <a href="#modal1" class="modal-trigger">
                        <li id="contact">
                            Contact
                    </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--First section-->

    <div class="col s12 no-padding-bottom hoverable" id="topCard">
        <div class="container">
            <div id="topcontents">
                <center>
                    <span class="topTitle">
                        <h1>Hey, John Disla here...</h1>
                    </span>
                    <p id="topSub">Passionate
                        <strong>Web Developer</strong> from the US.</p>
                    <p id="topSub">Building web solutions is my goal and I love everything about it.</p>
                </center>
                <div class="row">
                    <center>
                        <h4>Featured Code Along</h4>
                    </center>
                    <div class="card col s12 m12 l12 hoverable featured">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/mpMw53ymwmI?start=8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <!-- <div class="card col s12 m12 l5 hoverable featured">
                        <h4>Featured Code Along</h4>
                        <p>In this code along, I go step by step in creating a basic html and css front end design.</p>
                    </div> -->
                </div>
                <center>
                    <!-- <img class="animated fadeIn delay-0s" id="roundedimg" src="assets/img/jd.jpg" class="hoverable"> -->
                    <!-- <div class="welcome">Check out my work</div> -->
                    <i class="fas fa-chevron-down" id="downArrow"></i>
                </center>
            </div>
        </div>
    </div>

    <!--About me-->
    <div class="card-content container aboutSec">
        <center>
            <span id="abouttitle">A little about me</span>
        </center>
        <section data-aos="fade-in">
            <div class="row">
                <div class="card col s12 m12 l3 hoverable" id="cardSub2">
                    <center>
                        <h5 style="text-decoration: underline;">The start</h5>
                    </center>
                    <p id="aboutext">I got started with development in college.
                        <br>
                        Development was a hobby back then and I also studied music and sound engineering.  I decided to focus more on web
                        development about a year ago.  Now most of the time I am coding mostly with PHP or Javascript. </p>
                    <br>
                    <p id="aboutext">
                        Fast forward to today, I love web development even more.
                        <span style="font-weight: bold;" class="hoverable">I really enjoy the design and user
                            experience aspect of the web.</span>
                    </p>
                </div>
                <div class="col l1"></div>
                <div class="card col s12 m12 l4 hoverable" id="cardSub2">
                    <center>
                        <h5 style="text-decoration: underline;">What I'm made of</h5>
                    </center>
                    <p id="aboutext">I'm am a mix of a technical and artistic roots. I studied music and have a sound
                        engineering education
                        coupled with
                        <span style="font-weight: bold;" class="hoverable">programming and analysis training in
                            college</span>.
                    </p>
                    <br>
                    <p id="aboutext">My specialization in web development is to take a design and translate that into
                        <span style="font-weight: bold;" class="hoverable">a responsive site</span>.  I also love to introduce dynamics with
                        <span style="font-weight: bold;" class="hoverable">JS, PHP and SQL</span>. I've had to
                        learn and study so much through out my short time and
                        I have a tendency to not stop until a problem is solved.</p>
                </div>
                <div class="col l1"></div>
                <div class="card hoverable col s12 m12 l3" id="cardSub2">
                    <center>
                        <h5 style="text-decoration: underline;">Value</h5>
                    </center>
                    <p id="aboutext">I hold a technical diploma in web development with focus on programming from
                        Valencia College and UCF. Processionaly I've worked as web admin for a local school and small projects.</p>
                    <br>
                    <p id="aboutext">I work in tech support currently but would love to focus more on
                        the design and development
                        side of technology. I love the creative and design aspect of the web and find this career
                        exciting
                        and fulfilling.</p>
                    </p>
                </div>
            </div>
        </section>
    </div>
    </div>
    <br>
    <!--PORTFOLIO-->
    
    <div class="no-padding-bottom portfolioSec" id="cardDark" style="background:#06080C;">
        <div class="container" data-aos="fade-in">
            <center>
                <span id="cardTitle">Mobile Dash (only mobile view)</span>
                <br>
                <br>
                <br>
                
                <!--Projects-->
                <div class="row hoverable">
                    <div class="col s12 m12 l6">
                        <a href="https://github.com/jondisla/mobiledash" target="_blank">
                            <img id="projectpics" src="assets/img/dashshot.png" style="width:200px;height:400px">
                        </a>
                    </div>
                    <div class="col s12 m12 l6" data-aos="fade-in">
                        <p>This is the front end design developed with HTML, CSS and Javascript.  This is just the design phase and not a complete app.</p>
                        <br>
                        <p>This design was possible with a mix of Bootstrap grid to get the cards to fit as columns.  Font Awesome was used for the buttons,
                       and a Javascript library called Swipe was used for the Popular Courses.  You are welcome to swipe through the popular courses to check
                       it's functionality.
                        </p>
                    </div>
                </div>
            </center>
        </div>
        <center>
            <ul style="margin-top: -30px;" data-aos="flip-up" data-aos-duration="2000">
                <li>
                    <img id="projectstech" src="assets/img/basicstack.png">
                </li>
                <li>
                    <img id="projectstech" src="assets/img/bootstrap.png">
                </li>
                <li>
                    <img id="projectstech" src="https://cdn2.iconfinder.com/data/icons/designer-skills/128/code-programming-javascript-software-develop-command-language-512.png">
                </li>
                <!--<li>
                    <img id="projectstech" src="assets/img/icon-mysql.png">
                </li>-->
            </ul>
        </center>
    </div>
    
    <!-- PLAN MY DAY-->
    <div id="card-white">
        <div class="container" data-aos="fade-in" data-aos-duration="1000">
            <center>
                <span id="cardTitle">Plan My Day</span>
                <br>
                <br>
                <br>
                <!--Projects-->
                <div class="row hoverable">
                    <div class="col s12 m12 l6">
                        <p>Simple todo app using PHP to perform CRUD operation with MySql. The front end is html, Sass
                            and Javascript.</p>
                        <br>
                        <p>Features adding, editing and removing tasks.</p>
                    </div>
                    <div class="col s12 m12 l6">
                        <a href="https://planmyday.johndisla.com" target="_blank">
                            <img id="projectpics" src="assets/img/planmyday.png">
                        </a>
                    </div>
                </div>
                <center>
                    <ul style="margin-top: -30px;" data-aos="flip-up" data-aos-duration="2000">
                        <li>
                            <img id="projectstech" src="assets/img/basicstack.png">
                        </li>
                        <li>
                            <img id="projectstech" src="assets/img/bootstrap.png">
                        </li>
                        <li>
                            <img id="projectstech" src="assets/img/php.png">
                        </li>
                        <li>
                            <img id="projectstech" src="assets/img/icon-mysql.png">
                        </li>
                    </ul>
                </center>
        </div>
        </center>
    </div>
    
    <!--PLAN IT-->

    <div class="no-padding-bottom portfolioSec" id="cardDark" style="background:rgb(199, 75, 75);">
        <div class="container" data-aos="fade-in">
            <center>
                <span id="cardTitle">PlanIt</span>
                <br>
                <br>
                <br>

                <!--Projects-->
                <div class="row hoverable">
                    <div class="col s12 m12 l6">
                        <a href="https://planlesson.herokuapp.com/index.php" target="_blank">
                            <img id="projectpics" src="assets/img/planit.png">
                        </a>
                    </div>
                    <div class="col s12 m12 l6" data-aos="fade-in">
                        <p>Planit&copy; is the brainchild of a teacher/principal that aims to
                            provide a free resource for in-class lesson and activities.</p>
                        <br>
                        <p>This website has a PHP backend with ClearDB based on MySql database. It features full
                            CRUD
                            functionality allowing users to post data to be stored within the site to later be used
                            by
                            others.
                        </p>
                    </div>
                </div>
            </center>
        </div>
        <center>
            <ul style="margin-top: -30px;" data-aos="flip-up" data-aos-duration="2000">
                <li>
                    <img id="projectstech" src="assets/img/basicstack.png">
                </li>
                <li>
                    <img id="projectstech" src="assets/img/bootstrap.png">
                </li>
                <li>
                    <img id="projectstech" src="assets/img/php.png">
                </li>
                <li>
                    <img id="projectstech" src="assets/img/icon-mysql.png">
                </li>
            </ul>
        </center>
    </div>

    
    <!--Corkboard-->
    <div class="no-padding-bottom" id="cardDark">
        <div class="container" data-aos="fade-in" data-aos-duration="1000">
            <center>
                <span id="cardTitle">Corkboard</span>
                <br>
                <br>
                <br>

                <!--Projects-->
                <div class="row hoverable">
                    <div class="col s12 m12 l6">
                        <a href="http://corkboard2018.herokuapp.com/" target="_blank">
                            <img id="projectpics" src="assets/img/wop.jpg">
                        </a>
                    </div>
                    <div class="col s12 m12 l6">
                        <p>Organize your resources and collaborate with your peers. How many favorites do you have
                            in
                            your browser?
                            If you have ever added a favorite in your browser, you would see how un-appealing and
                            messy
                            your
                            resources are stored.</p>
                        <br>
                        <p>With corkboard your resources are categorized depending on your preferences. It has a
                            sleek
                            design
                            with a picture of the resource. Create as many boards as you want and invite friends to
                            your
                            board, the possibilities are endless.
                        </p>
                    </div>
                </div>
            </center>
        </div>
        <center>
            <ul style="margin-top: -30px;" data-aos="flip-up" data-aos-duration="2000">
                <li>
                    <img id="projectstech" src="assets/img/icon-mysql.png">
                </li>
                <li>
                    <img id="projectstech" src="assets/img/nodejs.png">
                </li>
                <li>
                    <img id="projectstech" src="assets/img/bootstrap.png">
                </li>
                <li>
                    <img id="projectstech" src="assets/img/express.png">
                </li>
            </ul>
        </center>
    </div>

    <!-- PARK FINDER -->
    <div id="card-green">
        <div class="container" data-aos="fade-in" data-aos-duration="1000">
            <center>
                <span id="cardTitle">Park Finder</span>
                <br>
                <br>
                <br>
                <!--Projects-->
                <div class="row hoverable">
                    <div class="col s12 m12 l6">
                        <a href="https://jondisla.github.io/parkfinder/" target="_blank">
                            <img id="projectpics" src="assets/img/parkfinder.jpg">
                        </a>
                    </div>
                    <div class="col s12 m12 l6">
                        <p>The goal of Park Finder is to help plan your next trip to Florida national parks. With
                            data gathered
                            from the national parks and google maps APIs we managed to pull off a simple yet
                            informative
                            app. Included is also weather information from an open weather API.</p>
                        <br>
                        <p>Currently the app only has data for Florida national parks. </p>
                    </div>
                </div>
            </center>
        </div>
        <center>
            <ul style="margin-top: -60px;padding-bottom: 40px;" class="s12 m12 l12" data-aos="flip-up"
                data-aos-duration="2000">
                <li>
                    <img id="projectstech" style="display:inline;" src="assets/img/basicstack.png">
                </li>
                <li>
                    <img id="projectstech" style="display:inline;" src="assets/img/materialize.png">
                </li>
                <li>
                    <img id="projectstech" style="display:inline;" src="assets/img/firebase.png">
                </li>
            </ul>
        </center>
    </div>
    <!-- CHURCH///////// -->
    <div id="card-blue">
        <div class="container" data-aos="fade-in" data-aos-duration="1000">
            <center>
                <span id="cardTitle">West Orlando Church</span>
                <br>
                <br>
                <br>
                <!--Projects-->
                <div class="row hoverable">
                    <div class="col s12 m12 l6">
                        <p>This is a website built with Wordpress for a small local business. When taking on this
                            project I
                            had to learn Wordpress in about a week! It has basic functionality provided by the
                            theme as well
                            as some image editing and scaling</p>
                        <br>
                        <p>With wordpress it was easy to create a calendar and a tithing functionality for church
                            goers.</p>
                    </div>
                    <div class="col s12 m12 l6">
                        <a href="https://westorlandochurch.tv" target="_blank">
                            <img id="projectpics" src="assets/img/woc.jpg">
                        </a>
                    </div>
                </div>
            </center>
        </div>
        <center>
            <ul style="margin-top: -30px;" data-aos="flip-up" data-aos-duration="2000">
                <li>
                    <img id="projectstech" style="display:inline;" src="assets/img/wordpress.png">
                </li>
            </ul>
        </center>
    </div>


    </div>
    <center>
        <a href="https://github.com/jondisla" target="_blank" class="waves-effect waves-light blue btn"
            id="gitbutton">MORE
            ON GITHUB</a>
    </center>
    </div>


    <!-- Contact Form-->
    <div class="col s12">
        <!--         <div class="card   no-padding-bottom" id="cardContact">
            <center>
                <div class="card-content">
                    <span id="cardTitle" style="color:white;" class="contactTxt">Contact Me</span>
            </center>
            <br>
            <div class="container" style="width: 80%;">
                <form action="https://formspree.io/jon.disla@gmail.com" method="POST" id="form">
                    <input id="email" type="email" name="email" placeholder="Your email" required>
                    <textarea id="message" name="message" placeholder="Your message" required></textarea>
                    <center>
                        <input type="text" name="_gotcha" style="display:none" />
                        <input type="hidden" name="_next" value="http://jondisla.com/thanks.html" />
                        <button id="send" class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </center>
                </form>
                <div id="thanks"></div>
            </div> -->
    </div>
    <!-- Modal Trigger -->
    <center><a class="waves-effect waves-light btn modal-trigger" href="#modal1">Contact me</a></center>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Let's talk</h4>
            </center><br>
            <div class="row">
                <form action="index.php" method="POST" class="col s12">
                    <div class="row">
                        <div class="input-field col s12 l6">
                            <input name="name" id="name" type="text" class="validate" required>
                            <label for="name">Name</label>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 l6">
                                <input name="subject" type="text" class="validate" required>
                                <label for="subject">Company</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 l12">
                                <input name="mail" id="email" type="email" class="validate" required>
                                <label for="mail">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="message" id="message" class="materialize-textarea" required></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <button name="submit" type="submit" class="waves-effect waves-green btn-flat">SUBMIT</a>
        </div>
        </form>
    </div>
    <center>
        <p style='color: #EA6F76' ;>Powered by Materialize</p>
    </center>
    </div>

    <div class="footer">
        <div class="container">
            <div class="footerIcons">

                <ul>
                    <a href="https://github.com/jondisla">
                        <li>
                            <i class="fab fa-github"></i>
                        </li>
                    </a>
                    <a href="https://www.linkedin.com/in/jonathan-dis/">
                        <li>
                            <i class="fab fa-linkedin"></i>
                        </li>
                    </a>
                    <a href="https://stackexchange.com/users/12227556/jonathan-disla">
                        <li>
                            <i class="fab fa-stack-overflow"></i>
                        </li>
                    </a>

                </ul>
            </div>
        </div>
        <br>
        <center>Copyright 2019 johndisla.com &copy</center>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="assets/app.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>