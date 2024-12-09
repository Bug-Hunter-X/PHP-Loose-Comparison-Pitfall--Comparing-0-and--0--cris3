function foo($a, $b) {
  if ($a === $b) {
    return true;
  } else {
    return false; 
  }
}

//This function will return false when comparing 0 and '0'.
$result = foo(0, '0'); //false

//This will return true when the values are not the same type
$result = foo(0, 0.0); //true