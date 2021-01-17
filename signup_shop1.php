<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/signupstyle.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Register</title>
</head>

<body>

<div class="signup-page">
<form class="signup" action="signup_shop2.php" method="post"  autocomplete="off" enctype="multipart/form-data">
  <h1>Create account</h1>
  <h2>Please let us know about Shop Owner</h2>
  <div class="signup__field">
    <input class="signup__input" type="text" name="fname" id="fname" required />
    <label class="signup__label" for="fname">First Name</label>
  </div>
  <div class="signup__field">
    <input class="signup__input" type="text" name="lname" id="lname" required />
    <label class="signup__label" for="lname">Last Name</label>
  </div>
  <div class="signup__field">
    <input class="signup__input" type="text" name="username" id="username" required />
    <label class="signup__label" for="username">username</label>
  </div>
  <div class="signup__field">
    <input class="signup__input" type="email" name="email" id="email" required />
    <label class="signup__label" for="email">Email</label>
  </div>

  <div class="signup__field">
    <input class="signup__input" type="password" name="password" id="password" required />
    <label class="signup__label" for="password">Password</label>
  </div>
  <div class="signup__field">
    <input class="signup__input" type="text" name="mobile_no" id="mobileno" required />
    <label class="signup__label" for="mobileno">Mobile No</label>
  </div>
  <div class="signup__field">
    <input class="signup__input" type="text" name="address" id="address" required />
    <label class="signup__label" for="address">Address</Address></label>
  </div>

  <input class="submit_button"type="submit" name="signup_shop1" id="btn-login" value="Next">
</form>
</div>