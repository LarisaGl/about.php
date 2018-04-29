<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>about</title>
    <meta charset="UTF-8">
  </head>
  
  <body>
    <h1>Страница пользователя Лариса Головина</h1>

      <?php
      $userName='Лариса';
      $userSurname='Головина';
      $userAge=26;
      $userMale='89888985265@mail.ru';
      $userAddress='Ростов-на-Дону';
      $userAbout='I am Groot';
      ?>
      
      <?php echo 'Имя:' . ' ' .  $userName;?>
      <br>
      <?php echo 'Фамилия:' . ' ' . $userSurname;?>
      <br>
      <?php echo 'Возраст:' . ' ' . $userAge;?>
      <br>
      <?php echo 'Адрес электронной почты:' . ' ' . $userMale;?>
      <br>
      <?php echo 'Город:' . ' ' . $userAddress;?>
      <br>
      <?php echo 'О себе:' . ' ' . $userAbout;?>

  </body>
</html>