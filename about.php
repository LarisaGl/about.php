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
    
    echo 'Имя: '.$userName.'<br>';
    echo 'Фамилия: '.$userSurname.'<br>';
    echo 'Возраст: '.$userAge.'<br>';
    echo 'Адрес электронной почты: '.$userMale.'<br>';
    echo 'Город: '.$userAddress.'<br>';
    echo 'О себе: '.$userAbout;
    ?>

  </body>
</html>