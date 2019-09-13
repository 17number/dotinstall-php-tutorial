<?php
class User {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }

  public function sayHi() {
    echo "Hi, I'm $this->name";
  }
}
