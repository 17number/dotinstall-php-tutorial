<?php
function hello($name) {
  echo "hello $name";
}
hello("kenji");

function bye($name) {
  return "bye $name";
}
$rtn = bye("kumi");
echo $rtn;
