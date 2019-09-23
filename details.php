<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//DB connection
require 'functions/connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Query Details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    </head>
    <body>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = mysqli_query($conn, "SELECT * FROM contact_q WHERE id=$id");
            while ($result = mysqli_fetch_array($sql)) {
                extract($result);
                ?>
                <div class="container">
                    <center>
                        <h1>Query Details</h1>
                        <a href="messages.php">
                            <button class="btn btn-primary btn-md" style="float:right;">Back to messages</button>
                        </a>
                    </center>
                    <h3>Full Name</h3>
                    <p class="qdetail"><?php echo $fname . ' ' . $lname; ?></p>
                    <h3>Affiliated Institute</h3>
                    <p class="qdetail"><?php echo $institue; ?></p>
                    <h3>Role</h3>
                    <p class="qdetail"><?php echo $role; ?></p>
                    <h3>Email</h3>
                    <p class="qdetail"><?php echo $email ?></p>
                    <h3>Phone</h3>
                    <p class="qdetail"><?php echo $phone; ?></p>
                    <h3>Message</h3>
                    <p><?php echo $message; ?></p>
                    <center><a href="mailto:<?php echo $email; ?>">
                            <button class="btn btn-success btn-lg">Reply</button>
                        </a>
                    </center>


                </div>
                <?php
            }
        }
        ?>
    </body>
</html>

