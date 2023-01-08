<?php
class Account extends Dbh {
  protected function selectUser($email, $password) {
    $sql = 'SELECT * FROM users WHERE email = ? && password = ?';
    $stmt = $this->connectDB()->prepare($sql);
    $stmt->execute([$email, $password]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  protected function updateCookieValue($cookie, $email) {
    $sql = 'UPDATE users SET cookie = ? WHERE email = ? ';
    $stmt = $this->connectDB()->prepare($sql);
    return $stmt->execute([$cookie, $email]);
  }
}
