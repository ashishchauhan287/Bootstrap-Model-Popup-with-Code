<?php
include "config.php";

$userid = $_POST['userid'];

$sql = "select * from employee where id=".$userid;
$result = mysqli_query($con,$sql);

$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
 $id = $row['id'];
 $emp_name = $row['emp_name'];
 $salary = $row['salary'];
 $gender = $row['gender'];
 $city = $row['city'];
 $email = $row['email'];
 
 $response .= "<tr>";
 $response .= "<td>Name : </td><td>".$emp_name."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Salary : </td><td>".$salary."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Gender : </td><td>".$gender."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>City : </td><td>".$city."</td>";
 $response .= "</tr>";

 $response .= "<tr>"; 
 $response .= "<td>Email : </td><td>".$email."</td>"; 
 $response .= "</tr>";

}
$response .= "</table>";

echo $response;
exit;