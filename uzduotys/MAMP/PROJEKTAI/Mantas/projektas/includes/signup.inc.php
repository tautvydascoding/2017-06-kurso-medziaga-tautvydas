<?php

if (isset($_POST['submit'])) {

  include_once 'db.inc.php';

  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);



  //Error handlers
  //Check for emty fields
  if (empty($first) || empty($uid) || empty($email) || empty($pwd)) {
    header("Location: ../index.php?signup=empty");
    exit();
  } else {
    //check if input characters are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first)) {
      header("Location: ../index.php?signup=invalid");
      exit();
    } else {
      //check if email is valid
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?signup=email");
        exit();
      } else {
        $sql = "SELECT * FROM users WHERE user_uid='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
          header("Location: ../index.php?signup=usertaken");
          exit();
        } else {
          //Hashing the password
          $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
          //insert the user into the database
          $sql = "INSERT INTO users (user_first, user_email, user_pwd, user_uid) VALUES ('$first', '$email', '$hashedPwd', '$uid');";
          mysqli_query($conn, $sql);
          include '../email.php';
          header("Location: ../index.php?signup=success");
          exit();
        }
      }
    }
  }

} else {
  header("Location: ../index.php");
  exit();
}
