
<?php
require 'conn.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--Our css file-->
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="contact.css">
    <title>Contact Us</title>
    <!-- Icon fonts  -->
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=#navbar>
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand " href="#"><img src="logo3.png" width="70px" height="70px"></a>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li class="nav-item "><a class="nav-link" href="useful.html"><i
                                class="fa fa-pagelines"></i></i>Useful Links</a></li>
                    <li class="nav-item "><a class="nav-link" href="about.html"><i
                                class="fa fa-user-secret"></i></i>About Us</a></li>
                    <li class="nav-item active"><a class="nav-link" href="Contact_pulkit.php"><i
                                class="fa fa-address-card"></i>Query Portal</a></li>


                </ul>
            </div>
        </div>
    </nav>
<div class="row row-content">
  <div class="col">
    <div class="main">
      <div class="container-card">
        <div class="aligned">
          <h1 style="text-align: center;">Contact Us</h1><br>


        <div class="wrapper">  
        <div id="error_message"></div>


        <form method="post" id="myform" name="ContactForm" onsubmit="return validation();" action=<?php submit_query($conn)?>>




          <!--<input type="text" name="First Name" placeholder="First Name" id="firstname" class="in"><br><br>
          <input type="text" name="Last Name" placeholder="Last Name" id="lastname" class="in"><br><br>
          <input type="text" name="Phone" placeholder="Phone Number" id="phone" class="in"><br><br>
          <input type="email" name="Email" placeholder="Email-ID" id="emailid" class="in"><br><br>
          <textarea name="Query" rows="5" cols="50" placeholder="Query" id="message1" class="in"></textarea><br><br><br>
          <textarea name="Feedback" rows="5" cols="50" placeholder="Feedback" class="in"></textarea><br><br><br>-->
          


            <label for="First Name" class="nm">First Name:</label><br><br>
            
            <input type="text" name="first_name" id="firstname" class="in"><br><br>

            <label for="Last Name" class="nm">Last Name:</label><br><br>

            <input type="text" name="last_name" id="lastname" class="in"><br><br>

            <label for="Phone Number" class="nm">Phone Number:</label><br><br>

            <input type="text" name="phone" placeholder="" id="phone" class="in"><br><br>

            <label for="Email" class="nm">E-mail ID:</label><br><br>

            <input type="text" name="email" id="emailid" class="in"><br><br>

            <label for="Query" class="nm">Query:</label><br><br>

            <textarea name="query" rows="5" cols="50" id="message1" class="in"></textarea><br><br><br>

            <h4>Please take out your valuable time to provide us a feedback.</h4><br><br>

            <label for="Feedback" class="nm">Feedback:</label><br><br>

            <textarea name="feedback" rows="5" cols="50" class="in"></textarea><br><br><br>

            <button type="submit" name="button" value="Submit" class="submit custom-btn btn">Submit</button><br>
          </form>
        </div>
      </div>
    </div>
</div>
</div>
  <!--Footer-->
  <footer class="footer" style="position: fixed; bottom: 0;">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="text-center">

                        <a class="btn btn-socal-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i
                                class="fa fa-facebook"></i></a>
                        <a class="btn btn-socal-icon btn-linkedin" href="http://www.linkedin.com/in/"><i
                                class="fa fa-linkedin"></i></a>
                        <a class="btn btn-socal-icon btn-twitter" href="http://twitter.com/"><i
                                class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
          
</body>



<?php


function submit_query($conn){
  
  if(isset($_POST['button'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $phone_no=$_POST['phone'];
    $email=$_POST['email'];
    $query=$_POST['query'];
    $feedback=$_POST['feedback'];
  
    $sql="insert into farmer(first_name,last_name,phone,email,query,feedback) values ('$first_name','$last_name','$phone_no','$email','$query','$feedback')";
    if(mysqli_query($conn,$sql)){
      header('Location: Contact_pulkit.php');
  }else{
      echo "error";
  }
  }
}

?>





  <script>
    function validation(){
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("emailid").value;
    

    var regName = /^([a-zA-Z ]){2,30}$/;
    var regphone = /^[0-9]{10}$/;
    var regemail = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;

    error_message.style.padding = "10px";

    if(!regName.test(firstname)){
      alert("Please Enter Valid First Name");
      return false;
    }
    
    else if(!regName.test(lastname)){
      alert("Please Enter Valid Last Name");
      return false;
    }

    else if(!regphone.test(phone)){
      alert("Please enter valid phone no");
      return false;
    }
    
    else if(!regemail.test(email)){
      alert("Please Enter Valid Email");
      return false;
    }
    else{
      alert("Thank you!!!");
    }

 

  }

</script>
</html>