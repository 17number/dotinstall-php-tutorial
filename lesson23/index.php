<?php
abstract class BaseUser {
  public $name;
  abstract public function sayHi();  // 実装が必須
}

class User extends BaseUser {
  public function __construct($name) {
    $this->name = $name;
  }
  public function sayHi() {
    echo "hi, this is $this->name";
  }
}
$john = new User("john");
$john->sayHi();
