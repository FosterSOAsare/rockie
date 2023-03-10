<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rockie - Register</title>
  <link rel="stylesheet" href="./css/includes.css">
  <link rel="stylesheet" href="./css/account.css">
  <script src="https://kit.fontawesome.com/f6e3b67683.js" crossorigin="anonymous"></script>
  <style>
    header .header__container .header__ctas .register {
      display: none;
    }

    #phone__menu .content .menu__ctas .register {
      display: none;
    }

    header .header__container .header__ctas a.header__cta {
      color: white;
      border: 2px solid white;
      background-color: transparent;
    }

    #phone__menu .content .menu__ctas a.menu__cta {
      color: white;
      border: 2px solid white;
      background-color: transparent;
    }
  </style>
</head>

<body>
  <?php require_once './includes/components/header.php' ?>
  <?php require_once './includes/components/menu.php' ?>
  <main>
    <h3>Create Account </h3>
    <p class="desc">Platform is designed to provide an online, on demand space for new techies and brands alike to connect , share and grow.</p>

    <section id="account">
      <div class="account__actions">
        <article id="email">
          <form action="">
            <input type="text" placeholder="Email Address" name='email' aria-label="Email Address">
            <input type="password" placeholder="Password" name="password">
            <button>Create Account</button>
          </form>
        </article>
        <p class="or">or</p>
        <article id="socials">
          <div class="google account__action">
            <div class="icon">
              <img src="./images/google.png" alt="Google">
            </div>
            <p>Sign up with Google</p>
          </div>
          <div class="apple account__action">
            <div class="icon">
              <img src="./images/apple.png" alt="Apple">
            </div>
            <p>Sign up with Apple</p>
          </div>
          <div class="facebook account__action">
            <div class="icon">
              <img src="./images/facebook.png" alt="facebook">
            </div>
            <p>Sign up with Facebook</p>
          </div>
        </article>
      </div>
      <p class="account__rectify">Already have an account? <a href="./login">Login</a></p>
    </section>
  </main>

  <script src="./js/login.js" type="module"></script>
</body>

</html>