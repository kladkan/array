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

      $space = strpos($value, ' ');
      if ($space !== false) {
        //здесь надо записать значение $value в новый массив
        $animals_2_word = array_fill(0,  $value);
      }
    }
  }

  echo '<p>2. Названия, состоящие из двух слов:</p>';
  var_dump($animals_2_word);



  echo "<p>==============черновик с разбором примеров===============================</p>";
  $mystring = 'ab c';
  $findme   = ' ';
  $pos = strpos($mystring, $findme);

  // Оператор !== также можно использовать.  Использование != не даст верного
  // результата, так как 'a' находится в нулевой позиции. Выражение (0 != false) приводится
  // к false.
  if ($pos !== false) {
       echo "Строка '$findme' найдена в строке '$mystring'";
           echo " в позиции $pos";
  } else {
       echo "Строка '$findme' не найдена в строке '$mystring'";
  }
  echo "<p>==============черновик с разбором примеров=================================</p>";


?>
