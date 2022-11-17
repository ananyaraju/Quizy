<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../index.css">
  <title>Instructions</title>
</head>

<body>
  <?php
  	include('connection.php');
  	$title=$_GET['title'];
  ?>
  <nav class="navbar navI navbar-light bg-light">
    <a class="navbar-brand" href="index.html">
      <img src="../logo.png" width="" height="45" alt="50">
    </a>
    <div class="navbar-right user" style="padding: 5px; margin: 10px;">
      <div class="useritem" id="useritem">
      </div>
      <img src="../pic.png" />
    </div>
  </nav>
  <div class="sCon instructions">
    <div style="color: white;
          font-weight: 500;">
      <h2 style="font-weight: bold">Instructions</h2>
      <br>
      <div>
        <span style="font-weight: bold">Quiz Title:
        <input type="text" style="color: black" id="quiztitle" value="<?php echo $title?>" readonly></input></span><br>
        <br>
        <p>Read all the instructions properly</p>
        <ol>
          <li>All questions are <b>multiple choice questions.</b></li>
          <li>There is no negative marking.</li>
          <li>Press <b>"Save" button</b> after answering each question.</li>
          <li>The entire exam is recorded along with your actions during the exam.</li>
          <li>Do not try to leave the test window during the exam.</li>
          <li>Malpractices will be recorded and you might be logged out of the exam.</li>
        </ol>
        <p>Click "Result" only after completition of the Exam.</p>
      <div>
        
      </div>
      </div>
      <button class="btn btn-danger">
        <a style="color: white;" href="env.php?title=<?php echo $title; ?>">Start Test</a>
      </button>
      </div>
    <div>
      <img src="../Saly-26.png" />
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="js/login.js"></script>
  <script>
    var checkbox = document.getElementById("checkboxTerms");
    var btn = document.getElementById("instructionsBtn");
    handleChange = () => {
      if (event.target.checked) {
        btn.classList.add("enable-btn")
      } else {
        btn.classList.remove("enable-btn")
      }
    }
  </script>

</body>

</html>