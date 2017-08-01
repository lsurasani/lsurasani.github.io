<!DOCTYPE html>
<html>

    <?php include "head.html"; ?>

    <body>
        <?php include "nav.html"; ?>

        <!-- Change the width and height values to suit you best -->
        <div class="container" style="padding-top: 3rem;">
            <div class="col-sm-10 col-centered">
                <p style="padding-bottom: 1.5rem; font-size: 1.1">You can contact us through <a href="mailto:scnogt@gmail.com">email</a>, our <a href = "https://www.facebook.com/SCNOGT/" target="_blank">Facebook</a> page, or the form below. </p>
            </div>
            <form action="https://formspree.io/scnogt@gmail.com" method="POST" class="form-horizontal" role="form">
                <div class="form-group row-centered">
                    <label for="name" class="col-sm-2 col-form-label control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" />
                    </div>
                </div>
                <div class="form-group row-centered">
                    <label for="_replyto" class="col-sm-2 col-form-label control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="_replyto" name="_replyto" placeholder="example@domain.com" />
                    </div>
                </div>
                <div class="form-group row-centered">
                    <label for="message" class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="message"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-centered">
                        <input id="submit" type="submit" value="Send" class="btn btn-primary submit-form-button">
                    </div>
                </div>
            </form>
        </div>
        <?php include "scripts.html"; ?>

    </body>

</html>
