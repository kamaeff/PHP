<?php
require_once __DIR__ . '/inc/vars.php';
require_once __DIR__ . '/inc/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Php Lessons</title>
</head>

<body class="text-white bg-black">
  <header class="text-center">
    <h1>Уроки Php</h1>
  </header>

  <main class="main">
    <div class="main_math">
      <h2>Математические действия</h2>
      <form method="post" target="_self" class="main_math-form" name="math">
        <label>Число A</label>
        <input type="number" placeholder="Введите число a" name="number_a">
        <label>Число B</label>
        <input type="number" placeholder="Введите число b" name="number_b">
        <input type="submit" style="margin-top: 20px;">
      </form>
      <div class="main_math-res">
        <?php
        if ($status == false) {
          echo '<div style="margin-top: 20px;">Error: Данные должны быть заполнены!!!</div>';
        } else {
          echo '
              <div>Ты ввел: a = ' . $object->a . ', b = ' . $object->b . '</div>
              <div>Сумма = ' . $object->sum() . '</div>
              <div>Вычитание = ' . $object->sub() . '</div>
              <div>Умножение = ' . $object->mult() . '</div>
              <div>Деление = ' . $object->div() . '</div>
              <div>Остаток от деления = ' . $object->getmod() . '</div>
            ';
        }
        ?>
      </div>
    </div>

    <!-- todo: Решить проблему с submit в формах -->
    <div class="main_arrays">
      <h2>Массивы</h2>
      <form method="post" target="_self" class="main_arrays-form" id="arrays">
        <input type="number" placeholder="Введите массив" name="arr_a">
        <input type="submit" style="margin-top: 20px;">
      </form>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>