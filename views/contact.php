
<?php require_once ROOT . '/views/layouts/header.php'; ?>



<div class="container-xl">
<a href="tel:+79277114181" class="link-success">тел.: +7 927 711 41 81</a>
</div>

<div class="container-xl">
<p class="text-start fs-5">Форма обратной связи</p>
</div>

<div class="container-xl mb-2">
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Введите вашу электронную почту</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="например name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Введите ваше сообщение</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="button" class="btn btn-outline-success">Отправить</button>
</div>



<?php require_once ROOT . '/views/layouts/footer.php'; ?>
