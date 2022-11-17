<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../index.css">
    <title>Admin</title>
</head>
<body>
    <?php
        $title = $q1 = $op1 = $op2 = $op3 = $ans1 = $q2 = $op4 = $op5 = $op6 = $ans2 = $q3 = $op7 = $op8 = $op9 = $ans3 =" ";
        if(isset($_GET['title'])){
            $title = test_input($_POST["title"]);
        }
        else {
            $title="";
        }
        if(isset($_GET['due'])){
            $due = test_input($_POST["due"]);
        }
        else {
            $due="";
        }
        if(isset($_GET['q1'])){
            $q1 = test_input($_POST["q1"]);
        }
        else {
            $q1="";
        }
        if(isset($_GET['op1'])){
            $op1 = test_input($_POST["op1"]);
        }
        else {
            $op1="";
        }
        if(isset($_GET['op2'])){
            $op2 = test_input($_POST["op2"]);
        }
        else {
            $op2="";
        }
        if(isset($_GET['op3'])){
            $op3 = test_input($_POST["op3"]);
        }
        else {
            $op3="";
        }
        if(isset($_GET['ans1'])){
            $ans1 = test_input($_POST["ans1"]);
        }
        else {
            $ans1="";
        }
        if(isset($_GET['q2'])){
            $q2 = test_input($_POST["q2"]);
        }
        else {
            $q2="";
        }
        if(isset($_GET['op4'])){
            $op4 = test_input($_POST["op4"]);
        }
        else {
            $op4="";
        }
        if(isset($_GET['op5'])){
            $op5 = test_input($_POST["op5"]);
        }
        else {
            $op5="";
        }
        if(isset($_GET['op6'])){
            $op6 = test_input($_POST["op6"]);
        }
        else {
            $op6="";
        }
        if(isset($_GET['ans2'])){
            $ans2 = test_input($_POST["ans2"]);
        }
        else {
            $ans2="";
        }
        if(isset($_GET['q3'])){
            $q3 = test_input($_POST["q3"]);
        }
        else {
            $q3="";
        }
        if(isset($_GET['op7'])){
            $op7 = test_input($_POST["op7"]);
        }
        else {
            $op7="";
        }
        if(isset($_GET['op8'])){
            $op8 = test_input($_POST["op8"]);
        }
        else {
            $op8="";
        }
        if(isset($_GET['op9'])){
            $op9 = test_input($_POST["op9"]);
        }
        else {
            $op9="";
        }
        if(isset($_GET['ans3'])){
            $ans3 = test_input($_POST["ans3"]);
        }
        else {
            $ans3="";
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <nav class="navbar navI navbar-light bg-light">
        <a class="navbar-brand" href="index.html">
          <img src="../logo.png" width="" height="50" alt="50">
        </a>
      <div class="navbar-right user" style="padding: 5px; margin: 10px;">
        <div id="useritem">
            
        </div>
        <img src="../pic.png"/>
      </div>
      </nav>
      <div class="adminContainer">
          <div class="adminHeader">
              <h2>ADMIN PORTAL</h2>
              <p>Create Quizzes and Questions</p>
          </div>
          <br><br>
        <form method="post" action="addQuiz.php">
          Quiz Name:<input type="text" name="title"></input><br><br>
          Due Date:<input type="text" name="due"></input>
          <div class="adminHeader2">
              <h3>Questionaire : </h3>
          </div>
          <div class="questionContainer">
            <br>
            QUESTION 1: <input style="width: 400px" type="text" name="q1"><br><br>
            Options:<br>
                <input type="text" name="op1"></input><br>
                <input type="text" name="op2"></input><br>
                <input type="text" name="op3"></input><br>
            Answer:<br>
                <input type="text" name="ans1"></input><br><br>
            QUESTION 2: <input style="width: 400px" type="text" name="q2"><br><br>
            Options:<br>
                <input type="text" name="op4"></input><br>
                <input type="text" name="op5"></input><br>
                <input type="text" name="op6"></input><br>
            Answer:<br>
                <input type="text" name="ans2"></input><br><br>
            QUESTION 3: <input style="width: 400px" type="text" name="q3"><br><br>
            Options:<br>
                <input type="text" name="op7"></input><br>
                <input type="text" name="op8"></input><br>
                <input type="text" name="op9"></input><br>
            Answer:<br>
                <input type="text" name="ans3"></input><br><br>
          </div>
          <input type="submit" id="quizbutton" value="Post Quiz"></input>
    </form>
      </div>
    </div>


</body>
</html>