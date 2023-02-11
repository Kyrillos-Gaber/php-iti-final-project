<?php
session_start();
if (isset($_SESSION["admin_name"])) {
  header("location:index.php");
}
// include Function  file
include_once('function.php');
// Object creation
$usercredentials = new DB_con();
$connect = mysqli_connect("localhost", "root", "", "userdb");

if (isset($_POST['signin'])) {
  // Posted Values
  $uname = $_POST['username'];
  $pasword = md5($_POST['password']);

  // check variable of database 
  $name = mysqli_real_escape_string($connect, $_POST["username"]);
  $password = md5(mysqli_real_escape_string($connect, $_POST["password"]));
  $sql = "Select * from tblusers where Username = '" . $name . "' and Password = '" . $password . "'";
  $result = mysqli_query($connect, $sql);
  $user = mysqli_fetch_array($result);
  if ($user) {
    if (!empty($_POST["remember"])) {
      // setcookie("member_login", $name, time() + (10 * 365 * 24 * 60 * 60));
      setcookie("member_login", $name, time() + (60));
      setcookie("member_password", $password, time() + (60));
      $_SESSION["admin_name"] = $name;
    } else {
      if (isset($_COOKIE["member_login"])) {
        setcookie("member_login", "");
      }
      if (isset($_COOKIE["member_password"])) {
        setcookie("member_password", "");
      }
    }
    header("location:welcome.php");
  } else {
    $message = "Invalid Login";
  }

  //Function Calling
  $ret = $usercredentials->signin($uname, $pasword);
  $num = mysqli_fetch_array($ret);
  if ($num > 0) {
    $_SESSION['uid'] = $num['id'];
    $_SESSION['fname'] = $num['FullName'];
    // For success
    echo "<script>window.location.href='welcome.php'</script>";
  } else {
    // Message for unsuccessfull login
    echo "<script>alert('Invalid details. Please try again');</script>";
    echo "<script>window.location.href='signin.php'</script>";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assests/style.css" rel="stylesheet">
  <link href="assests/bootstrap.min.css" rel="stylesheet">
  <script src="assests/jquery-1.11.1.min.js"></script>
  <script src="assests/bootstrap.min.js"></script>
</head>

<body>
  <form class="form-horizontal" action='' method="POST">
    <fieldset>

      <div class="container">

        <div id="legend">
          <legend class="">User Signin </legend>
        </div>

        <div class="container">
          <div class=" w-50 m-auto d-flex flex-column my-5 py-5 shadow p-3 mb-5 bg-body-tertiary rounded">
            <div class="control-group ">
              <!-- Fullname -->
              <label class="control-label fs-4" for="username">Username</label>
              <div class="controls">
                <input type="text" id="username" value="<?php if (isset($_COOKIE["member_login"])) {
                                                          echo $_COOKIE["member_login"];
                                                        } ?>" name="username" placeholder="" class="input-xlarge p-3" required="true">
              </div>
            </div>


            <div class="control-group ">
              <!-- Password-->
              <label class="control-label fs-4" for="password">Password</label>
              <div class="controls">
                <input type="password" id="password" name="password" value="<?php if (isset($_COOKIE["member_password"])) {
                                                                              echo $_COOKIE["member_password"];
                                                                            } ?>" placeholder="" class="input-xlarge p-3" required="true">
              </div>
            </div>



            <div class="control-group fs-5">
              <!-- Button -->
              <div class="controls  ">
                Remember me
                <input type="checkbox" name="remember" <?php if (isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
              </div>
              <div class="controls">
                <br><br>
                <button class="btn btn-success" type="submit" name="signin">Signin</button>
              </div>
            </div>

            <div class="control-group fs-6">
              <!-- Button -->
              <div class="controls">
                Not Registered yet? <a href="index.php">Register Here</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </fieldset>
  </form>
  <script type="text/javascript">

  </script>
</body>

</html>