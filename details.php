<?php
include 'demo.html';
include_once 'database.php';

session_start();
if(!(isset($_SESSION['email'])))
{
    header("location:index_student.php");
}
else
{
    
    $email = $_SESSION['email'];
    include_once 'database.php';
}
$id=@$_GET['id'];
$pemail=@$_GET['profmail'];
$abcd=@$_GET['stumail'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home2.css">

</head>
<body>
  
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <?php 
       $result = mysqli_query($con,"SELECT * FROM prof_name where id ='$id'") or die('Error');
       while($row = mysqli_fetch_array($result)) 
       {
		$name = $row['p_name'];
        $emailid = $row['email'];
        $phone = $row['phone_no'];
        $experience = $row['experience'];
        $about = $row['about_me'];
        $specialties = $row['specialties'];
        
        

		echo  '
        
        <h6 class="f-w-600">Name: </h6><h4 class="text-muted f-w-400">' .$name.'</h4>
        
    </div>
</div>
<div class="col-sm-8">
<div class="card-block">
    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Contact Details:</h6>
    <div class="row">
        
        <div class="col-sm-6">
            <p class="m-b-10 f-w-600">Email</p>
            <h6 class="text-muted f-w-400">'.$emailid.'</h6>
        </div>
        <div class="col-sm-6">
            <p class="m-b-10 f-w-600">Phone</p>
            <h6 class="text-muted f-w-400">'.$phone.'</h6>
        </div>     
        </div>
        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Details:</h6>
        <div class="row">
            <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Experience</p>
                <h6 class="text-muted f-w-400">'.$experience.'</h6>
            </div>
            <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Specialties:</p>
                <h6 class="text-muted f-w-400 ">'.$specialties.'</h6>
            </div>
            <br>
            <div class="col-sm-6">
                <p class="m-b-10 f-w-600">About Me:</p>
                <h6 class="text-muted f-w-400">'.$about.'</h6>
            </div>
            
            </div>
       
        
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
        ';
       }
      
   
?>


                       
                               

</body>
</html>