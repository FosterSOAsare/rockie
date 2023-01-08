<?php
require_once '../../classes/Dbh.class.php';
require_once '../../classes/Models/Account.model.php';
require_once '../../classes/Controllers/Account.controller.php';
if (isset($_POST['type']) && $_POST['type'] === 'login') {
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);

  $account = new AccountController($email, $password);
  $user = $account->fetchUser();
  if (!$user) {
    echo "Invalid login credentials";
    return;
  }

  // Either use the same cookie value on each login
  $cookie = $user['cookie'];
  setcookie('loggedUser', $cookie, time() + 3600 * 24 * 30, "/");


  // Set new cookie value on each login . This removed sesssion from other devices on each login 
  // if ($account->storeCookieValue()) {
  //   $cookie = $account->getCookieValue();
  //   setcookie('loggedUser', $cookie, time() + 3600 * 24 * 30, "/");
  // }

  echo 'success';
}
