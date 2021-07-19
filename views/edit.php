<?php require_once ROOT . '/views/layouts/header.php'; ?>





<div class="container-xl">
<form action="/update/<?php echo $poems[0]['id']; ?>"   method="POST" >
<div><input type="text" name="title" value="<?php echo $poems[0]['title']?>"></div>
<div><textarea name="article" cols="200" rows="200"><?php echo $poems[0]['article']?></textarea></div>
<input type="submit" name="editsubmit" value="Редактировать">
<form>

</div>


<?php require_once ROOT . '/views/layouts/footer.php'; ?>