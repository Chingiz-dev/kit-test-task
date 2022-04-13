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
  <script src="main.js" defer></script>
</head>
<body>
  <header>
    <h1>Тестовое задание</h1>
    <div class="forms">
      <div>        
        <form action="inc/signup.inc.php" method="post">
          <fieldset>
            <legend>Регистрация</legend>
            <input type="text" name="uid" placeholder="Логин" required><br>
            <input type="password" name="pwd" placeholder="Пароль" required><br>
            <input type="submit" name="submit" value="Зарегаться">
          </fieldset>
        </form>
      </div>
      <div>
        <form action="inc/login.inc.php" method="post">
          <fieldset>
            <legend>Вход</legend>
            <input type="text" name="uid" placeholder="Логин" required><br>
            <input type="password" name="pwd" placeholder="Пароль" required><br>
            <input type="submit" name="submit" value="Войти">
          </fieldset>
        </form>
      </div>
    </div>
  </header>
  <hr>
  <main>
    <h2>Дерево объектов</h2>
    <div class="tree" id="0">
    </div>
  </main>
  <footer>
    <h2>Копирайт 2022</h2>
  </footer>
</body>
</html>