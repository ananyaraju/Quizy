<?php      
    include('connection.php');
    $email = $_POST['email'];
    $password = $_POST['password'];  
       
        $email = stripcslashes($email);
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from credentials where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if($count == 1){
            if ($email == "admin@quizy.com") {
                header("Location: http://localhost/quizy/admin.php");
            }
            else {
                header("Location: http://localhost/quizy/selection.php");
            }
        }  
        else{
            echo '<script type="text/javascript">
                alert("User does not exist. Register first.");
                location="signup.php";
                </script>';
        }     
?>