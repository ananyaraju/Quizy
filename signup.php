<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../index.css">
  <title>Sign Up</title>
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="index.html">
      <img src="../logo.png" width="" height="45">
    </a>
  </nav>
  <div class="container s">
    <div class="row sCon2">
      <div class="col-md-6">
        <form method="post" action="adduser.php" class="signup col-md-8">
          <h3>Sign Up</h3>
          <div>
            <label>Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your Full Name"/>
          </div>
          <div>
            <label>E-Mail ID</label>
            <input type="email" id="email" name="email" placeholder="Enter your E-Mail ID"/>
          </div>
          <div>
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter Your Password" id="password"/>
          </div>
          <div>
            <button>Sign Up</button>
            <p>Already have an account? <a href="login.php"><span>Login</span></a></p>
          </div>
        </form>
      </div>
      <div class="col-md-6 imgS">
        <img src="../Saly-14.png">
      </div>
    </div>
  </div>

     <script src="/login.js"></script>
    

</body>
</html>