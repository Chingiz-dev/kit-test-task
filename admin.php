<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Тестовое задание</title>
  <link rel="stylesheet" href="style.css">
  <?php 
      if(isset($_SESSION["userid"])) {
        echo '<script src="admin.js" defer></script>';
      } else {
        echo '<script src="main.js" defer></script>';
      } ?>
</head>
<body>
  <header>
    <h1>Тестовое задание</h1>
    <a href="index.php">На главную страницу</a>
    <?php 
      if(isset($_SESSION["userid"])) {
    ?>
    <h2>Привет - <?php echo $_SESSION["useruid"] ?> !</h2>
    <a href="inc/logout.inc.php">Кнопочка выхода</a>
    <div class="forms">
      <div>        
        <form action="inc/nestedit.inc.php" method="post">
          <fieldset>
            <legend>Редактирование</legend>
            <input type="number" name="nestId" placeholder="Номер" required> Номер<br>
            <input type="text" name="nestTitle" placeholder="Название" required> Название<br>
            <input type="text" name="nestDesc" placeholder="Описание" required> Описание <br>
            <input type="number" name="nestParent" placeholder="Номер родителя" required> Номер родителя <br>
            <input type=reset value="Очистить">
            <input type="submit" name="submit" value="редактировать">
          </fieldset>
        </form>
      </div>
      <div>        
        <form action="inc/nestdelete.inc.php" method="post">
          <fieldset>
            <legend>Удаление</legend>
            <input type="number" name="nestId" placeholder="Номер" required> Номер<br>
            <input type=reset value="Очистить">
            <input type="submit" name="submit" value="удалить">
          </fieldset>
        </form>
      </div>
      <div>
        <form action="inc/nestset.inc.php" method="post">
          <fieldset>
            <legend>Создать новый</legend>
            <input type="text" name="nestTitle" placeholder="Название" required> Название<br>
            <input type="text" name="nestDesc" placeholder="Описание" required> Описание <br>
            <input type="number" name="nestParent" placeholder="Номер родителя" value="0" > Номер родителя <br>  
            По умолчанию ставиться корневым <br>
            <input type=reset value="Очистить">
            <input type="submit" name="submit" value="создать">
          </fieldset>
        </form>
      </div>
    </div>
    <?php } ?>
  </header>
  <hr>
  <main>
    <h2>Дерево объектов</h2>
    <div class="tree" id="0"></div>
  </main>
  <footer>
    <h2>Копирайт 2022</h2>
  </footer>
</body>
</html>