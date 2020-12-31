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
                    <h1>Our Clients</h1>
                </div>
                <h4>Some of our past engagements include: </h4>
                <div class="projects">
                    <div class="ui cards">
                        <?php 
                            class Project {
                                public $logo;
                                public $name;
                                public $description;
                            }

                            $asf = new Project();
                            $asf->logo = "pics/asf.png";
                            $asf->name = "Alchemy Sky Foundation";
                            $asf->description = "Alchemy Sky Foundation is a nonprofit organization based out of Atlanta that is centered around supporting veterans through the power of music. SCNO worked with the Alchemy Sky Foundation to deploy new fundraising strategies and develop long-lasting relationships with local organizations. Additionally, SCNO devised a strategy to increase Alchemy Sky’s social media presence.";

                            $atlm = new Project();
                            $atlm->logo = "pics/atlmission.png";
                            $atlm->name = "Atlanta Mission";
                            $atlm->description = "Atlanta Mission is the city’s largest and longest-running provider of services to homeless men, women and children and invests in the spiritual, personal, and professional development of people, restoring and equipping them to intentional living. SCNO proposed a streamlined redesign for Atlanta Mission’s in-kind donation process that involves electronically logging and monitoring inventory levels in a donor database and immediately sending donors an automated receipt upon processing their donation.";

                            $catp = new Project();
                            $catp->logo = "pics/cp.png";
                            $catp->name = "Caterpillar's Promise";
                            $catp->description = "Caterpillar's Promise, Inc. is a nonprofit with a mission to motivate others, especially youth, to use their talents, such as Science, Technology, Engineering, the Arts, and Mathematics, for the greater good through service, seminars, and showcases. SCNO performed a visual redesign, revised the login system, and linked STEAM session videos to a real-time calendar on the Caterpillar’s Promise website. The team also created a Tableau dashboard to help Caterpillar’s Promise track and quantify the impact of their mentorship program.";
                            
                            $fk = new Project();
                            $fk->logo = "pics/furkids.jpeg";
                            $fk->name = "FurKids";
                            $fk->description = "FurKids is a charitable organization that operates the largest cage-free, no-kill shelter in the Southeast for rescued cats and Sadie’s Place, a no-kill shelter for dogs. SCNO devised a marketing strategy to help FurKids with brand recognition to help differentiate them from competitors. The team also generated options for various programs Furkids could adopt to increase revenue via donations from corporate relationships.";

                            $ccsi = new Project();
                            $ccsi->logo = "pics/CCSI.jpg";
                            $ccsi->name = "CCSI";
                            $ccsi->description = "CCSI serves as a resource and service center to uplift and empower people in Atlanta's Westside Community through enrichment programs and community services. SCNO worked with CCSI to restructure the organization to become a separate entity from the church by providing high level structuring guidelines and roadmaps.";

                            $tfa = new Project();
                            $tfa->logo = "pics/TFA.jpg";
                            $tfa->name = "Teach for America";
                            $tfa->description = "Teach for America is a national nonprofit organization aimed at improving the quality of education. Teach for America recruits graduates from top universities to teach for two years in public schools that lack funding and resources.
                                SCNO worked with the Atlanta branch of Teach for America to address decreasing application numbers from Georgia Tech students. The SCNO team conducted survey data analysis, cost benefit analysis, and competitor analysis to deliver a detailed, targeted marketing strategy.";

                            $pcrf = new Project();
                            $pcrf->logo = "pics/PCRF.jpg";
                            $pcrf->name = "Palestine's Children's Relief Fund";
                            $pcrf->description = "The Palestine Children's Relief Fund is a non-political, nonprofit organization that works to aid the medical and humanitarian crisis in the middle east.
                                They focus specifically on suffering children in the Middle East with varying medical needs. SCNO developed a comprehensive portfolio to attract donations and apply for corporate level sponsorships and grants.";

                            $ghf = new Project();
                            $ghf->logo = "pics/GHF.png";
                            $ghf->name = "Glitter of Hope Foundation";
                            $ghf->description = "The Glitter of Hope foundation works to enhance living and health conditions in communities by providing a wide range of programs primarily funded through donations or sponsorships.
                                SCNO worked with Glitter of Hope for 6 months to connect this organization with larger corporate entities to accumulate donations and sponsorships.
                                This project saw the team work on developing a platform for the organization to use as a basis for its applications to corporate grant programs.";

                            $c21 = new Project();
                            $c21->logo = "pics/21C.jpg";
                            $c21->name = "21st Century STEM Foundation";
                            $c21->description = "21st Century STEM foundation was established in 2008 to aid in providing multi-disciplinary learning experiences to inner city youth. The Foundation's mission is to inspire, engage and educate youth through innovative programs, training, and activities to create future leaders of tomorrow in Science, Technology, Engineering and Math (STEM) related careers. Over the past year, SCNO has been tasked with helping the organization in strategy development, research, and marketing.";

                            $tephinet = new Project();
                            $tephinet->logo = "pics/tephinet.png";
                            $tephinet->name = "TEPHINET and GCN";
                            $tephinet->description = "Training Programs in Epidemiology and Public Health Interventions Network (TEPHINET) is a global nonprofit that falls under the jurisdiction of GCN. TEPHINET's main objective is to make healthcare more accessible globally, particularly in the field of epidemiology, through the training of specialists in over 90 countries. SCNO was able to help them make progress towards this goal by suggesting the use of a more easily accessible virtual platform as well as reforming their sources of funding.";

                            $gcn = new Project();
                            $gcn->logo = "pics/gcn.jpg";
                            $gcn->name = "Georgia Center for Nonprofits";
                            $gcn->description = "The Georgia Center for Nonprofits (GCN) provides professional consulting services geared towards Atlanta nonprofits. SCNO completed an internal project with GCN to assess the current nonprofit market and identify effective avenues for acquiring and engaging with clients.";

                            $litehouse = new Project();
                            $litehouse->logo = "pics/litehouse.jpg";
                            $litehouse->name = "Litehouse";
                            $litehouse->description = "Litehouse Partners is a non-profit founded in Atlanta that focuses on improving the lives of students in low-income localities by providing afterschool activities and educational programs. Litehouse Partners approached SCNO GT with a project involving creating a program proposal and budget for a CRCT Training Program to help first graders improve their reading abilities to at least grade reading level. Following our team's delivery of the project proposal and anticipated budget, Litehouse Partner's founder was able to secure United Way's interest and approval of the project and both organizations are currently in collaboration to find funding for the program.";

                            $iws = new Project();
                            $iws->logo = "pics/iws.jpg";
                            $iws->name = "I Will Survive";
                            $iws->description = "I Will Survive, Inc. is a domestic non-profit organization that promotes breast cancer awareness through education and financially assists those affected during and after treatment. We helped develop sustainability and broaden the outreach of the organization through a focused approach on improving their human resources, online presence and financial management. SCNO's efforts will potentially double I Will Survive's community outreach and funding in the next 2 years.";

                            $adc = new Project();
                            $adc->logo = "pics/adc.png";
                            $adc->name = "Atlanta Dream Center";
                            $adc->description = "Partnered with Atlanta Dream Center, H.O.P.E Central provides an educational alternative to the bottom-ranked schools in the Atlanta School District around the Old Gordon neighborhood. Georgia Tech’s chapter of SCNO spearheaded an engagement with the program to streamline the budget, mobilize volunteer resources, and acquire funding and supplies necessary for education. H.O.P.E Central is able to launch its initiative on schedule in August 2017 due to the recommendations and analyses the SCNO team provided.";
 
                            $cityof = new Project();
                            $cityof->logo = "pics/cityofrefuge.jpg";
                            $cityof->name = "City of Refuge";
                            $cityof->description = "City of Refuge is a faith-based organization that helps individuals and families transition out of crisis through five key impact areas: anti-trafficking, health and wellness, housing, vocational training, and youth development.  SCNO performed a comprehensive donation analysis of both corporate and individual donors to identify trends in donor behavior that could be used to increase donor retention and aid marketing initiatives. The team also evaluated the company website and advised the creation of a recurrent donation option button on the donor portal, which has since been implemented.";
                        
                            $projects = array($asf, $atlm, $cityof, $cp, $adc, $gcn, $tephinet, $iws, $c21, $litehouse, $tfa, $ccsi, $pcrf, $ghf);

                            foreach($projects as $project) {
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
