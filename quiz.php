<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
  <script>
      function save(event, question) {
        option = document.getElementsByClassName(question)
        console.log(option[0].classList)
        if(option[0].classList.contains("selected")){
          if(!answers.includes(option[0].innerText))
            answers.push(option[0].innerText)
        }
        else if(option[1].classList.contains("selected")){
          if(!answers.includes(option[1].innerText))
            answers.push(option[1].innerText)
        }
        else if(option[2].classList.contains("selected")){
          if(!answers.includes(option[2].innerText))
            answers.push(option[2].innerText)
        }
        else{
          console.log('ille')
        }
        console.log(answers)
      }
  </script>
  <script src="https://webgazer.cs.brown.edu/webgazer.js?" defer></script>
  <script src="script.js" defer></script>
  <script src="https://cdn.socket.io/4.1.1/socket.io.min.js"
    integrity="sha384-cdrFIqe3RasCMNE0jeFG9xJHog/tgOVC1E9Lzve8LQN1g5WUHo0Kvk1mawWjxX7a"
    crossorigin="anonymous" ></script>

    <link rel="stylesheet" href="../index.css">

    <title>Quiz</title>
    <?php 
      $title = $_GET["title"]
    ?>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="index.html">
        <img src="../logo.png" width="" height="50" alt="50">
      </a>
      <div class="navbar-right user" style="padding: 5px; margin: 10px;">
        <div class="useritem" id="useritem">
        </div>
        <img src="../pic.png"></img>
      </div>
    </nav>
    <div style="text-align: center;">
      <h3 style="text-transform: uppercase; font-weight: bold"> <?php echo $title ?> QUIZ</h3>
    </div>
    <br><br>
    <form id="f1">
    <div class="quiz-box" style="margin-left: 35%; margin-right: 10%;">
    <div class="row" id="quizrow">
      <?php 
        include('connection.php');
		  	$query1=mysqli_query($con,"select distinct question from `questions` where title='$title';") or die(mysqli_error($con));
		  	while($row=mysqli_fetch_array($query1)) {
          $question = $row['question'];
      ?>
          <div id="question" style="text-align: center">
            <?php echo $row['question']; ?>
          </div>
          <br>
          <?php
            include('connection.php');
            $query2=mysqli_query($con,"select `options` from `questions` where question='$question';") or die(mysqli_error($con));
            while($row=mysqli_fetch_array($query2)) {
          ?>
          <div id="options">
            <input type="radio" onclick="save(this, <?php echo $question ?>)"
              name="<?php echo $question?>"
              <?php if (isset($question) && $question==$row['options']) echo "checked";?>
              value="<?php echo $row['options'];?>">
              <?php echo $row['options'];?>
            </input>
          </div>
          <br>
      <?php
        }
      ?>
      <?php
		    }
	    ?>
    </div>
    </div>
    </form>
    <br><br>
      <button id="save" style="margin-left: 50%" onclick="saveAns(this)">Save</button>
      <br><br>
      <button id="result" style="margin-left: 50%; background-color: #4CAF50;">
      <a href="complete.php?title=<?php echo $title; ?>" style="color: white;">Result</a>
    </button>
      <br><br><br><br>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- <script src="login.js"></script> -->

</html>