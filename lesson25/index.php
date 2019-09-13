<?php
// require
require "User.class.php";

// autoload
spl_autoload_register(function($class) {
  require $class . ".class.php";
});

$user = new User("tom");
$user->sayHi();
