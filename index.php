<?php include "assets/includes/header.php"?>

<body>

    <!--top bar navigation-->
    <?php include "assets/includes/nav.php"?>

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
                        <h4>Featured Tutorials</h4>
                    </center>
                   <?php include "sliderfull.php"?>
                   <?php include "slidersmall.php"?>
                    <!-- <div class="card col s12 m12 l5 hoverable featured">
                        <iframe width="260" height="315" src="https://www.youtube.com/embed/mpMw53ymwmI?start=8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="card col s12 m12 l5 hoverable featured">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/wG5RWz74XFQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
    <?php include "assets/includes/aboutme.php" ?>
    <!-- Portfolio -->
    <?php include "assets/includes/portfolio.php" ?>


    </div>
    <center>
        <a href="https://github.com/jondisla" target="_blank" class="waves-effect waves-light blue btn"
            id="gitbutton">MORE
            ON GITHUB</a>
    </center>
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

<!-- Footer -->
    <?php include "assets/includes/footer.php"?>

</body>

</html>