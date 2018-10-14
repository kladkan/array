<?php
  ini_set('display_errors', 1);
  ini_set('errors_reporting', E_ALL);
  $all_animals = [
    'Africa' => ['Mammuthus columbi', 'Ciconia', 'Panthera pardus', 'Crocodylus niloticus'],
    'Australia' => ['Macropus rufus', 'Phascolarctos cinereus', 'Struthionidae'],
    'Eurasia' => ['Vulpes lagopus', 'Canis lupus', 'Lynx', 'Odobenus rosmarus'],
    'Antarctica' => ['Mirounga', 'Lobodon carcinophagus', 'Aptenodytes forsteri']
  ];
  echo '<h1>Домашняя работа "Жестокое обращение с животными"</h1>';
  echo '<h2>1. Исходный массив</h2>';
  echo '<p>Количество всех животных = ' . (count($all_animals, COUNT_RECURSIVE) - count($all_animals)) . ':</p>'; //для себя - возможно пригодится
  foreach($all_animals as $continent => $animal) {
    foreach($animal  as  $key => $value) {

      //*для доп задания: $continent_animal[] = array("$continent" => $value);
      echo "<p>$continent: $value</p>";

      $space = strpos($value, ' ');
      if ($space !== false) {
        $animals_2_word[] = $value;
        $division = explode(' ', $value);
        $word_1_list[] = $division[0];
        $word_2_list[] = $division[1];
      }
    }
  }

  //*для доп задания: var_dump($continent_animal);

  echo '<br><h2>2. Названия, состоящие из двух слов:</h2>';
  foreach($animals_2_word as $value_2_word) {
    echo "<p>$value_2_word</p>";
  }

  echo '<br><h2>3. "Фантазийные" названия:</h2>';
  shuffle($word_2_list);

  foreach ($word_1_list as $i => $word) {
    echo '<p>'. $new_animals[] = $word . ' ' . $word_2_list[$i] .'</p>';

  }

?>
