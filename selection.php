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
    <title>Home Page</title>
</head>
<body>
    <nav class="navbar navI navbar-light bg-light">
      <div>
        <a class="navbar-brand" href="index.html">
          <img src="../logo.png" width="" height="45" alt="50">
        </a>
      </div>
      <div class="navbar-right user" style="padding: 5px; margin: 10px;">
        <div style="padding-left: 10px">
            Logged in as<br>
            <p style="font-weight: bold">STUDENT</p>
        </div>
            <img src="../pic.png"/>
      </div>
    </nav>
    <div class="selection">
      <h2>Upcoming Quizzes</h2>
      <div>
      <?php
			include('connection.php');
			$query=mysqli_query($con,"select * from `quizzes`");
			while($row=mysqli_fetch_array($query)) {
		?>
				<div class="col-md-3" id="expandDiv">
                  <h2 style="color: black">Quiz</h2>
                  <h4 style="font-weight: bold"><?php echo $row['title']; ?></h4>
                  <p style="color: black">Open till <?php echo $row['due']; ?></p>
                  <div id="codeBox" style="display:none">
                    <label style="color: black">Enter Code</label>
                    <input type="text" placeholder="Code" id="enteredCode"/>
                    <button id="start" onclick="window.location.href='instructions.html'">Start</button>
                  </div>
                  <button id="join" onclick="showCode(1)">Join</button>
                </div>
                <?php
			}
		?>
       
      </div>
      <img src="../Saly-17.png"/>
    </div>
<script>
    function showCode(a){
      for(let i=1;i<=3;i++){
        var x = document.getElementById(`codeBox`);
        var y = document.getElementById(`expandDiv`);
        var z = document.getElementById(`join${i}`);
        if(a===i){
          if (x.style.display === "none") {
            x.style.display = "block";
            y.classList.add("q2");
            x.classList.add("inputScale");
            z.style.display="none";
          }
        } else {
            x.style.display = "none";
            y.classList.remove("q2");
            x.classList.remove("inputScale");
            z.style.display="block";
          }
      }
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>