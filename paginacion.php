<div class="center">
  <ul class="pagination">
    <?php if ($num_page >= 1): ?>
      <li><a href="">&laquo;</a></li>
    <?php else: ?>
      <li><a href="?pagina=<?php echo $num_page - 1; ?>"></a></li>
    <?php endif; ?>

    <?php 
    for ($i=1; $i <= $quantData ; $i++) { 
      if ($num_page == $i) {
        echo "<li><a href='?pagina=$i'>$i</a></li>";
      } else {
        echo "<li><a href='?pagina=$i'>$i</a></li>";
      }
    }
    ?>

    <?php if ($num_page == $quantData): ?>
      <li><a href="">»</a></li>
    <?php else: ?>
      <li><a href="?pagina=<?php echo $num_page + 1; ?>">»</a></li>
    <?php endif; ?>

  </ul>
</div>
      