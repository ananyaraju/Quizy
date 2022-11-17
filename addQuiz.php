<?php
	include('connection.php');

    $title=$_POST['title'];
    $due=$_POST['due'];
	$q1=$_POST['q1'];
	$q2=$_POST['q2'];
    $q3=$_POST['q3'];
    $op1=$_POST['op1'];
    $op2=$_POST['op2'];
    $op3=$_POST['op3'];
    $op4=$_POST['op4'];
    $op5=$_POST['op5'];
    $op6=$_POST['op6'];
    $op7=$_POST['op7'];
    $op8=$_POST['op8'];
    $op9=$_POST['op9'];
    $ans1=$_POST['ans1'];
    $ans2=$_POST['ans2'];
    $ans3=$_POST['ans3'];

    mysqli_query($con,"insert into `quizzes` values ('$title','$due');");
	mysqli_query($con,"insert into `questions` values ('$title','$q1','$op1');");
    mysqli_query($con,"insert into `questions` values ('$title','$q1','$op2');");
    mysqli_query($con,"insert into `questions` values ('$title','$q1','$op3');");
    mysqli_query($con,"insert into `questions` values ('$title','$q2','$op4');");
    mysqli_query($con,"insert into `questions` values ('$title','$q2','$op5');");
    mysqli_query($con,"insert into `questions` values ('$title','$q2','$op6');");
    mysqli_query($con,"insert into `questions` values ('$title','$q3','$op7');");
    mysqli_query($con,"insert into `questions` values ('$title','$q3','$op8');");
    mysqli_query($con,"insert into `questions` values ('$title','$q3','$op9');");
    mysqli_query($con,"insert into `answers` values ('$q1','$ans1');");
    mysqli_query($con,"insert into `answers` values ('$q2','$ans2');");
    mysqli_query($con,"insert into `answers` values ('$q3','$ans3');");
	header('location:adminView.html');
 
?>
