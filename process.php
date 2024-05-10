<?php

function discriminate($a, $b, $c) {
  // Calculate the discriminant
  $discriminant = pow($b, 2) - 4 * $a * $c;

  // Analyze the discriminant to determine the nature of the roots
  if ($discriminant > 0) {
    echo "The discriminant is positive (" . $discriminant . "). There are two distinct real roots.";
  } elseif ($discriminant == 0) {
    echo "The discriminant is zero (" . $discriminant . "). There is a repeated real root.";
  } else {
    echo "The discriminant is negative (" . $discriminant . "). There are two complex roots.";
  }
}

// Get coefficients from the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $a = $_POST["a"];
  $b = $_POST["b"];
  $c = $_POST["c"];

  // Call the discriminate function
  discriminate($a, $b, $c);
}

?>