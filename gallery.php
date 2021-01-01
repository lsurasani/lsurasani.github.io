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

                            $fk = new Photo();
                            $fk->pic = "pics/gallery/IMG_5704.JPG";
                            $fk->description = "FurKids Marketing Strategy Presentation";

                            $oh = new Photo();
                            $oh->pic = "pics/gallery/IMG_5703.JPG";
                            $oh->description = "Our House Presentation";
                        
                            $cac = new Photo();
                            $cac->pic = "pics/gallery/IMG_7635.JPG";
                            $cac->description = "Community Assistance Center Presentation";

                            $mac = new Photo();
                            $mac->pic = "pics/gallery/IMG_7636.JPG";
                            $mac->description = "MAC LAB Presentation";

                            $mfb = new Photo();
                            $mfb->pic = "pics/gallery/IMG_7637.JPG";
                            $mfb->description = "Midwest Food Bank Presentation";

                            $photos = array($fk, $oh, $cac, $mac, $mfb);

                            foreach($photos as $photo) {
                                echo '<div class="card">';
                                echo '<div class="image"><img src="' . $project->pic . '" alt="' . $project->description .'"></div>';
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
