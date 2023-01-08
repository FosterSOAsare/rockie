<?php
class NewsletterController extends Newsletter {
  private $email;
  public function __construct($email) {
    $this->email = $email;
  }

  public function checkSubscription() {
    return $this->getSubscriptionStatus($this->email);
  }

  public function cancelSubscription() {
  }

  public function reSubscribe() {
  }

  public function storeNewSubscription() {
    return $this->insertNewSubscription($this->email);
  }
}
