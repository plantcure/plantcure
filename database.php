
<?php
require 'conn.php';

if(isset($_POST['button'])){
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $phone_no=$_POST['phone'];
  $email=$_POST['email'];
  $query=$_POST['query'];
  $feedback=$_POST['feedback'];
  

  $sql="insert into farmer(first_name,last_name,phone,email,query,feedback) values ('$first_name','$last_name','$phone_no','$email','$query','$feedback')";
  if(mysqli_query($conn,$sql)){
    echo "<script>alert('submitted successfully')</script>";
}else{
    echo "eror";
}
}

?>