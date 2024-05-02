<?php
require 'config/database.php';

if (isset($_POST['submit'])) {

    //get form data
    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$username_email) {
        $_SESSION['signin'] = 'Username or email Required';
    } elseif (!$password) {
        $_SESSION['signin'] = 'Password Required';
    } else {
        //fecth user from database

        $fetch_user_query = "SELECT * FROM users WHERE username ='$username_email' OR email ='$username_email'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);


        if (mysqli_num_rows($fetch_user_result) == 1) {
            //convert the record into assoc arrya
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];

            //compare password
            if (password_verify($password, $db_password)) {
                //set session for access login in
                $_SESSION['user-id'] = $user_record['id'];

                //check if user is admin
                if ($user_record['is_admin']) {
                    $_SESSION['user_is_admin'] = true;
                }

                //log user in
                header('location: ' . ROOT_URL . 'admin/');
            } else {
                $_SESSION['signin'] = "Please check your input";
            }
        } else {
            $_SESSION['signin'] = "User not found";
        }
    }


    //if any problem redirect back to page

    if(isset($_SESSION['signin'])){
        $_SESSION['signin-data'] = $_POST;
        header('location: ' . ROOT_URL . 'signin.php');
        die();
    }
} else {
    header('location: ' . ROOT_URL . 'signup.php');
    die();
}
