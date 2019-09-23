<!DOCTYPE html>
<!--
index page for contact us 
-->
<html>
    <head>
        <title>Contact form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <?php
                        if (isset($_GET['error'])) {
                            echo '<center><div class="alert alert-danger alert-dismissible" style="width:fit-content;">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						Invalid Username or password.</div></center>';
                        }
                        ?>
        <div class="contact-form">

            <form method="POST" action="functions/functions.php" id="contact">             
                <h1>Contact Form</h1><br>
                <input class="form-control"  type="text" name="fname" placeholder="Your first name here" required="required">
                <input class="form-control"  type="text" name="lname" placeholder="Your last name here" required="required">
                <input class="form-control"  type="email" name="email" placeholder="Your email address" required="required">
                <input class="form-control"  type="text" name="phone" placeholder="Your phone number" required="required">
                <input class="form-control"  type="text" name="institute" placeholder="Affiliated educational institute" required="required">
                <input class="form-control"  type="text" name="role" placeholder="Please enter your role" required="required">
                <textarea class="form-control" name="message" placeholder="Please type your message here" rows="4" cols="50" required></textarea><br>

                <button class="form-control btn btn-primary" name="submit"  type="submit" value="Submit">Submit</button>

            </form>

        </div>

        <!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script>
                $('.tog a').click(function(){
                    $('form').animate({height:"toggle",opacity:"toggle"},"slow");
                });
                
                $(function(){
            $("input[name=fname]")[0].oninvalid = function () {
                this.setCustomValidity("Please enter characters.");
            };
        });
                </script>-->
    </body>
</html>
