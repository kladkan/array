<?php
  //1-й вариант вывода результатов
  ini_set('display_errors', 1);
  ini_set('errors_reporting', E_ALL);
  $all_animals = [
    'Africa' => ['Giraffa camelopardalis rothschildi', 'Mammuthus columbi', 'Ciconia', 'Panthera pardus', 'Crocodylus niloticus'],
    'Australia' => ['Macropus rufus', 'Phascolarctos cinereus', 'Struthionidae'],
    'Eurasia' => ['Vulpes lagopus', 'Canis lupus', 'Lynx', 'Odobenus rosmarus'],
    'Antarctica' => ['Mirounga', 'Lobodon carcinophagus', 'Aptenodytes forsteri']
  ];
  
  echo '1. Исходный массив<br>';
  echo "<pre>";
  var_dump($all_animals);
  echo "</pre>";

  foreach($all_animals as $continent => $animal) {
    foreach($animal as $value) {
      if (count(explode(' ', $value)) == 2) {
        $array2word[] = $value; // палучаем массив животных с двумя словами
        $division = explode(' ', $value);
        $word_1_list[] = array($continent => $division[0]); //массив первых слов с континентами
        $word_2_list[] = $division[1]; // массив вторых слов без континентов
      }
    }
  }

  echo '<br>2. Названия, состоящие из двух слов:<br><br>';
  echo implode(', ', $array2word);

  echo '<br><br>3. "Фантазийные" названия:<br><br>';
  shuffle($word_2_list);
  //цикл для соединения слов из двух массивов
  foreach ($word_1_list as $i => $val) {
    foreach ($val as $key => $value) {
      $new_animals[$key][] = $value . ' ' . $word_2_list[$i]; //массив фантазийных животных
    }
  }

//фантазийные животные общим списком
foreach ($new_animals as $value) {
  foreach ($value as $val) {
    echo $val.'<br>';
  }
}

//фантазийные животные по континентам
echo '<br>Дополнительное задание:<br>';
foreach ($new_animals as $i => $value) {
  echo '<h2>'.$i.'</h2>'; echo implode(', ', $value);
}
?>


<!--2-й вариант вывода результатов работы-->
<html>
<head>
  <title>Задача про животных</title>
</head>
<body>
  <h1>Домашняя работа "Жестокое обращение с животными" <small>(2-й вариант вывода результатов работы)</small></h1>
  <h2><i>1. Исходный массив:</i></h2>
    <pre><?php var_dump($all_animals) ?></pre>
  
  <h2><i>2. Названия, состоящие из двух слов:</i></h2>
    <?php echo implode(', ', $array2word) ?>

  <h2><i>3. "Фантазийные" названия:</i></h2>
    <?php foreach ($new_animals as $value) : ?>
        <?php foreach ($value as $val) : ?>
          <p><?php echo $val ?></p>
        <?php endforeach ?>
    <?php endforeach ?>
  <h2><i>Дополнительное задание:</i></h2>
    <?php foreach ($new_animals as $i => $value) : ?>
      <h2><?php echo $i ?></h2>
      <p><?php echo implode(', ', $value) ?></p>
    <?php endforeach ?>

</body>
</html>
