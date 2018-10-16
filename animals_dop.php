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
      echo "<p>$continent: $value</p>";

      //для доп задания
      $continent_animal[] = array("$continent" => $value);
      //для доп задания

      $space = strpos($value, ' ');
      if ($space !== false) {
        $animals_2_word[] = array("$continent" => $value);
        $division = explode(' ', $value);
        $word_1_list[] = array("$continent" => $division[0]);
        $word_2_list[] = array("$continent" => $division[1]);

        //$word_1_list[] = $division[0];
        //$word_2_list[] = $division[1];
      }
    }
  }



  echo '<br><h2>2. Названия, состоящие из двух слов:</h2>';
  foreach($animals_2_word as $cont2 => $c2) {
    foreach ($c2 as $n => $value_2_word) {
      echo "<p>$n: $value_2_word</p>";
    }
  }

    // для отслеживания результата доп задания
    echo '<p>общий список</p>';
      var_dump($all_animals);
    echo '<br>';
      print_r($all_animals);
    echo '<br>';
    print_r($continent_animal);
    echo '<p>список первых слов</p>';
      var_dump($word_1_list);
    echo '<p>список вторых слов</p>';
      var_dump($word_2_list);
    echo '<p>список из двух слов</p>';
      var_dump($animals_2_word);
    // для отслеживания результата доп задания

  echo '<br><h2>3. "Фантазийные" названия:</h2>';
  shuffle($word_2_list);

  echo '<p>перемешанный список вторых слов</p>';
    var_dump($word_2_list);


  //цикл для соединения слов из двух массивов
  foreach ($word_1_list as $i => $word) {
    echo '<p>'. $new_animals[] = $word . ' ' . $word_2_list[$i] .'</p>';

  }

?>
