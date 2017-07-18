<li>
  <a href="<?php echo $article['article_id']?>" class="thumbnail">
    <div class="row">
      <div class="col-md-6">
          <img src="<?php echo $article['image']; ?>" alt="...">
      </div>
      <div class="col-md-6">
        <h4 class="media-heading"><?php echo $article['title']; ?></h4>
        <p><?php echo $article['content']; ?></p>
        <p class="date"><?php echo $article['date']; ?></p>
      </div>
    </div>
  </a>
</li>
