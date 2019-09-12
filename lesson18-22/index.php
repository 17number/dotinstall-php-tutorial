<?php
class User {
  public $name;
  public static $count = 0;

  public function __construct($name) {
    $this->name = $name;
    self::countUp();
  }

  public function hello() {
    echo "hello, i am $this->name";
  }

  public static function countUp() {
    self::$count++;
  }
}

$tom = new User("tom");
echo $tom->name;
$tom->hello();


class AdminUser extends User {
  public function bye() {
    echo "Bye, i am $this->name of admin";
  }

  // override
  public function hello() {
    echo "hello, i am $this->name of admin";
  }
}
$john = new AdminUser("john");
$john->hello();
$john->bye();


echo User::$count;
