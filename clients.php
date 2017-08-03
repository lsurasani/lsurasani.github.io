<!DOCTYPE html>
<html>

    <?php include "head.html"; ?>

    <body>
        <?php include "nav.html"; ?>

        <div class="ui container">
            <div class="ui horizontal divider">
                <h1>Our Clients</h1>
            </div>
            <div class="projects">
                <div class="ui cards">
                    <?php 
                        class Project {
                            public $logo;
                            public $name;
                            public $description;
                        }

                        $ccsi = new Project();
                        $ccsi->logo = "pics/CCSI.jpg";
                        $ccsi->name = "CCSI";
                        $ccsi->description = "CCSI serves as a resource and service center to uplift and empower people in Atlanta's Westside Community through enrichment programs and community services. SCNO has been working over one year to restructure the organization to become a separate entity from the church by providing high level structuring guidelines and roadmaps.";

                        $tfa = new Project();
                        $tfa->logo = "pics/TFA.jpg";
                        $tfa->name = "Teach for America";
                        $tfa->description = "Teach for America is a national nonprofit organization aimed at improving the quality of education. Teach for America recruits graduates from top universities to teach for two years in public schools that lack funding and resources.
                            SCNO works with the Atlanta branch of Teach for America to address decreasing application numbers from Georgia Tech students.";

                        $pcrf = new Project();
                        $pcrf->logo = "pics/PCRF.jpg";
                        $pcrf->name = "Palestine's Children's Relief Fund";
                        $pcrf->description = "The Palestine Children's Relief Fund is a non-political, non-profit organization that works to aid the medical and humanitarian crisis in the middle east.
                            They focus specifically on suffering children in the Middle East with varying medical needs. SCNO  worked  with this organization over one year to develop a comprehensive portfolio to attract donations and apply for corporate level sponsorships and grants.";

                        $ghf = new Project();
                        $ghf->logo = "pics/GHF.png";
                        $ghf->name = "Glitter of Hope Foundation";
                        $ghf->description = "The Glitter of Hope foundation works to enhance living and health conditions in communities by providing a wide range of programs primarily funded through donations or sponsorships.
                            SCNO worked with Glitter of Hope for 6 months to connect this organization with larger corporate entities to accumulate donations and sponsorships.
                            This project saw the team work on developing a platform for the organization to use as a basis for its applications to corporate grant programs.";

                        $c21 = new Project();
                        $c21->logo = "pics/21C.jpg";
                        $c21->name = "21st Century STEM Foundation";
                        $c21->description = "21st Century Science, Technology, Engineering and Math (STEM) foundation established in 2008 to aid in providing multi-disciplinary learning experiences to inner city youth. 21st Century STEM Foundation's mission is to inspire, engage and educate youth through innovative programs, training and activities to create future leaders of tomorrow in Science, Technology, Engineering and Math (STEM) related careers.
     SCNO has been working with this organization for a year to develop a marketing and public relations strategy for the organization to enact as a way of increasing awareness.";

                        $projects = array($ccsi, $tfa, $pcrf, $ghf, $c21);

                        foreach($projects as $project) {
                            echo '<div class="card">';
                            echo '<div class="image"><img src="' . $project->logo . '"></div>';
                            echo '<div class="content"><div class="header">' . $project->name . '</div><div class="description">' . $project->description . '</div></div>';
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>

        <?php include "scripts.html"; ?>
    </body>

</html>
