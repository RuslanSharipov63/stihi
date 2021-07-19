<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../template/css/style.css">
  <title>Рафика Шарипова. Стихи и проза на татарском языке.</title>
</head>
<body>
 
<p class="admin">Создать новое произведение</p>

<form action="form.php" method="POST" class="nameform">
<input type="text" name="title" placeholder="Введите заголовок">

<textarea name="article">Введите текст</textarea>

<p class="category">Выберите категорию</p>
<select name="select">
<option name="stihi">Стихи</option>
<option name="proza">Проза</option>
</select>

<input type="submit" value="Отправить">
</form>


</body>
</html>