<?php

require 'config/constants.php';

//get back form data if there was a registration error

$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;

//delete the sesstion
unset($_SESSION['signup-data'])
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Multipage Blog Website</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet" />
</head>

<body>


  <section class="form__section">
    <div class="container form__section-container">
      <h2>Sign UP</h2>
      <?php if (isset($_SESSION['signup'])) : ?>
        <div class="alert__message error">

          <p><?= $_SESSION['signup'];
              unset($_SESSION['signup']);
              ?></p>

        </div>
      <?php endif ?>

      <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
        <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First Name">
        <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Last Name ">
        <input type="text" name="username" value="<?= $username ?>" placeholder="Username">
        <input type="email" name="email" value="<?= $email ?>" placeholder="email">
        <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="Create Password">
        <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Confirm Password">
        <div class="form__control">
          <label for="avatar">User Avatar</label>
          <input type="file" id="avatar" name="avatar">
        </div>

        <button type="submit" name="submit" class="btn">Sign Up</button>
        <small>Already have an account? <a href="signin.php">Sign In</a></small>
      </form>
    </div>
  </section>


  <script src="./main.js"></script>
</body>

</html>