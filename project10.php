<?php

$con=mysqli_connect("db.luddy.indiana.edu","i308s25_wbridgwa","blawn8655sered", "i308s25_wbridgwa");

if (mysqli_connect_errno())

   { die("Failed to connect to MySQL: <br>" . mysqli_connect_error()); }

else

   { echo "Established Database Connection<br>";}

$id = intval($_POST['student_id']);
$fname = mysqli_real_escape_string($con, $_POST['student_first_name']);
$mname = mysqli_real_escape_string($con, $_POST['student_middle_name']);
$lname = mysqli_real_escape_string($con, $_POST['student_last_name']);
$email = mysqli_real_escape_string($con, $_POST['student_email']);
$interest = mysqli_real_escape_string($con, $_POST['student_area_of_interest']);
$placement = mysqli_real_escape_string($con, $_POST['student_placement']);
$phone = mysqli_real_escape_string($con, $_POST['student_phone']);


$sql = "INSERT INTO student (studentID, fname, mname, lname, email, areaOfInterest, placement, phone) VALUES ($id,'$fname','$mname','$lname','$email','$interest', '$placement', '$phone')";

if (mysqli_query($con,$sql)) {

  echo "1 record added";

} else {

echo "SQL Error: " . mysqli_error($con) . "<br>";
echo "Tried SQL: " . $sql;

}

mysqli_close($con);

?>
