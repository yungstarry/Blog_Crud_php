<?php

require 'config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

//delete the sesstion
unset($_SESSION['signin-data'])
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
      <h2>Sign In</h2>
      <?php
      if (isset($_SESSION['signup-success'])) : ?>

        <div class="alert__message success">
          <?= $_SESSION['signup-success'];
          unset($_SESSION['signup-success'])
          ?>
        </div>
      <?php
      elseif (isset($_SESSION['signin'])) : ?>

        <div class="alert__message error">
          <?= $_SESSION['signin'];
          unset($_SESSION['signin'])
          ?>
        </div>

      <?php endif ?>

      <form action="<?= ROOT_URL ?>signin-logic.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="username_email" placeholder="Username" value="<?= $username_email ?>" />
        <input type="password" name="password" placeholder=" Password"  />


        <button type=" submit" name="submit" class="btn">Sign In</button>
        <small>Don't have an account? <a href="signup.php">Sign Up</a></small>
      </form>
    </div>
  </section>



  <script src="./main.js"></script>
</body>

</html>