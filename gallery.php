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
                            }

                        
                            $photos = array();

                            foreach($photos as $photo) {
                                echo '<div class="card">';
                                echo '<div class="image"><img src="' . $project->logo . '" alt="' . $project->name .' logo"></div>';
                                echo '<div class="content"><div class="header">' . $project->name . '</div><div class="description">' . $project->description . '</div></div>';
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
