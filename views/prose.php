<?php require_once ROOT . '/views/layouts/header.php'; ?>

 <div class="containerItem justify-content-center align-items-center">
 <?php foreach($prose as $proseItem): ?>
 <p class="title" style="font-weight: bold;"><?php echo $proseItem['title']; ?></p>
 <p class="article"><?php echo nl2br($proseItem['article']); ?></p>
 <?php endforeach; ?>
 </div>

 <nav aria-label="Page navigation example">
<ul class="pagination justify-content-center">
    <li class="page-item">
    
    <a class="page-link" style="pointer-events:<?php if(intval(substr($_SERVER['REQUEST_URI'], -1)  ) == 1 || intval(substr($_SERVER['REQUEST_URI'], -1)) == 0) {
      echo 'none'; 
    } ?>" href="<?php 
      
      $a = substr($_SERVER['REQUEST_URI'], -1);

       echo $a = $a -1;
       
        ?>
      " aria-label="Previous">
        <span aria-hidden="true" style="color:darkgreen">&laquo;</span>
      </a>
    </li>
    <?php for($i=1; $i<=$prosecount; $i++): ?>
    <li class="page-item"><a class="page-link" style="color:darkgreen" style="pointer-events:<?php if(intval(substr($_SERVER['REQUEST_URI'], -1))== $poemscount) {
      echo 'none'; 
    } ?>" href="<?php echo '/prose/'.$i; ?>"><?php echo $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item">
      <a class="page-link"  style="pointer-events:<?php if(intval(substr($_SERVER['REQUEST_URI'], -1))== $prosecount || intval(substr($_SERVER['REQUEST_URI'], -1)) == 0) {
      echo 'none'; 
    } ?>"  href="<?php 

$b = intval(substr($_SERVER['REQUEST_URI'], -1));

      
        echo $b + 1; 
      
        
        ?>
        " aria-label="Next">
        
        <span aria-hidden="true" style="color:darkgreen">&raquo;</span>
      </a>
    </li>
    
  </ul>
  
<?php require_once ROOT . '/views/layouts/footer.php';?>
