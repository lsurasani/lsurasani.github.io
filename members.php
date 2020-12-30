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

                        $suma = new Member();
                        $suma->name = 'Suma Gangasani';
                        $suma->linkedin = 'https://www.linkedin.com/in/suma-gangasani/';
                        $suma->title = 'President';
                        $suma->year = '4th';
                        $suma->major = 'Industrial Engineering';
                        $suma->imgsrc = 'pics/Suma3.jpg';

                        $tejas = new Member();
                        $tejas->name="Tejas Santanam";
                        $tejas->linkedin = 'https://www.linkedin.com/in/tejas-santanam-462251171';
                        $tejas->title = 'VP of Internal Affairs';
                        $tejas->year = '3rd';
                        $tejas->major = 'Industrial Engineering';
                        $tejas->imgsrc="pics/Tejas2.jpeg";

                        $carter = new Member();
                        $carter->name = "Carter Gooch";
                        $carter->linkedin = 'https://www.linkedin.com/in/goochcarter/';
                        $carter->title = "VP of Projects";
                        $carter->major = "Business Administration";
                        $carter->year = '3rd';
                        $carter->imgsrc = "pics/Carter.png";

                        $eeshanee = new Member();
                        $eeshanee->name = 'Eeshanee Tripathy';
                        $eeshanee->linkedin = 'https://www.linkedin.com/in/eeshanee-tripathy-6a945b192/';
                        $eeshanee->title = 'VP of External Affairs';
                        $eeshanee->year = '3rd';
                        $eeshanee->major = 'Industrial Engineering';
                        $eeshanee->imgsrc = "pics/Eeshanee2.JPG";

			            $aleysha = new Member();
                        $aleysha->name = 'Aleysha Thomas';
                        $aleysha->linkedin = 'https://www.linkedin.com/in/aleysha-thomas-748871152/';
                        $aleysha->title = 'VP of Marketing';
                        $aleysha->year = '4th';
                        $aleysha->major = 'Industrial Engineering';
                        $aleysha->imgsrc = "pics/Aleysha.JPG";

                        $execMembers = array($suma, $tejas, $carter, $eeshanee, $aleysha);

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
