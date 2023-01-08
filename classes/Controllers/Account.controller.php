<?php
class AccountController extends Account {
  private $email;
  private $password;
  private $cookie;
  public function __construct($email, $password) {
    $this->email = $email;
    $this->password = md5($password);
  }

  public function fetchUser() {
    return $this->selectUser($this->email, $this->password);
  }

  public function storeCookieValue() {
    $this->generateCookie();
    return $this->updateCookieValue($this->cookie, $this->email);
  }

  public function generateCookie() {
    $this->cookie =  md5(uniqid());
  }

  public function getCookieValue() {
    return $this->cookie;
  }
}
