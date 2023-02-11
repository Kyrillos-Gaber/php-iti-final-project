<?php
// include Function  file
// include_once('../../../controllers/');
require_once("../../../../vendor/autoload.php");

// Object creation
$userdata = new DB_con();
if (isset($_POST['submit'])) {
  // Posted Values
  $fname = $_POST['fullname'];
  $uname = $_POST['username'];
  $uemail = $_POST['email'];
  $pasword = md5($_POST['password']);
  //Function Calling
  $sql = $userdata->registration($fname, $uname, $uemail, $pasword);
  if ($sql) {
    // Message for successfull insertion
    echo "<script>alert('Registration successfull.');</script>";
    echo "<script>window.location.href='signin.php'</script>";
  } else {
    // Message for unsuccessfull insertion
    echo "<script>alert('Something went wrong. Please try again');</script>";
    echo "<script>window.location.href='signin.php'</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>User Registration using PHP OOPs Concept</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assests/style.css" rel="stylesheet">
  <link href="assests/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../../../node_modules/bootstrap/dist/css/bootstrap.min.css">

  <script src="assests/jquery-1.11.1.min.js"></script>
  <script src="assests/bootstrap.min.js"></script>
  <script>
    function checkusername(va) {
      $.ajax({
        type: "POST",
        url: "check_availability.php",
        data: 'username=' + va,
        success: function(data) {
          $("#usernameavailblty").html(data);
        }
      });

    }
  </script>
</head>

<body>
  <form class="form-horizontal" action='' method="POST">
    <fieldset>
      <div id="legend" align="center">
        <legend class="">Welcome to our site</legend>
      </div>
      
<div class="container pb-5">
  <div class="w-50 m-auto d-flex flex-column m-5 py-5 shadow p-3 mb-5 bg-body-tertiary rounded">
    
  <div class="control-group">
        <!-- Fullname -->
        <label class="control-label fs-4" for="username">Fullname</label>
        <div class="controls">
          <input type="text" id="username" name="fullname" placeholder="" class="input-xlarge p-2" required="true">
        </div>
      </div>


      <div class="control-group">
        <!-- Username -->
        <label class="control-label fs-4" for="username">Username</label>
        <div class="controls">
          <input type="text" id="username" name="username" onblur="checkusername(this.value)" class="input-xlarge p-2" required="true">
          <span id="usernameavailblty"></span>
        </div>
      </div>

      <div class="control-group">
        <!-- E-mail -->
        <label class="control-label fs-4" for="email">E-mail</label>
        <div class="controls">
          <input type="email" id="email" name="email" placeholder="" class="input-xlarge p-2" required="true">
        </div>
      </div>

      <div class="control-group">
        <!-- Password-->
        <label class="control-label fs-4" for="password">Password</label>
        <div class="controls">
          <input type="password" id="password" name="password" placeholder="" class="input-xlarge p-2" required="true">
        </div>
      </div>



      <div class="control-group">
        <!-- Button -->
        <div class="controls">
          <button class="btn btn-success" type="submit" id="submit" name="submit">Register</button>
        </div>
      </div>

      <div class="control-group">
        <div class="controls">
          Already registered <a href="signin.php">Signin</a>
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