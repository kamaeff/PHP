<?php 
  require_once __DIR__ .'/inc/vars.php';
  require_once __DIR__ .'/inc/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <title>Php Lessons</title>
</head>
<body>
<h1 style="text-align: center">Уроки Php</h1>
  <main class="main">

    <div class="main_math">
      <h2>Математические действия</h2>
      <form method="post" class="main_math-form">
        <input type="number" placeholder="Введите число a" name="number_a">
        <input type="number" placeholder="Введите число b" name="number_b">
        <input type="submit">
      </form>
      <div class="main_math-res">
        <?php 
          if($status == false){
            echo '<br>Error: Данные должны быть заполнены!!!';
          }else{
            echo '<div>Ты ввел: a = '. $object->a. ', b = '. $object->b. '</div>';
            echo '';
            echo '<div>Сумма = '. $object->sum(). '</div>';
            echo '<div>Вычитание = '. $object->sub(). '</div>';
            echo '<div>Умножение = '. $object->mult(). '</div>';
            echo '<div>Деление = '. $object->div(). '</div>';
            echo '<div>Остаток от деления = '. $object->mod(). '</div>';
          }
        ?>
      </div>
    </div>
  </main>
</body>
</html>