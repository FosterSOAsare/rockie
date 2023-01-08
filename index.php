<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rockie - HomePage</title>
  <link rel="stylesheet" href="./css/includes.css">
  <link rel="stylesheet" href="./css/home.css">
  <script src="https://kit.fontawesome.com/f6e3b67683.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php require_once './includes/header.php' ?>
  <?php require_once './includes/menu.php' ?>
  <main>
    <section id="hero">
      <div class="hero__image">
        <img src="./images/hero__image.png" alt="Hero Image">
      </div>
      <div class="hero__text">
        <h3>The Platforms For Techies Creators</h3>
        <p>You deserve a space to share your work ,meet and connect. Rockites make your dream come true.</p>
        <button class="hero__cta">Join Us</button>
        <div class="details">
          <div class="detail">
            <h3>21.6k</h3>
            <p>Users</p>
          </div>
          <div class="detail">
            <h3>15.5k</h3>
            <p>Techies</p>
          </div>
        </div>
      </div>
    </section>

    <article id="powered">
      <div class="powered__container">
        <div class="powered__info">Powered By: </div>
        <nav class="powered__details">
          <a href="">AptLearn</a>
          <a href="">Hinge Academy</a>
          <a href="">Coursera</a>
          <a href="">Udemy</a>
        </nav>
      </div>
    </article>

    <section id="joinUs">
      <div class="joinUs__image">
        <img src="./images/joinUs.png" alt="">
      </div>
      <div class="joinUs__text">
        <h3>Why Joining Us?</h3>
        <p>You deserve a space to share your work ,meet and connect. Rockites make your dream come true.</p>
        <div class="reasons">
          <p class="reason">Developing your skills</p>
          <p class="reason">Networking with people</p>
          <p class="reason">Learning from others projects </p>
          <p class="reason">Available free courses</p>
        </div>
      </div>

    </section>

    <section id="trusted">
      <div class="trusted__image">
        <img src="./images/customers.png" alt="">
      </div>
      <div class="trusted__text">
        <h3>
          Trusted by <span>2.7k Techies</span> Creators
        </h3>
        <p>You deserve a space to share your work ,meet and connect. Rockites make your dream come true.</p>
        <button class="trusted__cta">Join Us</button>
      </div>
    </section>

    <?php require_once './includes/newsletter.php ' ?>

  </main>
  <?php require_once './includes/footer.php ' ?>
  <script src="./js/app.js" type="module"></script>
</body>

</html>