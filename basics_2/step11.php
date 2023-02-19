<?php
function isPrime($number) {
    // If the number is less than or equal to 1, it is not prime
    if ($number <= 1) {
      return false;
    }
  
    // Check if the number is divisible by any number other than 1 and itself
    for ($i = 2; $i <= sqrt($number); $i++) {
      if ($number % $i == 0) {
        return false;
      }
    }
  
    // If the number is not divisible by any number other than 1 and itself, it is prime
    return true;
  }
//   if (isPrime(11)) {
//     echo "11 is a prime number". PHP_EOL;
//   } else {
//     echo "11 is not a prime number" . PHP_EOL;
//   }
  if (isPrime(18)) {
    echo "18 is a prime number". PHP_EOL;
  } else {
    echo "18 is not a prime number" . PHP_EOL;
  }
?>