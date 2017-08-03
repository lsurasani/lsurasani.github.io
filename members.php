<!DOCTYPE html>
<html>

    <?php include "head.html"; ?>

    <body>
        <div class="main">
            <?php include "nav.html"; ?>

            <div class="ui container members">
                <div class="ui horizontal divider">
                    <h1>Our Members</h1>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="ui grid member-stats">
                    <div class="three column row">
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

                        $lekha = new Member();
                        $lekha->name = 'Lekha Surasani';
                        $lekha->linkedin = 'https://www.linkedin.com/in/lekha-surasani-b61b2584';
                        $lekha->title = 'President';
                        $lekha->year = '4th';
                        $lekha->major = 'Computer Science';
                        $lekha->imgsrc = 'pics/lekha.jpg';

                        $vivek = new Member();
                        $vivek->name="Vivek Jajoo";
                        $vivek->linkedin="https://www.linkedin.com/in/vivek-jajoo-8a1397104";
                        $vivek->title="VP of Operations";
                        $vivek->year="3rd";
                        $vivek->major="Industrial Engineering";
                        $vivek->imgsrc="pics/vivek.jpg";

                        $dani = new Member();
                        $dani->name="Dani Gresge";
                        $dani->linkedin = 'https://www.linkedin.com/in/danielle-gresge-a69803106';
                        $dani->title = 'VP of External Affairs';
                        $dani->year = '3rd';
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
                        $ronak->linkedin = '';
                        $ronak->title = 'VP of Projects';
                        $ronak->year = '4th';
                        $ronak->major = 'Industrial Engineering';
                        $ronak->imgsrc = 'pics/ronak.png';

                        $rohil = new Member();
                        $rohil->name = 'Rohil Shah';
                        $rohil->linkedin = '';
                        $rohil->title = 'Director of Projects';
                        $rohil->year = '3rd';
                        $rohil->major = 'Industrial Engineering';
                        $rohil->imgsrc = 'pics/rohil.png';

                        $kexin = new Member();
                        $kexin->name = 'Kexin Zhang';
                        $kexin->linkedin = 'https://www.linkedin.com/in/kexinzhang1/';
                        $kexin->title = 'VP of Marketing and Recruitment';
                        $kexin->major = 'Industrial Engineering';
                        $kexin->year = '3rd';
                        $kexin->imgsrc = 'pics/kexin.jpeg';

                        $ellen = new Member();
                        $ellen->name = 'Ellen Pao';
                        $ellen->linkedin = 'https://www.linkedin.com/in/ellentpao/';
                        $ellen->title = 'Director of Marketing';
                        $ellen->major = 'Business and Computer Science';
                        $ellen->year = '3rd';
                        $ellen->imgsrc = 'pics/ellen.jpg';

                        $execMembers = array($lekha, $vivek, $dani, $lynn, $ronak, $rohil, $kexin, $ellen);

                        echo '<div class="ui cards">';

                        foreach($execMembers as $execMember) {
                            echo '<div class="card">';
                            echo '<div class="image"><img src="' . $execMember->imgsrc . '"></div>';
                            echo '<div class="content">';
                            echo $execMember->name . '<br>' . $execMember->year . ' Year, ' . $execMember->major . '<br>' . $execMember->title;
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
