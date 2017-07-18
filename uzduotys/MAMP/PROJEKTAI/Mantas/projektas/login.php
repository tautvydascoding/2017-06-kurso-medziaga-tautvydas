<?php if (isset($_SESSION['u_id'])) {
      echo '<form action="includes/logout.inc.php" method="POST">
             <button type="submit" name="submit" class="log-out">Log out</button>
             </form>';
} else {
  echo '<label class="modal-btn" for="modal-toggle">Log in</label>
    <input id="modal-toggle" type="checkbox">';
}
  ?>
  <label class="modal-backdrop" for="modal-toggle"></label>
  <div class="modal-content">
      <label class="modal-close-btn" for="modal-toggle">
        <svg width="50" height="50">
          <line x1="10" y1="10" x2="40" y2="40"/>
          <line x1="40" y1="10" x2="10" y2="40"/>
        </svg>
      </label>
      <div class="tabs">
<!--  LOG IN  -->
          <input class="radio" id="tab-1" name="tabs-name" type="radio" checked>
          <label for="tab-1" class="table"><span>Log in</span></label>
          <div class="tabs-content">
             <form action="includes/login.inc.php" method="POST">
                 <input type="text" name="uid" placeholder="Username" required>
                 <input type="password" name="pwd" placeholder="Password" required>
                 <input type="submit" name="submit" value="Log In">
             </form>
             <form class="forgot-password" action="">
                 <input id="forgot-password-toggle" type="checkbox">
                 <label for="forgot-password-toggle">forgot password?</label>
                 <div class="forgot-password-content">
                     <input type="email" placeholder="enter your email" required>
                     <input type="submit" value="go">
                 </div>
             </form>
          </div>
<!--  SIGN UP  -->
          <input class="radio" id="tab-2" name="tabs-name" type="radio">
          <label for="tab-2" class="table"><span>Sign up</span></label>
          <div class="tabs-content">
             <form action="includes/signup.inc.php" method="POST">
                 <input type="text" name="first" placeholder="First name" required>
                 <input type="text" name="uid" placeholder="Username" required>
                 <input type="email" name="email" placeholder="E-mail" required>
                 <input type="password" name="pwd" placeholder="Password" required>
                 <input type="submit" name="submit" value="Sign Up">
             </form>
          </div>
      </div>
  </div>
