
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Multipage Blog Website</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
  

<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign UP</h2>
        <div class="alert__message error">
            <p>This is an error message</p>

        </div>

        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name ">
            <input type="text" placeholder="Username">
            <input type="email" placeholder="email">
            <input type="password" placeholder="Create Password">
            <input type="password" placeholder="Confirm Password">
            <div class="form__control">
                <label for="avatar">User Avatar</label>
                <input type="file"  id="avatar">
            </div>

            <button type="submit" class="btn">Sign Up</button>
            <small>Already have an account? <a href="signin.html">Sign In</a></small>
        </form>
    </div>
</section>


    <script src="./main.js"></script>
  </body>
</html>

