function foo($a, $b) {
  // Use a more robust type checking or casting to handle potential type mismatches.
  if(is_numeric($a) && is_numeric($b)){
    $a = floatval($a);
    $b = floatval($b);
  }
  if ($a === $b) {
    return true;
  } else {
    return false; 
  }
}

//This function will now return true when comparing 0 and '0' after type casting.
$result = foo(0, '0'); //true

//This will also return true since both values are numerically equivalent.
$result = foo(0, 0.0); //true