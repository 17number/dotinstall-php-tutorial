<?php
// require
require "User.class.php";
use Foo\Bar as Bar;

// autoload
spl_autoload_register(function($class) {
  require $class . ".class.php";
});

$user = new Bar\User("tom");
$user->sayHi();
