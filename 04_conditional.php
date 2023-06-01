<?php
  /* ------------ Operators ----------- */
  /*
    < Less than
    > Greater than
    <= Less than or equal to
    >= Greater than or equal to
    == Equal to
    === Identical to (not only the same value, but also the same data type)
    != Not equal to
    !== Not identical to
  */

  /* ---------- If Statements --------- */
  /*
  ** If Statement Syntax
  if (condition) {
    // code to be executed if condition is true
  }
  */

  $age = 20;
  if ($age >= 18) {
    echo 'You are old enough to vote!';
  } else {
    echo 'Sorry, you are too young to vote.';
  }
  echo "<br/>";

  $students = "Peter";
  switch($students){
    case "Mike":
      echo "You are Mike";
      break;
    case "John":
      echo "You are John";
      break;
    default:
      echo "You are not Mike or John";
  }

?>