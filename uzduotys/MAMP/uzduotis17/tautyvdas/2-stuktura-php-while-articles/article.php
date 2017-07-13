<article>

      <h3> <?php echo $straipsnis['title']; ?> </h3>
      <p>
          <?php echo $straipsnis['content']; ?>
      </p>
      <h6><?php echo $straipsnis['date']; ?></h6>


      <!-- is kitos lenteles paimsime autoriu -->
      <?php
        $connection = connect_DB();
        $user_id = $straipsnis['user_ID'];
        // randame autoriu
        $user = getUser($connection, $user_id  );
      ?>
      <h6> <?php echo $user['username'] . " email: " .  $user['email'] ; ?></h6>
</article>
