<?php

// Even Odd Number Checker Function

function checkEvenOdd($num) {
  if ($num % 2 == 0) {
      return "even";
  } else {
      return "odd";
  }
}

$num = 5;
echo checkEvenOdd($num);
