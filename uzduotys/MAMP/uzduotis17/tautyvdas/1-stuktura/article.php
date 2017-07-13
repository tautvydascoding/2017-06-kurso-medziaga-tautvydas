<article>

      <?php
          $straipsnis = getArticle(1);
       ?>


      <h3> <?php echo $straipsnis['title']; ?> </h3>
      <p>
          <?php echo $straipsnis['content']; ?>
      </p>
      <h6><?php echo $straipsnis['date']; ?></h6>

      <h6>autoriaus vardas</h6>  
</article>
