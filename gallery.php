<!DOCTYPE html>
<html>

    <head>
        <?php include "head.html"; ?>
        <title>Students Consulting for Nonprofit Organizations - Our Clients</title>
        <meta name="description" content="SCNO aims to empower the Atlanta community through rewarding consulting projects with local nonprofits.">
    </head>

    <body>
        <?php include_once("analyticstracking.php") ?>

        <div class="main">
            <?php include "nav.html"; ?>  
            <div class="ui container">
                <div class="ui horizontal divider">
                    <h1>Photo Gallery</h1>
                </div>
                <div class="projects">
                    <div class="ui cards">
                        <?php 
                            class Photo {
                                public $pic;
                                public $description;
                            }

                            /* Images had errors
                            
                            $fk = new Photo();
                            $fk->pic = "pics/fk.jpg";
                            $fk->description = "FurKids Marketing Strategy Presentation";

                            $oh = new Photo();
                            $oh->pic = "pics/oh.jpg";
                            $oh->description = "Our House Presentation"; */
                        
                            $cac = new Photo();
                            $cac->pic = "pics/IMG_7635.jpg";
                            $cac->description = "Community Assistance Center Presentation";

                            $mac = new Photo();
                            $mac->pic = "pics/IMG_7636.jpg";
                            $mac->description = "MAC LAB Presentation";

                            $mfb = new Photo();
                            $mfb->pic = "pics/IMG_7637.jpg";
                            $mfb->description = "Midwest Food Bank Presentation";

                            $team = new Photo();
                            $team->pic = "pics/IMG_7639.jpg";
                            $team->description = "The SCNO@GT team";

                            $ew = new Photo();
                            $ew->pic = "pics/IMG_7640.jpg";
                            $ew->description = "Everybody Wins! Atlanta Presentation";

                            $mfb2 = new Photo();
                            $mfb2->pic = "pics/IMG_7641.jpg";
                            $mfb2->description = "Midwest Food Bank Georgia Presentation";

                            $mac2 = new Photo();
                            $mac2->pic = "pics/IMG_7642.jpg";
                            $mac2->description = "MAC LAB Fall 2018 Presentation";

                            $cf = new Photo();
                            $cf->pic = "pics/IMG_7643.jpg";
                            $cf->description = "City of Refuge Presentation";

                            $photos = array($cac, $mac, $mfb, $team, $ew, $mfb2, $mac2, $cf);

                            foreach($photos as $photo) {
                                echo '<div class="card">';
                                echo '<div class="image"><img src="' . $photo->pic . '" alt="' . $photo->description .' logo"></div>';
                                echo '<div class="content"><div class="description">' . $photo->description . '</div></div>';
                                echo '</div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php include "footer.html"; ?>
        </div>

        <?php include "scripts.html"; ?>
    </body>

</html>
