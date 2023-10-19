

<?php
    session_start();
    include('connection.php');
    
    if (isset($_POST['submit'])) {
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      
      $query = "SELECT * FROM Users WHERE Username='$username'";
      $data = mysqli_query($conn, $query);
      $total = mysqli_num_rows($data);
      
      if ($total == 1) {
        $row = mysqli_fetch_assoc($data);
        
        if (password_verify($password, $row['Password'])) {
          $_SESSION['user_name'] = $username;
          header('location: welcome.php');
          exit();
        }
      } else {
        echo "<div class=\"failed\"> 
          Login Unsuccessful
        </div>";
      }
    }
    ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/style.css">
  <meta charset="utf-8">
  <title>Login</title>
</head>

<body>
  <div class="main-body">
    <h1>Login</h1>
    <div class="icon">
      <i class="fas fa-user-circle icn"></i>
    </div>

    <form action="" method="post">
      <div class="form">
        <i class="fas fa-user-alt"></i> <input type="text" placeholder="Username" class="txtfield" name="username" required><br>
        <i class="fas fa-unlock-alt"></i> <input type="password" placeholder="Password" class="txtfield" name="password" required>
      </div>

      <div class="ntg">
        <button type="submit" class="btn submit" name="submit">
          <span>Submit</span>
        </button>
      </div>
    </form>

    <div class="new_usr">
      <p class="text">Don't have an account?</p>
      <p><a href="signup.php">Sign up here</a></p>
    </div>

  </div>
</body>

</html>
