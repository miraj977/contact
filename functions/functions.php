<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//DB connection here
require('connect.php');

//submit check here
if (isset($_POST["submit"])) {
    $fname = mysqli_real_escape_string($conn, ucfirst($_POST['fname']));
    $lname = mysqli_real_escape_string($conn, ucfirst($_POST['lname']));
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $institute = mysqli_real_escape_string($conn, ucfirst($_POST['institute']));
    $role = mysqli_real_escape_string($conn, ucfirst($_POST['role']));
    $message = mysqli_real_escape_string($conn, ucfirst($_POST['message']));
    $active = 1;

    $sql = "INSERT INTO `contact_q` (`fname`, `lname`,`email`,`phone`,`institute`,`role`,`message`,`active`) VALUES 
		('" . $fname . "','" . $lname . "', '" . $email . "', '" . $phone . "', '" . $institute . "','" . $role . "', '" . $message . "','" . $active . "');";
//echo $sql; exit;
    $query = mysqli_query($conn, $sql);
    if ($query > 0) {
        header("location:../index.php?success");
    } else {
        header("location:../index.php?error");
    }
}

//Note: Very basic form of login method used here

if (isset($_POST["login"])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM `login` WHERE username='$username' and password='$password'";
    //echo $sql;exit;
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    if ($username==$result['username']) {
        header("location:../messages.php");
    } else {
        header("location:../index.php?crederror");
    }
}