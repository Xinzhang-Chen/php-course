<?php

  /* --------- PHP Data Types --------- */
  /*
  - String - A string is a series of characters surrounded by quotes
  - Integer - Whole numbers
  - Float - Decimal numbers
  - Boolean - true or false
  - Array - An array is a special variable, which can hold more than one value
  - Object - A class
  - NULL - Empty variable
  - Resource - A special variable that holds a resource
  */

  /* --------- Variable Rules --------- */
  /*
  - Variables must be prefixed with $
  - Variables must start with a letter or the underscore character
  - variables can't start with a number
  - Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
  - Variables are case-sensitive ($name and $NAME are two different variables)
  */

  $name = "Mike"; // String
  $age = 20; // Integer
  $height = 1.85; // Float
  $isMale = true; // Boolean -> true: 1, false: nothing

  echo $name . "<br/>";
  echo $age . "<br/>";
  echo $height . "<br/>";
  echo $isMale . "<br/>";

  // Output the string with the variable
  // Single quote:
  echo $name . ' is ' . $age . ' years old and is ' . $height . ' meters tall.<br/>';

  // Double quote:
  echo "$name is $age years old and is $height meters tall. <br/>";

  echo 5 + 5 , "<br/>";
  // This will become an int
  var_dump(5 * 5);
  echo "<br/>";

  // Constant
  define("HOST", "localhost");
  echo HOST;
?>