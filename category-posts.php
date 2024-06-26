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
    <nav>
      <div class="container nav__container">
        <a href="index.php" class="nav__logo">Adordev</a>
        <ul class="nav__items">
          <li><a href="blog.php">Blog</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="contact.php">Contact</a></li>
          <!-- <li><a href="signin.php">Sign-In</a></li> -->
          <li class="nav__profile">
            <div class="avatar">
              <img src="./images/avatar1.jpg" alt="" />
            </div>
            <ul>
              <li><a href="dashboard.php">Dashboard</a></li>
              <li><a href="logout.php"> Log Out</a></li>
            </ul>
          </li>
        </ul>

        <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
        <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
      </div>
    </nav>

    <!-- end of nav -->

    
<header class="category__title">
    <h2>Category Title</h2>
</header>



<!-- ====end of category title -->


    <section class="posts">
      <div class="container posts__container">
        <article class="post">
          <div class="post__thumbnail">
            <img src="./images/blog2.jpg" alt="" />
          </div>
          <div class="post__info">
            <a href="category-posts.html" class="category__button">Wild Life</a>
            <h3 class="post__title">
              <a href="post.html"
                >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est,
                expedita.</a
              >
            </h3>
            <p class="post__body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias
              explicabo asperiores possimus sunt ipsam, dolores, placeat quia
              exercitationem laborum?
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="./images/avatar3.jpg" alt="" />
              </div>
                <div class="post__author-info">
                  <h5>By: John Mills</h5>
                  <small>June 13, 2022 -10:34</small>
                </div>
            </div>
          </div>
        </article>
        <article class="post">
          <div class="post__thumbnail">
            <img src="./images/blog2.jpg" alt="" />
          </div>
          <div class="post__info">
            <a href="category-posts.html" class="category__button">Wild Life</a>
            <h3 class="post__title">
              <a href="post.html"
                >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est,
                expedita.</a
              >
            </h3>
            <p class="post__body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias
              explicabo asperiores possimus sunt ipsam, dolores, placeat quia
              exercitationem laborum?
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="./images/avatar3.jpg" alt="" />
              </div>
                <div class="post__author-info">
                  <h5>By: John Mills</h5>
                  <small>June 13, 2022 -10:34</small>
                </div>
            </div>
          </div>
        </article>
        <article class="post">
          <div class="post__thumbnail">
            <img src="./images/blog2.jpg" alt="" />
          </div>
          <div class="post__info">
            <a href="category-posts.html" class="category__button">Wild Life</a>
            <h3 class="post__title">
              <a href="post.html"
                >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est,
                expedita.</a
              >
            </h3>
            <p class="post__body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias
              explicabo asperiores possimus sunt ipsam, dolores, placeat quia
              exercitationem laborum?
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="./images/avatar3.jpg" alt="" />
              </div>
                <div class="post__author-info">
                  <h5>By: John Mills</h5>
                  <small>June 13, 2022 -10:34</small>
                </div>
            </div>
          </div>
        </article>
        <article class="post">
          <div class="post__thumbnail">
            <img src="./images/blog2.jpg" alt="" />
          </div>
          <div class="post__info">
            <a href="category-posts.html" class="category__button">Wild Life</a>
            <h3 class="post__title">
              <a href="post.html"
                >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est,
                expedita.</a
              >
            </h3>
            <p class="post__body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias
              explicabo asperiores possimus sunt ipsam, dolores, placeat quia
              exercitationem laborum?
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="./images/avatar3.jpg" alt="" />
              </div>
                <div class="post__author-info">
                  <h5>By: John Mills</h5>
                  <small>June 13, 2022 -10:34</small>
                </div>
            </div>
          </div>
        </article>
      </div>
    </section>

    <!-- ======end of posts -->

    <section class="category__buttons">
      <div class="container category__buttons-container">
        <a href="" class="category__button"> Art </a>
        <a href="" class="category__button">Wild Life</a>
        <a href="" class="category__button">Travel</a>
        <a href="" class="category__button">Science & Technology</a>
        <a href="" class="category__button">Food</a>
        <a href="" class="category__button">Music</a>
      </div>
    </section>

    <!-- end of catefory buttons -->

    <footer>
      <div class="footer__socials">
        <a href="#" target="_blank" rel="noopener noreferrer"
          ><i class="uil uil-youtube"></i
        ></a>
        <a href="#" target="_blank" rel="noopener noreferrer"
          ><i class="uil uil-facebook-f"></i
        ></a>
        <a href="#" target="_blank" rel="noopener noreferrer"
          ><i class="uil uil-linkedin"></i
        ></a>
        <a href="#" target="_blank" rel="noopener noreferrer"
          ><i class="uil uil-twitter"></i
        ></a>
        <a href="#" target="_blank" rel="noopener noreferrer"
          ><i class="uil uil-instagram-alt"></i
        ></a>
      </div>


      <div class="container footer__container">
        <article>
          <h4>categories</h4>
          <ul><li><a href="">Art</a></li></ul>
          <ul><li><a href="">Wild Life</a></li></ul>
          <ul><li><a href="">Travel</a></li></ul>
          <ul><li><a href="">Music</a></li></ul>
          <ul><li><a href="">S & T</a></li></ul>
          <ul><li><a href="">Food</a></li></ul>
        </article>
        <article>
          <h4>Support</h4>
          <ul><li><a href="">Online support</a></li></ul>
          <ul><li><a href="">Call Number</a></li></ul>
          <ul><li><a href="">Emails</a></li></ul>
          <ul><li><a href="">Social support</a></li></ul>
          <ul><li><a href="">Location</a></li></ul>
        </article>
        <article>
          <h4>Blog</h4>
          <ul><li><a href="">Safety</a></li></ul>
          <ul><li><a href="">Repair</a></li></ul>
          <ul><li><a href="">Recent</a></li></ul>
          <ul><li><a href="">Popular</a></li></ul>
          <ul><li><a href="">Category</a></li></ul>
        </article>
        <article>
          <h4>Permalinks</h4>
          <ul><li><a href="">Home</a></li></ul>
          <ul><li><a href="">Blog</a></li></ul>
          <ul><li><a href="">About</a></li></ul>
          <ul><li><a href="">Services</a></li></ul>
          <ul><li><a href="">Contact</a></li></ul>
        </article>
      </div>

      <div class="footer__copyright">
        <small>Copy &copy; 2024 Adordev</small>
      </div>
    </footer>

    <script src="./main.js"></script>
  </body>
</html>
