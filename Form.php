<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registration form</title>
  <link rel="stylesheet" href="CSS FILE/Form.css">
  <link rel="website icon" type="image/png" href="https://cdn-icons-png.flaticon.com/128/1940/1940611.png">
</head>

<body>
  <form action="Form.php" method="POST">
    <fieldset>
      <legend>Student Registration Form </legend>
      <div class="all">
        <div>
          <label>College Name: </label>
          <input type="text" class="cname" placeholder="Enter your college name" required="" autofocus="" name="Collegename">
        </div>
        <div>
          <label>Name: </label>
          <input type="text" class="student" placeholder="Enter your name" required="" name="Name">
        </div>
        <div>
          <label>Course: </label>
          <input type="text" class="student" placeholder="Enter your course" required="" name="Course">
        </div>
        <div>
          <label>Semester: </label>
          <input type="number" maxlength="1" class="student" placeholder="Enter your semester" required=""name="Semester">
        </div>
        <div>
          <label>Roll No.: </label>
          <input type="text" maxlength="11" class="student" placeholder="Enter your roll number" required="" name="Rollnumber">
        </div>
        <div>
          <label>Gender: </label>
          <!--<input type="radio" class="student" name="Gender"> Male
          <input type="radio" class="student" name="Gender"> Female-->
          <input type="text" name="Gender" placeholder="Enter Male/Female"/>
        </div>
        <div>
          <label>E-mail: </label>
          <input type="mail" class="student" placeholder="Enter your email" required="" name="Email">
        </div>
        <div>
          <label>Contact No.: </label>
          <input type="number" maxlength="11" class="student" placeholder="Enter your contact number" required="" name="Contactnumber">
        </div>
        <div class="submit">
          <button name="sb">Register Your Data</button>
        </div>
      </div>
    </fieldset>
  </form>
  <?php
  $conn=mysqli_connect('localhost','root','','form');
  if(isset($_POST['sb'])){
    $collegename=$_POST['Collegename']; 
    $name=$_POST['Name']; 
    $course=$_POST['Course']; 
    $semester=$_POST['Semester'];
    $rollnumber=$_POST['Rollnumber'];
    $gender=$_POST['Gender'];
    $email=$_POST['Email'];
    $contactnumber=$_POST['Contactnumber'];
    $query1="INSERT INTO form.form_data(College_name,Name,Course,Semester,Roll_number,Gender,Email,Contact_number)VALUES('$collegename','$name','$course','$semester','$rollnumber','$gender','$email','$contactnumber')";
    $query2="ALTER TABLE form_data MODIFY Contact_Number BIGINT";
    $execute=mysqli_query($conn,$query1);
  }
  else
    echo "Connection Failed";
?>
</body>

</html>