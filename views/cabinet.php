
 
<?php require_once ROOT . '/views/layouts/header.php'; ?>


  

<h5 class="row justify-content-center">Панель администратора</h5>

<div class="container" style="width: 20vw;">
<div class="col align-self-center">
<div class="row">
<a class="btn btn-primary" href="add" role="button">Добавить новую запись</a>
</div>
</div>
</div>


<div class="container px-4">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3 border bg-light text-center">Стихи</div>
     

 
  <?php foreach($outPoems as $k): ?>  
  <div class="col">
    <p style="font-weight: bold; margin-top: 4vh;"><?php echo $k['title']; ?></p>
    <p><?php echo nl2br(mb_substr($k['article'], 0, 300)) . '...'; ?></p>

    <button type="button" class="btn btn-danger"><a style="text-decoration: none;" href="delete/<?php echo $k['id']; ?>">Удалить</a></button>
    <button type="button" class="btn btn-info"><a style="text-decoration: none;" href="edit/<?php echo $k['id'] ?>">Редактировать</a></button>


    </div>
    <?php endforeach; ?>





    </div>
    <div class="col">
      <div class="p-3 border bg-light text-center">Проза</div>

      <?php foreach($outProse as $k): ?>  
  <div class="col">
    <p style="font-weight: bold; margin-top: 4vh;"><?php echo $k['title']; ?></p>
    <p><?php echo nl2br(mb_substr($k['article'], 0, 150)) . '...'; ?></p>
    <button type="button" class="btn btn-danger"><a style="text-decoration: none;" href="deleteprose/<?php echo $k['id']; ?>">Удалить</a></button>
    <button type="button" class="btn btn-info"><a style="text-decoration: none;" href="editing/<?php echo $k['id'] ?>">Редактировать</a></button>

    </div>
    <?php endforeach; ?>




    </div>
  </div>
</div>

<?php require_once ROOT . '/views/layouts/footer.php'; ?>

