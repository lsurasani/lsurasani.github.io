<!DOCTYPE html>
<html>

    <head>
        <?php include "head.html"; ?>
        <title>Students Consulting for Nonprofit Organizations - Our Members</title>
        <meta name="description" content="Our members are passionate about applying their analytical, communication, and leadership skills to contribute to the Atlanta community.">
    </head>

    <body>
        <?php include_once("analyticstracking.php") ?>

        <div class="main">
            <?php include "nav.html"; ?>

            <div class="ui container members">
                <div class="ui horizontal divider">
                    <h1>Our Members</h1>
                </div>
                <p>We recruit new members at the beginning of the fall and spring semesters, and we aim to have members that come from a diverse range of majors and backgrounds. Our members are passionate about applying their analytical, communication, and leadership skills to contribute to the Atlanta community.</p>
                <div class="ui stackable grid member-stats">
                    <div class="equal width row">
                        <div class="column">
                            <div class="ui statistic">
                                <div class="label">
                                Average GPA
                                </div>
                                <div class="value">
                                3.62
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui statistic">
                                <div class="label">
                                Average Year
                                </div>
                                <div class="value">
                                2.7
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui horizontal divider">
                    <h1>Executive Board</h1>
                </div>
                <div class="ui exec-board">
                    <?php
                        class Member {
                            public $name;
                            public $linkedin;
                            public $title;
                            public $major;
                            public $year;
                            public $imgsrc;
                        }

                        $sean = new Member();
                        $sean->name = 'Sean Chua';
                        $sean->linkedin = 'https://www.linkedin.com/in/seanchua1/';
                        $sean->title = 'President';
                        $sean->year = '4th';
                        $sean->major = 'Industrial Engneering';
                        $sean->imgsrc = 'pics/sean.jpeg';

                        $tejas = new Member();
                        $tejas->name="Tejas Santanam";
                        $tejas->linkedin = 'https://www.linkedin.com/in/tejas-santanam-462251171';
                        $tejas->title = 'VP of Internal Affairs';
                        $tejas->year = '2nd';
                        $tejas->major = 'Industrial Engineering';
                        $tejas->imgsrc="pics/tejas.jpeg";

                        $suma = new Member();
                        $suma->name = "Suma Gangasani";
                        $suma->linkedin = 'https://www.linkedin.com/in/suma-gangasani/ ';
                        $suma->title = "VP of Projects";
                        $suma->major = "Industrial Engineering";
                        $suma->year = '2nd';
                        $suma->imgsrc = "pics/suma.jpg";

                        $roshan = new Member();
                        $roshan->name = 'Roshan Soni';
                        $roshan->linkedin = 'https://www.linkedin.com/in/roshan-soni-gt/';
                        $roshan->title = 'VP of External Affairs';
                        $roshan->year = '2nd';
                        $roshan->major = 'Industrial Engineering';
                        $roshan->imgsrc = "pics/roshan.jpg";



                        $execMembers = array($sean, $tejas, $suma, $roshan);

                        echo '<div class="ui cards">';

                        foreach($execMembers as $execMember) {
                            $linkedin_icon = '';
                            if (!empty($execMember->linkedin)) {
                                $linkedin_icon = '<a href="' . $execMember->linkedin . '" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>';
                            }

                            echo '<div class="card">';
                            echo '<div class="image"><img src="' . $execMember->imgsrc . '" alt="SCNO executive board member: ' . $execMember->name . '"></div>';
                            echo '<div class="content">';
                            echo $execMember->name . $linkedin_icon . '<br>' . $execMember->year . ' Year, ' . $execMember->major . '<br>' . $execMember->title;
                            echo '</div>';
                            echo '</div>';
                        }

                        echo '</div>';
                    ?>
                </div>
            </div>
            <?php include "footer.html"; ?>
        </div>

        <?php include "scripts.html"; ?>
    </body>

</html>
