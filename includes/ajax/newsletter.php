<?php
require_once '../../classes/Dbh.class.php';
require_once '../../classes/Models/Newsletter.model.php';
require_once '../../classes/Controllers/Newsletter.controller.php';
if (isset($_POST['type']) && $_POST['type'] === 'subscribe') {
  $email = htmlspecialchars($_POST['email']);
  $newsletter = new NewsletterController($email);
  // Check if email exists
  if ($newsletter->checkSubscription()) {
    echo 'User has already susbcribed';
    return;
  };
  if (!$newsletter->storeNewSubscription()) {
    echo 'An error occurred';
    return;
  }
  echo 'success';
}
