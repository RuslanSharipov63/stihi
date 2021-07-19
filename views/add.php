

<?php require_once ROOT . '/views/layouts/header.php'; ?>

<div style="width: 50vw; margin: 0 auto; margin-top: 5vh;">
          <form action="newcomposition/" method="POST">
                <div style="width: 50vw; margin: 0 auto; margin-top: 5vh;">
                <input type="text" name="title" placeholder="Введите заголовок">
                </div>

          <div style="width: 50vw; margin: 0 auto; margin-top: 5vh;">
          <textarea name="article" cols="100" rows="50" placeholder="Введите текст"></textarea></div>

                <p>Выберите жанр </p>
                        <div><select name="genre">
                          <option value="2">Стихи</option>
                          <option value="3">Проза</option>
                        </select>
                        </div>

          <input class="btn btn-primary" type="submit" value="Отправить">
          </form>
</div>

<?php require_once ROOT . '/views/layouts/footer.php'; ?>