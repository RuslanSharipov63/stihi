<?php require_once ROOT . '/views/layouts/header.php'; ?>

<div class="containerItem justify-content-center align-items-center">
 <?php foreach($poems as $poemsItem): ?>
 <p class="title" style="font-weight: bold;"><?php echo $poemsItem['title']; ?></p>
 <p class="article" ><?php echo nl2br($poemsItem['article']); ?></p>
 <?php endforeach; ?>
 </div>  

<nav aria-label="Page navigation example">
<ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" style="pointer-events:<?php 
    if($pagecount == 0 || $pagecount == 1) 
    {
        echo 'none';
    }  
    ?>" 
    href="<?php 
       echo $pagecount = $pagecount - 1;
        ?>" aria-label="Previous">
        <span aria-hidden="true" style="color:darkgreen" >&laquo;</span>
      </a>
    </li>
    <?php for($i=1; $i<=$poemscount; $i++): ?>
    <li class="page-item"><a class="page-link" style="color:darkgreen;" href="<?php echo '/poems/'.$i; ?>"><?php echo $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item">
      <a class="page-link" style="pointer-events:
      
      <?php 
      
      
 if(intval(substr($_SERVER['REQUEST_URI'], -1))== $poemscount || intval(substr($_SERVER['REQUEST_URI'], -1)) == 0) {
      echo 'none'; 
    } 
     
    ?>" 
    
    
    
    
    
    href="<?php 

 $b = intval(substr($_SERVER['REQUEST_URI'], -1));

      
        echo $b + 1; 
     
        
        ?>
        " aria-label="Next">
        
        <span aria-hidden="true" style="color:darkgreen">&raquo;</span>
      </a>
    </li>
    
  </ul>

<?php

?>


<?php require_once ROOT . '/views/layouts/footer.php'; ?>