<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $password=md5($password);

     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(firstName,lastName,email,password,role)
                       VALUES ('$firstName','$lastName','$email','$password','USER')";
            if($conn->query($insertQuery)==TRUE){
                header("location: index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password);
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   $result=$conn->query($sql); 
   if($result->num_rows>0){
    $sql2="SELECT * FROM users WHERE email='$email' and role='ADMN'";
    $result2=$conn->query($sql2);
    $sql3="SELECT * FROM users WHERE email='$email' and role='USER'";
    $result3=$conn->query($sql3);
        if ($result2->num_rows> 0){
            session_start();
            header("Location: homepageadmin.php");
            exit();
        }
        elseif ($result3->num_rows>0) {
            session_start();
            header("Location: homepage.php");
            exit();
        }
   }

   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
