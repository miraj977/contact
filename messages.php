<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'functions/connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Customer Queries</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    </head>
    <body>

        <br><br>
        <?php $i = 1; ?>

        <table id="myTable" class="display">
            <thead>
                <tr style="background-color: black;color: white;">
                    <th class="hidden-xs">S.N</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th class="hidden-xs ps">Phone</th>
                    <th>Affiliated Institute</th>
                    <th class="ph hidden-xs">Role</th>                     
                    <th class="ph">Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM contact_q");
                while ($result = mysqli_fetch_array($sql)) {
                    extract($result);
                    ?>
                    <tr>

                        <td class="hidden-xs"><?php echo $i; ?></td>
                        <td><?php echo $fname . ' ' . $lname; ?></td>
                        <td><?php echo $email; ?></td>
                        <td class="hidden-xs"><?php echo $phone; ?></td>
                        <td><?php echo $institute; ?></td>
                        <td class="ph hidden-xs"><?php echo $role; ?></td>
                        <td><?php echo substr($message, 0, 25) . ' <a  class="detailsanchor" href="details.php?&id=' . $id . '"> ....Readmore</a>'; ?></td>
                    </tr>
                    <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
        <br />
    <center>
        <a href="index.php">
            <button class="btn btn-primary btn-md">Back to contact form</button>
        </a>
    </center>



    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(function () {
            $("#myTable").DataTable();
        });


    </script>