<?php
  // Simple array
  $colors = ["Red", "Green", "Blue"];
  var_dump($colors);
  echo "<br/>";

  // Access specific element
  echo "index 0 = $colors[0]";
  echo "<br/>";

  // Associative arrays allow us to use named keys to identify values.
  $colors = [
    1 => 'red',
    2 => 'green',
    3 => 'blue',
  ];
  echo $colors[1] . "<br/>";

  // Strings as keys
  $hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
  ];
  echo $hex['red'] . "<br/>";


  //  Multi-dimensional arrays are often used to store data in a table format.

  // Single person
  $person1 = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com',
  ];

  // Array of people
  $people = [
    $person1, //   [...$person1]
    [
      'first_name' => 'John',
      'last_name' => 'Doe',
      'email' => 'john@gmail.com',
    ],
    [
      'first_name' => 'Jane',
      'last_name' => 'Doe',
      'email' => 'jane@gmail.com',
    ],
  ];

  var_dump($people);
  echo "<br/>";

  // Accessing values in a multi-dimensional array
  echo $people[0]['first_name'] . "<br />";
  echo $people[2]['email'];

  // Encode to JSON
  var_dump(json_encode($people));

  // Decode from JSON
  $jsonobj = '{"first_name":"Brad","last_name": "Traversy","email":"brad@gmail.com"}';
  var_dump(json_decode($jsonobj));
?>