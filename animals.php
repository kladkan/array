<?php
  ini_set('display_errors', 1);
  ini_set('errors_reporting', E_ALL);
  $all_animals = [
    'Africa' => ['Mammuthus columbi', 'Ciconia', 'Panthera pardus', 'Crocodylus niloticus'],
    'Australia' => ['Macropus rufus', 'Phascolarctos cinereus', 'Struthionidae'],
    'Eurasia' => ['Vulpes lagopus', 'Canis lupus', 'Lynx', 'Odobenus rosmarus'],
    'Antarctica' => ['Mirounga', 'Lobodon carcinophagus', 'Aptenodytes forsteri']
  ];

  echo '<p>1. Исходный массив</p>';
  var_dump($all_animals);

  echo '<p>Количество всех животных = ' . (count($all_animals, COUNT_RECURSIVE) - count($all_animals)) . ':</p>'; //для себя - возможно пригодится

  foreach($all_animals as $continent => $animal) {
    foreach($animal  as  $key => $value) {
      echo "<p>$continent: $value</p>";
    }
  }




  echo "<p>==========================================================================</p>";

  echo "<p>============================================================================</p>";


  echo '<p>2. Названия, состоящие из двух слов:</p>';


  $animals_2_word = [];

?>
