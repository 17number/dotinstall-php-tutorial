<?php
function div($a, $b) {
  try {
    if ($b === 0) {
      throw new Exception("Error: divide by 0");
    }
    echo $a / $b;
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}

div(7, 2);
div(7, 0);
