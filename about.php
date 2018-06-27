<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>about</title>
    <meta charset="UTF-8">
    <style>
   		table, tr, td { 
    	border: 1px solid black;
    	text-align: center;
   		}
 	</style>
  </head>
  
  <body>
    <?php
    $userName='Лариса';
    $userSurname='Головина';
    $userAge=26;
    $userMale='89888985265@mail.ru';
    $userAddress='Ростов-на-Дону';
    $userAbout='I am Groot';
    ?>

    <h1>Страница пользователя Лариса Головина</h1>
    <table>
    	<tr>
    		<td>Имя:</td>
    		<td><?= $userName ?></td>
    	</tr>
    	<tr>
    		<td>Фамилия:</td>
    		<td><?= $userSurname ?></td>
    	</tr>
    	<tr>
    		<td>Возраст:</td>
    		<td><?= $userAge ?></td>
    	</tr>
    	<tr>
    		<td>Адрес электронной почты:</td>
    		<td><?= $userMale ?></td>
    	</tr>
    	<tr>
    		<td>Город:</td>
    		<td><?= $userAddress ?></td>
    	</tr>
    	<tr>
    		<td>О себе:</td>
    		<td><?= $userAbout ?></td>
    	</tr>
    </table>    

  </body>
</html>