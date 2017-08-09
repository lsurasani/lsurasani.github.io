<!DOCTYPE html>
<html>

    <?php include "head.html"; ?>

    <body>
        <div class="main">
            <?php include "nav.html"; ?>
            <div class="ui vertical segment pic-header">
                <div class="header">
                    <h1>Students Consulting for Nonprofit Organizations</h1>
                    <h2>At Georgia Tech</h2>
                </div>
            </div>
            <div class="ui vertical segment">
                <div class="ui container mission-statement">
                    <h4>Students Consulting for Nonprofit Organizations (SCNO) at Georgia Tech aims to help local nonprofit organizations by guiding our members in developing problem solving skills and real-world client interaction. Together, we can contribute to our community by solving industry challenges through analysis, project development, and detailed recommendations.</h4>
                </div>
            </div>
            <div class="ui vertical segment">
                <div class="ui grid stackable container home-categories">
                    <div class="three column row">
                        <div class="column">
                            <h3 class = "text-center text-uppercase text-primary">Empowering Communities</h3><br>
                            <img src = "pics/nonprofit.jpg" class = "center-block"><br>
                            <h6 class = "text-center">We consult for nonprofit organizations in Atlanta, solving different kinds of problems.</h6>
                            <a href = "we.php" class = "ui primary basic button">Get Consulted</a>
                        </div>
                        <div class="column">
                            <h3 class = "text-center text-uppercase text-primary">Developing Leaders</h3><br>
                            <img src = "pics/student.jpg" class = "center-block"><br>
                            <h6 class = "text-center">We have the most passionate students from a variety of majors to create innovative solutions.</h6>
                            <a href = "apply.php" class = "ui primary basic button">Apply Now</a>
                        </div>
                        <div class="column">
                            <h3 class = "text-center text-uppercase text-primary">Delivering Results</h3><br>
                            <img src = "pics/results.jpg" class = "center-block"><br>
                            <h6 class = "text-center">We give our clients a presentation and a detailed report of our recommendations.</h6>
                             <a href = "clients.php" class = "ui primary basic button">Our Clients</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "footer.html"; ?>
        </div>

        <?php include "scripts.html"; ?>
    </body>

</html>