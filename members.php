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

                        $ellen = new Member();
                        $ellen->name = 'Ellen Pao';
                        $ellen->linkedin = 'https://www.linkedin.com/in/ellentpao/';
                        $ellen->title = 'Co-President';
                        $ellen->year = '3rd';
                        $ellen->major = 'Information Technology Management';
                        $ellen->imgsrc = 'pics/ellen.jpg';

                        $rohil = new Member();
                        $rohil->name = 'Rohil Shah';
                        $rohil->linkedin = '';
                        $rohil->title = 'Co-President';
                        $rohil->year = '3rd';
                        $rohil->major = 'Industrial Engineering';
                        $rohil->imgsrc = 'pics/rohil.jpg';

                        $dani = new Member();
                        $dani->name="Sean Chua";
                        $dani->linkedin = '';
                        $dani->title = 'VP of Internal Affairs';
                        $dani->year = '2nd';
                        $dani->major = 'Industrial Engineering';
                        $dani->imgsrc="pics/dani.jpg";
     
                        $lynn = new Member();
                        $lynn->name = "Lynn You";
                        $lynn->linkedin = 'https://www.linkedin.com/in/lynnyou';
                        $lynn->title = "VP of Internal Affairs";
                        $lynn->major = "Computer Science";
                        $lynn->year = '3rd';
                        $lynn->imgsrc = "pics/lynn.jpg";

                        $ronak = new Member();
                        $ronak->name = 'Ronak Mukhopadhyay';
                        $ronak->linkedin = 'https://www.linkedin.com/in/ronak-mukhopadhyay-aa48a2101';
                        $ronak->title = 'VP of Projects';
                        $ronak->year = '4th';
                        $ronak->major = 'Industrial Engineering';
                        $ronak->imgsrc = 'pics/ronak.jpg';

                      

                        $kexin = new Member();
                        $kexin->name = 'Kexin Zhang';
                        $kexin->linkedin = 'https://www.linkedin.com/in/kexinzhang1/';
                        $kexin->title = 'VP of Marketing and Recruitment';
                        $kexin->major = 'Industrial Engineering';
                        $kexin->year = '3rd';
                        $kexin->imgsrc = 'pics/kexin.jpeg';

               

                        $execMembers = array($ellen, $rohil, $dani, $lynn, $ronak, $kexin);

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
