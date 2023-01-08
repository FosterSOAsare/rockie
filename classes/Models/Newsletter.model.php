<?php
class Newsletter extends Dbh {
  protected function getSubscriptionStatus($email) {
    $sql = 'SELECT * FROM newsletter WHERE email = ?';
    $stmt = $this->connectDB()->prepare($sql);
    $stmt->execute([$email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  protected function insertNewSubscription($email) {
    $sql = 'INSERT INTO  newsletter(email) VALUES (?)';
    $stmt = $this->connectDB()->prepare($sql);
    return $stmt->execute([$email]);
  }
}
