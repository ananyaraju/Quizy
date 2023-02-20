# Quizy
Quizy is an online quiz portal for students and teachers, enabling them to attempt and create quizzes respectively. The quizzes shall be auto-proctored via facial recognition and eye-tracking AI models. The AI models include a TensorFlow COCO model, which identifies the objects captured by the camera, and a Web Gazer model, used to track eye movements of a student across the computer screen to minimise malpractices during online examinations.

## Built With
* Client Side Programming - HTML, CSS, JavaScript
* Server Side Programming - PHP, MySQL

<p float="left">
  <img src="https://github.com/ananyaraju/quizy/blob/main/assets/logos/htmlcssjs-logo.png" height="80" />
  <img src="https://github.com/ananyaraju/quizy/blob/main/assets/logos/php-logo.png" height="80" />
  <img src="https://github.com/ananyaraju/quizy/blob/main/assets/logos/mysql-logo.jpg" height="80"/>
</p>

## Working
Users are divided into two categories, based on their whether they are a student or a teacher.
Once logged in using their unique credentials, each user will be redirected to their respective home pages.

Students can view all quizzes on their home page, and start the quiz by simply clicking a button.
Once they have read all given instructions and undergone an Environment Check for the TensorFlow model, they can proceed to attempt the quiz.
While a student is attempting the quiz, he/she shall be auto-proctored by the 2 AI models mentioned above. If a student is found to be endulging in malpractice, like using their phone, looking somewhere other than the computer screen, etc., their activity is marked. On being marked more than 3 times, the student is automatically blocked from further attending the quiz. If a student submits the quiz without any registered malpractices, the auto-calculated quiz result is displayed on submitting the quiz.

On the other hand, the admin portal is extremely easy to quiz. It consists only of a Quiz Creation page, which teachers can submit the questionnaire and answers.

## Screenshots

<br>
<div align="center">
  <img src="https://github.com/ananyaraju/quizy/blob/main/assets/screenshots/homepage.jpg" width="400" />  
  <img src="https://github.com/ananyaraju/quizy/blob/main/assets/screenshots/sign-up.jpg" width="400" />  
</div>

<br>
<li>Student Portal</li>
<br>
<div align="center">
  <img src="https://github.com/ananyaraju/quizy/blob/main/assets/screenshots/student-home.jpg" width="400" />  
  <img src="https://github.com/ananyaraju/quizy/blob/main/assets/screenshots/instructions.jpg" width="400" />
  <img src="https://github.com/ananyaraju/quizy/blob/main/assets/screenshots/environment.png" width="400" />
  <img src="https://github.com/ananyaraju/quizy/blob/main/assets/screenshots/envir-check.png" width="400" />  
  <img src="https://github.com/ananyaraju/quizy/blob/main/assets/screenshots/attempting-quiz.jpg" width="400" />  
  <img src="https://github.com/ananyaraju/quizy/blob/main/assets/screenshots/look-around.png" width="400" />
  <img src="https://github.com/ananyaraju/quizy/blob/main/assets/screenshots/blocked.jpg" width="400" />
  <img src="https://github.com/ananyaraju/quizy/blob/main/assets/screenshots/quiz-complete.jpg" width="400" />
</div>

<br>
<li>Admin Portal</li>
<br>
<div align="center">
  <img src="https://github.com/ananyaraju/quizy/blob/main/assets/screenshots/admin-home.jpg" width="400" />  
  <img src="https://github.com/ananyaraju/quizy/blob/main/assets/screenshots/quiz-created.jpg" width="400" />
</div>
