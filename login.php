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
  <title>Log-In</title>
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="index.html">
      <img src="../logo.png" width="" height="45px">
    </a>
  </nav>
  <div class="container s">
    <div class="row">
    <form class="col-md-6 sCon" method="post" action="authentication.php">
          <div class="signup col-md-8">
            <h3>Login</h3>
            <div>
              <label>E-Mail ID</label>
              <input type="email" name="email" id="email" placeholder="Enter your E-Mail ID"/>
            </div>
            <div>
              <label>Password</label>
              <input type="password" name="password" placeholder="Enter Your Password" id="password"/>
            </div>
            <div>
              <button>Login</button>
              <p>Don't have an account? <a href="signup.php"><span>Signup</span></a></p>
            </div>
          </div>
    </form>
      <div class="col-md-6 imgS">
        <img src="../Saly-11.png">
      </div>
    </div>
  </div>
  <script src="/main.js"></script>
</body>
</html>