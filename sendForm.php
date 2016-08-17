<?php

    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'From:' . $email;
        $to = 'scnogt@gmail.com';
        $subject = 'Message from Contact Form';

        $body = "From: $name\n E-Mail: $email\n Message:\n $message";

        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }

        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }

        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }

// If there are no errors, send the email
if (!isset($errName) &&  !isset($errEmail) && !isset($errMessage) && !isset($errHuman)) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>

<!DOCTYPE html>
<html>

    <head>
        <title>SCNO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href = "css/bootstrap.min.css" rel = "stylesheet">
        <link href = "css/bootstrap.css" rel = "stylesheet">
        <link href = "Styles.css" rel = "stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <link href = "css/bootstrap.min.css" rel = "stylesheet">
        <link href = "css/Styles.css" rel = "stylesheet">

        <div class = "navbar navbar-default navbar-static-top">
            <div class = "navigation">
                <a href="index.html" class="logo"><img class="img-responsive" src="pics/navbarlogo3.png" width="250" height="70"></a>

                <button class = "navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>

                <div class = "collapse navbar-collapse navHeaderCollapse">
                    <ul class = "nav navbar-nav navbar-right">
                        <li><a href = "index.html">Home</a></li>
                        <li class = "dropdown">
                            <a href = "#" class = "dropdown-toggle" data-toggle="dropdown">About SCNO <b class = "caret"></b></a>
                            <ul class = "dropdown-menu">
                                <li><a href = "we.html">What We Do</a></li>
                                <li class="active"><a href = "members.html">Our Members</a></li>
                                <li><a href = "clients.html">Our Clients</a></li>
                            </ul>
                        </li>
                        <li><a href = "calendar.html">Calendar</a></li>
                        <li><a href = "apply.html">Apply</a></li>
                        <li><a href = "sendForm.php">Contact Us</a></li>
                        <li><a href = "https://www.facebook.com/GTSCNO/" target="_blank">
                            <img class="img-respnsive" src = "pics/fblogo.jpg" width="35" height="35">
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container" style="padding-top: 3rem;">
            <form class="form-horizontal" role="form" method="post" action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php if (isset($_POST['name'])) { echo htmlspecialchars($_POST['name']); } ?>">
                        <?php if (isset($errName)) { echo "<p class='text-danger'>$errName</p>"; } ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php if (isset($_POST['email'])) { echo htmlspecialchars($_POST['email']); } ?>">
                        <?php if (isset($errEmail)) { echo "<p class='text-danger'>$errEmail</p>"; } ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="message"><?php if (isset($_POST['message'])) { echo htmlspecialchars($_POST['message']); }?></textarea>
                        <?php if (isset($errMessage)) { echo "<p class='text-danger'>$errMessage</p>"; } ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                        <?php if (isset($errHuman)) { echo "<p class='text-danger'>$errHuman</p>" ; }?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <?php if (isset($result)) { echo $result; } ?>
                    </div>
                </div>
            </form>
        </div>


        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
        </script>
        <script src = "js/bootstrap.js">
        </script>
    </body>

</html>
